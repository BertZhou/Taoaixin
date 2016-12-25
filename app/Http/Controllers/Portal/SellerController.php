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
class SellerController extends Controller
{
    public function index (Request $request)
    {
        $this->validate($request, [
            'offset'    =>  'integer|min:0',
            'limit'     =>  'integer|min:0'
        ]);
        $user = User::find(Session::get('userid'));
//        var_dump($carts);
        return view('user.create.index',['user' => $user]);
    }
    public function store (Request $request)
    {
        $message = $request->input('message');

        $item = Item::create([
            'user_id'           =>  Session::get('userid'),
            'name'              =>  $message['name'],
            'price'             =>  $message['price'],
            'type'              =>  $message['type'],
            'content'           =>  $message['content'],
            'url'               =>  'http://o7jajeu9a.bkt.clouddn.com/undetermined.jpg'
        ]);

        return response()->json(['message' => 'success']);
    }
    public function destroy(Request $request, $id)
    {
        $favorite = Cart::where(['item_id' => $id, 'buy_user_id' => Session::get("userid")])->delete();

//        return redirect()->back();
    }
}

