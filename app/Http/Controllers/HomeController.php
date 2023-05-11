<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Message;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = User::paginate(10);
        $blog = Blog::orderBy('created_at', 'desc')->take(1)->get();
        $message = Message::paginate(5);
        return view('home', compact('user', 'blog', 'message'));
    }

    public function adminindex(){
        $user = User::paginate(10);
        $blog = Blog::orderBy('created_at', 'desc')->take(1)->get();
        $message = Message::paginate(5);
        return view('admin.index', compact('user', 'blog', 'message'));
    }

    public function adminlogin() {

        return view('adminlogin/blade');
    }
}
