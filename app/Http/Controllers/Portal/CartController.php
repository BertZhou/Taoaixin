<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Overtrue\LaravelShoppingCart\Cart;

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

//        $row = Cart::add(37, 'Item name', 5, 100.00, ['color' => 'red', 'size' => 'M']);

    }
}

