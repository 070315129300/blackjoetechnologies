<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\Blog;
use App\Models\User;
use Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function adduser(){
        return  view('admin.adduser');
    }
    public function alluser(){
        $user = user::all();

        return view('admin.alluser', ['user' => $user]);
    }
    public function insertuser(Request $request){
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $created = $user->save();
        if($created){
            return redirect()->back()->with('success', 'User Added Successfully');
        }else{
            return redirect()->back()->with('fail', 'Ops something happened');
        }

    }
    public function edituser(User $user){
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.edituser', compact('user','roles','permissions'));
    }

    public function updateuser(Request $request, User $user){
        $user = user::find($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with('message', 'User Successfully Updated');
    }

    public function blogtable(){
        $user = Blog::all();
        return view('admin.allblog', compact('user'));
    }
    public function addblog(){
        return view('admin.addblog');
    }
    public function insertblog(Request $request){
        $user  = new Blog;
        $user->topic = $request->topic;
        $user->body = $request->body;
        $image = $request->file;
        if($image) {
            $imagename = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('blogimage', $imagename);
            $user->image = $imagename;
        }
        if(Auth::id())
        {$user->id= Auth::user()->id;
        }
        $user->save();
        return redirect()->back()->with('message', 'Uploaded successfully ');
    }
    public function updateblog(Request $request, $id){
            $user = blog::find($id);
            $user->topic = $request->input('topic');
            $user->body = $request->body;
                $image = $request->file;
                if($image) {
                    $imagename = time().'.'.$image->getClientoriginalExtension();
                    $request->file->move('blogimage', $imagename);
                    $user->image = $imagename;
                }
            $user->save();
            return redirect()->back()->with('success', 'blog updated successfully');
    }
    public function inserteditblog(Request $request, $id){
        $user  = Blog::find($id);
        $user->topic = $request->topic;
        $user->body = $request->body;

        $image = $request->file;
        if($image) {
            $imagename = time().'.'.$image->getClientoriginalExtension();

            $request->file->move('blogimage', $imagename);
            $user->image = $imagename;
        }

        if(Auth::id())
        {$user->id= Auth::user()->id;
        }
        $user->save();
        return redirect()->back()->with('message', 'Uploaded successfully ');
    }

    public function editblog(){
        $user = Blog::all();
        return view('admin.editblog', compact('user'));
    }

    public function allcontact(){
        $user = Message::all();
        return view('admin.allcontact', compact('user'));
    }
    public function insertcontact(Request $request){
        $user = new Message;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->subject = $request->subject;
        $user->message = $request->message;
        $user->save();
        return redirect()->back()->with('message', 'has been sent ');
    }
    public  function approveadmin($id){
        $data = User::find($id);
        $data->usertype = 1;
        $data->save();
        return redirect()->back();
    }

    public function canceladmin($id){
        $data = User::find($id);
        $data->usertype = 2;
        $data->save();
        return redirect()->back();
    }
    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deleteblog($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function assignRole(Request $request, User $user){
        if($user->hasRole($request->role)){
            return back()->with('success','role exists');
        }
        $user->assignRole($request->role);
        return back()->with('success','Role Assigned');
    }
    public function removeRole(User $user, Role $role){
        if($user->hasRole($role)){
            $user->removeRole($role);
            return back()->with('success','role remove');
        }
        return back()->with('success','role not exists');

    }
    public function givePermission(Request $request, User $user){
        if($user->hasPermissionTo($request->Permission)){
            return back()->with('success','role exists');
        }
        $user->assignRole($request->permission);
        return back()->with('success','Permission added');
    }
    public function removePermission(User $user, Permission $permission){
        if($user->hasRole($permission)){
            $user->removeRole($permission);
            return back()->with('success','role remove');
        }
        return back()->with('success','role not exists');

    }
}
