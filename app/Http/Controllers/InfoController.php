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
        $message = $request -> get('message');
        $userProfile = UserProfile::create([
              'address'           =>  $message['address'],
              'province'          =>  $message['province'],
              'city'              =>  $message['city'],
              'user_id'           =>  Session::get('userid'),
              'area'              =>  $message['area'],
              'mobile'            =>  $message['mobile'],
              'name'              =>  $message['name']
          ]);
        Session::put("mobile",$message["mobile"]);
        return response()->json(["ok"=>"ok"]);
//        return redirect()->back();
    }
}
