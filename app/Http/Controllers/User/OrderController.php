<?php

namespace App\Http\Controllers\User;

use App\Models\UserProfile;
use Carbon;
use App\Models\Item;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'offset'    =>  'integer|min:0',
            'limit'     =>  'integer|min:0'
        ]);
//        $count = Order::where('buyer_user_id', Session::get('userid'))->get();
        $orders = Order::where('buyer_user_id', Session::get('userid'))->get()->keyBy('id');
        $items = Item::whereIn('id', $orders->pluck('item_id'))->get()->keyBy('id');
        $orders = $orders->toArray();
        $items = $items->toArray();

        foreach ($orders as $order) {
            $items[$order['item_id']]['type'] = $order['type'];
            $items[$order['item_id']]['created'] = $order['created_at'];
            $items[$order['item_id']]['price'] = $order['price'];
            $items[$order['item_id']]['order_id'] = $order['id'];
            $items[$order['item_id']]['number'] = $order['number'];
            $items[$order['item_id']]['sum'] = $order['number'] * $order['price'];
        }

//        $items = DB::table('items')->leftJoin('orders', 'items.id', 'orders.item_id')->get();
//        foreach( $items as $item) {
//            $item->sum = $order['number'] * $order['price'];
//        }

        return view('user.my.order', ['items' => $items]);
    }

    public function show(Request $request, $order_id)
    {
        $order = Order::find($order_id);
        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }
        $user = User::find($order->buyer_user_id);
        $item = Item::find($order->item_id)->toArray();
        $info = UserProfile::where('user_id', Session::get('userid'))->orderBy('id','desc')->first();
        $address = $info->province.' '.$info->city.' '.$info->area.' '.$info->address.' '.$info->name.' '.$info->mobile;
        $item['address'] = $address;
        $item['email'] = $user->email;
        $item['name'] = $user->name;
        $item['created'] = $order->created_at;
        $item['sum'] = $order->price * $order->number;
        $item['number'] = $order->number;
        $item['type'] = $order->type;
        $item['order_id'] = $order_id;
        return view('user.buy.trade', ['item' => $item]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'item_id'   =>  'required|integer|min:0',
            'note'      =>  'string',
            'number'    =>   'integer|min:0'
        ]);

        $item = Item::find($request->input('item_id'));
        if (empty($item) || $item->quantity <= 0) {
            return redirect()->back()->withErrors('Item not available.');
        }

        $order = Order::create([
            'type'              =>  'pending',
            'item_id'           =>  $item->id,
            'name'              =>  $item->name,
            'buyer_user_id'     =>  Session::get('userid'),
            'seller_user_id'    =>  $item->user_id,
            'price'             =>  $item->price,
            'note'              =>  $request->input('note'),
            'is_rated'          =>  0,
            'number'            =>  $request->input('number')
        ]);

//        $item->decrement('quantity');

//        return redirect()->back();
    }

    public function update(Request $request, $order_id)
    {
        $this->validate($request, [
            'type'  =>  'required|in:payed,complete, cancel',
            'note'  =>  'string'
        ]);

        $order = Order::where(['id' => $order_id, 'buyer_user_id' => $request->user()->id])->first();

        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }
        $item = Item::find($order->item_id);

        if ($order->type == 'pending' && $request->input('type') == 'cancel') {
            $order->update([
                'type'          =>  'cancelled',
                'note'          =>  $request->input('note'),
                'cancelled_at'  =>  Carbon::now()->format('Y-m-d H:i:s')
            ]);
            if (!empty($item)) {
                $item->decrement('quantity');
            }
        } elseif ($order->type == 'confirmed' && $request->input('type') == 'complete') {
            $order->update([
                'type'          =>  'completed',
                'note'          =>  $request->input('note'),
                'completed_at'  =>  Carbon::now()->format('Y-m-d H:i:s')
            ]);
            if (!empty($item)) {
                $item->increment('sold');
            }
        } elseif ($order->type == 'pending' && $request->input('type') == 'payed') {
            $order->update([
                'type'      =>  'payed',
                'payed_at'  =>  Carbon::now()->format('Y-m-d H:i:s')
            ]);
        } else {
            return redirect()->back()->withErrors('Order can not be change now.');
        }

//        return redirect()->back();
    }

    public function tradeSuccess (Request $request, $id)
    {
        $order = Order::find($id);
        $order->update ([
            'type' => 'completed'
        ]);
        $sum = $order->number * $order ->price;
        $seller = User::find($order->seller_user_id);
        return view("user.buy.tradeSuccess",["items"=>$order,"seller"=>$seller,"sum"=>$sum]);
    }
}
