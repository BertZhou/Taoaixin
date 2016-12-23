<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
class CartController extends Controller
{
    public function index (Request $request)
    {
//        $items = Cart::all();
//        var_dump($items);

        return view('user.shopping.index');
    }
    public function store (Request $request)
    {
        $this ->validate($request, [
            'item_id'   => 'required|integer|exists:items,id',
            'number'    =>   'integer|min:0',
        ]);

        $item = Item::find($request->input('item_id'));
//        $item = Item::where('id', $request->input('item_id'))->first();
//        var_dump($item);
//        if (empty($item) || $item->quantity <= 0) {
//            return redirect()->back()->withErrors('Item not available.');
//        }
        $Cart = Cart::create([
            'seller_user_id'    =>  $item->user_id,
            'item_id'           =>  $item->id,
            'buyer_user_id'     =>  Session::get('userid'),
            'name'              =>  $item->name,
            'price'             =>  $item->price * $request->input('number'),
            'number'            =>  $request->input('number')
        ]);
        return response()->json(['message' => 'success']);
    }
}

