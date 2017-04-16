<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmbassadorController extends Controller
{
    public function index()
    {
    	return view('user.my.ambassador');
    }
}
