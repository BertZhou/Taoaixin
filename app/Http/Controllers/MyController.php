<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Session;
class MyController extends Controller
{
    public function signin_check(Request $request)
    {
        $username=$request->get("username");
        $password=$request->get("password");
        $items=DB::select("select * from items");
        $get= DB::table("users")->where("email",$username)
                                ->orwhere("name",$username)->first();
//        $id = DB::select('select id from users where name = :name',['name' => $username]);
        if(!$get)
        {
            return view("signin",["fail1"=>"用户名不存在"]);
            //return  "error";
        } 
        else
        {
            $check_password=$get->password;
            if($password==$check_password)                
            {

                $id=$get->id;
                Session::put("userid",$id);
                Session::put("name",$username);
                return view('home.index',["items"=>$items]);
                //return "ok";
            }
            else
            {
                return view("signin",["fail2"=>"密码错误"]);
                //return "error";
            }
        }  
    }
    public function  signup_check(Request $request)
    {
    	//$user=new \App\User();
    	$inputs["name"]=$request->get("username");
    	$inputs["email"]=$request->get("email");
    	$inputs["password"]=$request->get("password");
    	$results1=DB::table("users")->where("name",$inputs["name"])->first();
    	$results2=DB::table("users")->where("email",$inputs["email"])->first();
        $items=DB::select("select * from items");
    	if($results1||$results2)
    	{
    		return response()->json(["faile1"=>"username or email is token"]);
    	}
    	else
    	{
    		User::create($inputs);
            $user=DB::table("users")->where("name",$inputs["name"])->first();
            $id=$user->id;
            //dd($id);
            Session::put("userid",$id);
            Session::put("name",$inputs["name"]);
//    		return response()->json(["ok"=>"success"]);
            return view('home.index',["items"=>$items]);
    	}
    }
    public function login_out()
    {
        Session::flush();
        return redirect("/");
    }
     public function buy(Request $request,$id)
    {
        $number=$request->get("amount");
        Session::put("number",$number);
        $path=$_SERVER['HTTP_HOST'];
        //dd(Session::get("number"));
        $gets=DB::table('items')->where('id',$id)->first();
        $sum=$gets->price*$number;
        return view("user.buy.buy",["items"=>$gets,"number"=>$number,"sum"=>$sum,"path"=>$path]);
    }
    public function pay($id)
    {   
        $number=Session::get("number");
        $gets=DB::table('items')->where('id',$id)->first();
        $sum=$number*$gets->price;
        $seller=DB::table("users")->where("id",$gets->user_id)->first();
        return view("user.buy.pay",["items"=>$gets,"seller"=>$seller,"sum"=>$sum]);
    }
    public function paySuccess($id)
    {
        $number=Session::get("number");
        $gets=DB::table('items')->where('id',$id)->first();
        $sum=$number*$gets->price;
        $seller=DB::table("users")->where("id",$gets->user_id)->first();
        $phone=Session::get("mobile");
        $info=DB::table("user_profiles")->where("mobile",$phone)->first();
        return view("user.buy.paySuccess",["items"=>$gets,"seller"=>$seller,"sum"=>$sum,"info"=>$info]);
    }
//    public function trade(Request $request,$id)
//    {
//        $number=Session::get("number");
//        $gets=DB::table('items')->where('id',$id)->first();
//        $sum=$number*$gets->price;
//        $seller=DB::table("users")->where("id",$gets->user_id)->first();
//        return view("user.buy.trade",["item"=>$gets,"seller"=>$seller,"sum"=>$sum]);
//    }
    public function tradeSuccess($id)
    {
        $number=Session::get("number");
        $gets=DB::table('items')->where('id',$id)->first();
        $sum=$number*$gets->price;
        $seller=DB::table("users")->where("id",$gets->user_id)->first();
        return view("user.buy.tradeSuccess",["items"=>$gets,"seller"=>$seller,"sum"=>$sum]);
    }
    public function rate(Request $request,$id)
    {
        $number=$request->get("number");
        Session::put("number",$number);
        $gets=DB::table('items')->where('id',$id)->first();
        $sum=$gets->price*$number;
        return view("user.buy.rate",["item"=>$gets,"number"=>$number,"sum"=>$sum]);
    }

}