<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $user = Blog::orderBy('created_at', 'desc')->paginate();
        return view('index', compact('user'));
    }
    public function portfoliodetails() {

        return view('portfolio-details');

    }
    public function adminlogin(){
        return view('adminlogin');
    }



}

