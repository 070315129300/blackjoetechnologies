<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $role = Role::whereNotIn('name',['admin', 'developer'])->get();
        return view('admin.roles.index', compact('role'));
    }
    public function create(){
       return view('admin.roles.create');
    }
    public function store(Request $request){
        $validated = $request->validate(['name'=>['required','min:3']]);
        Role::create($validated);
        return back()->with('success', 'Role Created');
    }
    public function edit(Role $role){
        $permission = Permission::all();
        return view('admin.roles.edit', compact('role', 'permission'));
    }
    public function update(Request $request, Role $role){
        $validated = $request->validate(['name'=>'required']);
        $role->update($validated);
        return to_route('admin.roles.index')->with('success', 'Role Updated');
    }

    public function destroy(Role $role){
        $role->delete();
        return back()->with('success','role deleted');
    }
    public function givePermission(Request $request, Role $role)
    {
       if($role->hasPermissionTo($request->permission)){
           return back()->with('success','permission exists');
       }
       $role->givePermissionTo($request->permission);
        return back()->with('success','permission update');
    }
    public function revokePermission(Role $role, permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('success','permission revoke');
        }
        return back()->with('success','permission not exists');

    }
}
