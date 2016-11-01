<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function show(Request $request, $order_id)
    {
        $order = Order::find($order_id);
        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }
        $buyer = User::find($order->buyer_user_id);
        $seller = User::find($order->seller_user_id);
        $item = Item::find($order->item_id);

        return view('admin.order.show', ['order' => $order, 'buyer' => $buyer, 'seller' => $seller, 'item' => $item]);
    }
}