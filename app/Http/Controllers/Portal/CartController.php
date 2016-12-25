<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    public function index (Request $request)
    {
        $this->validate($request, [
            'offset'    =>  'integer|min:0',
            'limit'     =>  'integer|min:0'
        ]);
//        $carts = DB::table('carts')->get();
        $carts = DB::table('carts')->leftJoin('items', 'carts.item_id', 'items.id')->get();
//        var_dump($carts);
        return view('user.shopping.index',['carts' => $carts]);
    }
    public function store (Request $request)
    {

        $item = Item::find($request->input('item_id'));
        $cart = Cart::where('item_id', $request -> input('item_id'))->get();
//        var_dump($cart);
//        exit(0);
        if (empty($item) || $item->quantity <= 0) {
            return redirect()->back()->withErrors('Item not available.');
        }
//        var_dump(empty($cart));
//        var_dump($cart);
//        if(empty($cart)){
            $Cart = Cart::create([
                'seller_user_id'    =>  $item->user_id,
                'item_id'           =>  $item->id,
                'buy_user_id'       =>  Session::get('userid'),
                'name'              =>  $item->name,
                'sum'               =>  $item->price * $request->input('number'),
                'number'            =>  $request->input('number'),
            ]);
//        }else {
////             $cart -> update([
////                 'sum'               =>  $item->price * $request->input('number'),
////                 'number'            =>  $request->input('number'),
////            ]);
//            $cart = DB::update("update carts set sum = ?,number = ? where item_id = ? ",[$item->price * $request->input('number'), $request->input('number'),$item->id  ]);
//        }
        return response()->json(['message' => 'success']);
    }
    public function destroy(Request $request, $id)
    {
        $favorite = Cart::where(['item_id' => $id, 'buy_user_id' => Session::get("userid")])->delete();

//        return redirect()->back();
    }
}

