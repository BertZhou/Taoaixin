<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Bican\Roles\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'id'            =>  'string',
            'email'         =>  'email',
            'name'          =>  'string',
            'status'        =>  'in:deleted',
            'time_range'    =>  'string'
        ]);

        $search = array_filter($request->only('id', 'email', 'name', 'status', 'time_range'), function($var){return !empty($var);} );

        $users = User::select('id', 'name', 'email');
        if($request->has('time_range')) {
            $time_range = explode(' - ', $request->input('time_range'));
            if(count($time_range) == 2) {
                $users = $users->whereBetween('created_at', [Carbon::parse($time_range[0]), Carbon::parse($time_range[1])]);
            }
        }

        if (isset($search['id'])) {
            $users = $users->where('id', $search['id']);
        }
        if (isset($search['email'])) {
            $users = $users->where('email', $search['email']);
        }
        if (isset($search['name'])) {
            $users = $users->where('name', 'LIKE', '%'.$search['name'].'%');
        }
        if (isset($search['status']) && $search['status'] == 'deleted') {
            $users = $users->onlyTrashed();
        }

        $users = $users->paginate(30);

        $request->flash();
        return view('admin.user.index', ['users' => $users, 'search' => $search]);
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.user.show', ['roles' => $roles]);
    }

    public function edit($user_id = 0)
    {
        $user = User::findOrFail($user_id);
        $roles = Role::all();

        return view('admin.user.show', ['user' => $user, 'roles' => $roles]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|alpha_dash',
            'password'  =>  'required|min:8',
            'email'     =>  'required|email|unique:users,email'
        ]);

        $user = User::create([
            'email'     =>  $request->input('email'),
            'password'  =>  bcrypt($request->input('password')),
            'name'      =>  $request->input('name'),
        ]);
        $user->attachRole($request->input('slug'));
        $user->save();

        return redirect('admin/user');
    }

    public function update(Request $request, $user_id = 0)
    {
        $this->validate($request, [
            'name'      =>  'required|alpha_dash',
            'email'     =>  "required|email|unique:users,email,$user_id",
            'slug'      =>  'required|exists:roles,id',
        ]);

        $user = User::findOrFail($user_id);
        if ($request->input('password')) {
            $user->update('password', bcrypt($request->input('password')));
        }

        $user->detachAllRoles();
        $user->attachRole($request->input('slug'));
        $user->update([
            'email'     =>  $request->input('email'),
            'name'      =>  $request->input('name'),
            'mobile'    =>  $request->input('mobile'),
            'signature' =>  $request->input('signature'),
            'privacy'   =>  $request->input('privacy'),
            'zones'     =>  $request->input('zones'),
            'tfa_token' =>  $request->input('tfa_token')
        ]);
        
        return redirect('admin/user');
    }

    public function destroy(Request $request, $user_id = 0)
    {
        $user = User::findOrFail($user_id);
        $user->detachAllRoles();
        $user->delete();

        return response()->json(['code' => 200]);
    }
}
