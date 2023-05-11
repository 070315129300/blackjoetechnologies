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
        $blog = Blog::inRandomOrder();

        return view('blog', compact('user', 'blog'));
    }

    public function blogdetails( $id) {
        $user = blog::find($id);
        return view('blog-details', compact('user'));
    }




}
