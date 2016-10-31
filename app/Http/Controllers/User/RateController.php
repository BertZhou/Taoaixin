<?php

namespace App\Http\Controllers\User;

use App\Models\Item;
use App\Models\ItemRate;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RateController extends Controller
{
    public function store(Request $request, $order_id)
    {
        $this->validate($request, [
            'stars'     =>  'required|integer|min:1|max:5',
            'content'   =>  'string'
        ]);

        $order = Order::where(['id' => $order_id, 'type' => 'completed', 'buyer_user_id' => $request->user()->id])->first();

        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        } elseif ($order->is_rated) {
            return redirect()->back()->withErrors('Order has been already rated.');
        }

        $item = Item::find($order->item_id);

        $rate = ItemRate::create([
            'order_id'          =>  $order->id,
            'item_id'           =>  $item->id,
            'buyer_user_id'     =>  $order->buyer_user_id,
            'seller_user_id'    =>  $order->seller_user_id,
            'stars'             =>  $request->input('stars'),
            'content'           =>  $request->input('content'),
            'remark'            =>  0
        ]);

        $order->update([
            'is_rated'  =>  1
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $order_id, $rate_id)
    {
        $this->validate($request, [
            'stars'     =>  'required|integer|min:1|max:5',
            'content'   =>  'string'
        ]);

        $order = Order::where(['id' => $order_id, 'type' => 'completed', 'buyer_user_id' => $request->user()->id])->first();

        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        } elseif (!$order->is_rated) {
            return redirect()->back()->withErrors('Order has no rate.');
        }

        $rate = ItemRate::where(['id' => $rate_id, 'order_id' => $order->id])->first();

        if (empty($rate)) {
            return redirect()->back()->withErrors('Rate not available.');
        } elseif ($rate->remark) {
            return redirect()->back()->withErrors('Rate can only be modify once.');
        }

        $rate->update([
            'stars'     =>  $request->input('stars'),
            'content'   =>  $request->input('content'),
            'remark'    =>  1
        ]);

        return redirect()->back();
    }
}