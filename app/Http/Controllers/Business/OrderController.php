<?php

namespace App\Http\Controllers\Business;

use App\Models\User;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('seller_user_id', $request->user()->id)->get();

        return view('business.order.index', ['orders' => $orders]);
    }

    public function show(Request $request, $order_id)
    {
        $order = Order::where(['id' => $order_id, 'seller_user_id' => $request->user()->id])->first();
        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }

        $buyer = User::find($order->buyer_user_id);
        $item = Item::find($order->item_id);

        return view('business.order.show', ['order' => $order, 'buyer' => $buyer, 'item' => $item]);
    }

    public function update(Request $request, $order_id)
    {
        $this->validate($request, [
            'type'  =>  'required|in:confirm, cancel',
        ]);

        $order = Order::where(['id' => $order_id, 'seller_user_id' => $request->user()->id])->first();

        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }

        if ($order->type == 'payed' && $request->input('type') == 'confirm') {
            $order->update([
                'type'  =>  'confirmed'
            ]);
        } elseif (in_array($order->type, ['pending', 'payed']) && $request->input('type') == 'cancel') {
            $order->update([
                'type'  =>  'cancelled'
            ]);
        } else {
            return redirect()->back()->withErrors('Order can not be change now.');
        }

        return redirect('business/order')->back();
    }
}
