<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function allblog(){

        return view('blog/allblogs');
    }

    public function index(){
        $user = Blog::orderBy('created_at', 'desc')->paginate(2);
        return view('blog', compact('user'));
    }

    public function blogdetails() {

        return view('blog-details');

    }



}
