<?php

namespace App\Http\Controllers\User;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return 'to be continue.';
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
            'note'              =>  $request->input('note')
        ]);

        $item->decrement('quantity');

        return redirect()->back();
    }

    public function update(Request $request, $order_id)
    {
        $this->validate($request, [
            'type'  =>  'required|in:complete, cancel',
            'note'  =>  'string'
        ]);

        $order = Order::where(['id' => $order_id, 'buyer_user_id' => $request->user()->id])->first();

        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }
        $item = Item::find($order->item_id);

        if ($order->type == 'pending' && $request->input('type') == 'cancel') {
            $order->update([
                'type'  =>  'cancelled',
                'note'  =>  $request->input('note')
            ]);
            if (!empty($item)) {
                $item->decrement('quantity');
            }
        } elseif ($order->type == 'confirmed' && $request->input('type') == 'complete') {
            $order->update([
                'type'  =>  'completed',
                'note'  =>  $request->input('note')
            ]);
            if (!empty($item)) {
                $item->increment('sold');
            }
        } else {
            return redirect()->back()->withErrors('Order can not be change now.');
        }

        return redirect()->back();
    }
}
