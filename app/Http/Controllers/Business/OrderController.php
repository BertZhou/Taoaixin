<?php

namespace App\Http\Controllers\Business;

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

        return redirect()->back();
    }
}
