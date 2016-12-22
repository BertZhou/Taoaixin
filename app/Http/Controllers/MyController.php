<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\User;
use App\Models\Item;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Session;
class MyController extends Controller
{
    public function signin_check(Request $request)
    {
        $username=$request->get("username");
        $password=$request->get("password");
//        $items=DB::select("select * from items");
        $items = Item::skip($request->input('offset', 0))->take($request->input('limit', 16))->get();
        $get= DB::table("users")->where("email",$username)
                                ->orwhere("name",$username)->first();
//        $id = DB::select('select id from users where name = :name',['name' => $username]);
        if(!$get)
        {
//            return view("signin",["fail1"=>"用户名不存在"]);
            return response()->json(["message" => "fail", "data" => "用户名不存在"]);
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
//                return view('home.index',["items"=>$items]);
                return response()->json(['message' => 'success']);
            }
            else
            {
                return response()->json(["message" => "fail", "data"=>"密码错误"]);
//                return view("signin",["fail2"=>"密码错误"]);
            }
        }  
    }
    public function  signup_check(Request $request)
    {
    	//$user=new \App\User();
        $message = $request -> get('message');

    	$inputs["name"] = $message['username'];
    	$inputs["email"]= $message['email'];
    	$inputs["password"]= $message['password'];
//    	$inputs["password"]= $message['passwordagain'];
    	$inputs["is_student"]= $message['identity'];
    	$results1=DB::table("users")->where("name",$inputs["name"])->first();
    	$results2=DB::table("users")->where("email",$inputs["email"])->first();
        if(empty($inputs["email"]) || empty($inputs["name"])){
            return response() -> json(["message" => "fail", "data" => "用户名或邮箱不能为空"]);
        }else if($results1||$results2) {
    		return response() -> json(["message" => "fail", "data" => "用户名或邮箱被占用！"]);
    	}else if(empty($inputs["password"])){
    	    return response() -> json(["message" => "fail", "data" => "密码不能为空"]);
        }else if($message['password'] != $message['passwordagain']){
    	    return response() -> json(["message" => "fail", "data" => "两次密码不相同，请重新输入！"]);
        }else {
    		User::create($inputs);
            $user=DB::table("users")->where("name",$inputs["name"])->first();
            $id=$user->id;
            Session::put("userid",$id);
            Session::put("name",$inputs["name"]);
    		return response()->json(["message" => "success"]);
//            return view('home.index',["items"=>$items]);
    	}
    }
    public function login_out()
    {
        Session::flush();
        return redirect("/");
    }
    public function pay($id)
    {   
        $number=Session::get("number");
        $gets=DB::table('items')->where('id',$id)->first();
        $sum=$number*$gets->price;
        $seller=DB::table("users")->where("id",$gets->user_id)->first();
        return view("user.buy.pay",["items"=>$gets,"seller"=>$seller,"sum"=>$sum]);
    }

    public function tradeSuccess($id)
    {
        $number=Session::get("number");
        $gets=DB::table('items')->where('id',$id)->first();
        $sum=$number*$gets->price;
        $seller=DB::table("users")->where("id",$gets->user_id)->first();
        return view("user.buy.tradeSuccess",["items"=>$gets,"seller"=>$seller,"sum"=>$sum]);
    }
}