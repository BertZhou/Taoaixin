<?php

namespace App\Http\Controllers\User;

use Hash;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return 'to be continue.';
        // return view('admin.home.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|alpha_dash',
            'password'  =>  'required|min:8',
            'email'     =>  'required|email|unique:users,email',
            'mobile'    =>  'zh_mobile',
            'address'   =>  'string'
        ]);

        $user = User::create([
            'email'     =>  $request->input('email'),
            'password'  =>  bcrypt($request->input('password')),
            'name'      =>  $request->input('name'),
        ]);
        $user->attachRole($request->input('user'));
        $user->save();

        UserProfile::create([
            'mobile'    =>  $request->input('mobile'),
            'address'   =>  $request->input('address')
        ]);

        return redirect('my');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name'          =>  'required|alpha_dash',
            'email'         =>  "required|email|unique:users,email,$user_id",
            'new_password'  =>  'alpha_dash|min:8',
            'old_password'  =>  'required_with:new_password|alpha_dash|min:8',
            'mobile'        =>  'zh_mobile',
            'address'       =>  'string'
        ]);

        if ($request->input('new_password') && Hash::check($request->input('old_password'), $request->user()->password)) {
            $request->user()->update('password', bcrypt($request->input('new_password')));
        }

        $request->user()->update([
            'email'     =>  $request->input('email'),
            'name'      =>  $request->input('name'),
        ]);

        $profile = UserProfile::find($request->user()->id);
        $flag = [
            'address'   =>  $request->input('address'),
            'mobile'    =>  $request->input('mobile')
        ];

        if (!empty($profile)) {
            $profile->update($flag);
        } else {
            $flag['user_id'] = $request->user()->id;
            UserProfile::create($flag);
        }
        
        return redirect('my');
    }
}
