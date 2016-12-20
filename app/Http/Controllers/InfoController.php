<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Session;
class InfoController extends Controller
{
      public function info_check(Request $request)
    {
        //$inputs["address"]=$request->get("province")+$request->get("city")
        //+$request->get("area")+$request->get("address");
        //dd( $_SERVER['HTTP_HOST']);
        $inputs["address"]=$request->input("address");
        $inputs["province"]=$request->get("province");
        $inputs["city"]=$request->get("city");
        $inputs["area"]=$request->get("area");
        //dd($inputs["address"]);
        //$inputs["user_id"]=Session::get("userid");
        $inputs["mobile"]=$request->get("mobile");
        $inputs["name"]=$request->get("name");
        UserProfile::create($inputs);
        Session::put("mobile",$inputs["mobile"]);
       // Session::put("info_name",$inputs["name"]);
        //return response()->json(["ok"=>"ok"]);
        return redirect()->back();

    }
}
