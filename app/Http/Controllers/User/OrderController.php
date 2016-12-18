<?php

namespace App\Http\Controllers\User;

use Carbon;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::where('buyer_user_id', Session::get('id'))->paginate(10);

        return view('user.my.order', ['orders' => $orders]);
    }

    public function show(Request $request, $order_id)
    {
        $order = Order::find($order_id);
        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }

        return view('user.order.show', ['order' => $order]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'item_id'   =>  'required|integer|min:0',
            'note'      =>  'string'
        ]);

        $item = Item::find($request->input('item_id'));

        if (empty($item) || $item->quantity <= 0) {
            return redirect()->back()->withErrors('Item not available.');
        }

        $order = Order::create([
            'type'              =>  'pending',
            'item_id'           =>  $item->id,
            'name'              =>  $item->name,
            'buyer_user_id'     =>  $request->user()->id,
            'seller_user_id'    =>  $item->user_id,
            'price'             =>  $item->price,
            'note'              =>  $request->input('note'),
            'is_rated'          =>  0
        ]);

        $item->decrement('quantity');

        return redirect()->back();
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

        return redirect()->back();
    }
}
