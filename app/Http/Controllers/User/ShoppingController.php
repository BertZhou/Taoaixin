<?php

namespace App\Http\Controllers\User;

use Hash;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoppingController extends Controller
{
    public function index(Request $request)
    {
        return view('user.shopping.index');
//        return view('user.buy.buy');
    }
}
