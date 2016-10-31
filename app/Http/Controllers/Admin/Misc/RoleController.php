<?php

namespace App\Http\Controllers\Admin\Misc;

use Bican\Roles\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::all();
        return view('admin.role.index', ['roles' => $roles]);
    }

    public function create()
    {
        return view('admin.role.show');
    }

    public function show($role_id = 0)
    {
        return $this->edit($role_id);
    }

    public function edit($role_id = 0)
    {
        $role = Role::findOrFail($role_id);
        return view('admin.role.show', ['role' => $role]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required|alpha_dash',
            'slug'  =>  'required|alpha|unique:roles,slug',
            'level' =>  'required|integer|min:0',
        ]);

        $role = Role::create([
            'name'          =>  $request->input('name'),
            'slug'          =>  $request->input('slug'),
            'description'   =>  $request->input('description'),
            'level'         =>  $request->input('level'),
        ]);

        return redirect('admin/role');
    }

    public function update(Request $request, $role_id = 0)
    {
        $this->validate($request, [
            'name'  =>  'required|alpha_dash',
            'slug'  =>  'required|alpha|unique:roles,slug,'.$role_id,
            'level' =>  'required|integer|min:0',
        ]);

        $role = Role::findOrFail($role_id);

        $role->update([
            'name'          =>  $request->input('name'),
            'slug'          =>  $request->input('slug'),
            'description'   =>  $request->input('description'),
            'level'         =>  $request->input('level'),
        ]);
        
        return redirect('admin/role');
    }

    public function destroy($role_id = 0)
    {
        $role = Role::findOrFail($role_id);
        \DB::table('role_user')->where('role_id', $role->id)->delete();
        $role->delete();
        
        return response()->json(['code' => 200]);
    }
}
