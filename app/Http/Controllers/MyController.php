<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\User;
class MyController extends Controller
{
    public function signin_check(Request $request)
    {
    
    }
    public function  signup_check(Request $request)
    {
    	//$user=new \App\User();
    	$inputs["name"]=$request->get("username");
    	$inputs["email"]=$request->get("email");
    	$inputs["password"]=$request->get("password");
    	$results1=DB::table("users")->where("name",$inputs["name"])->first();
    	$results2=DB::table("users")->where("email",$inputs["email"])->first();
    	if($results1||$results2)
    	{
    		return response()->json(["faile1"=>"username or email is token"]);
    	}
    	else
    	{
    		User::create($inputs);
//    		return response()->json(["ok"=>"success"]);
            return view('home.index');
    	}
    }
}