<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfoliodetails() {

        return view('portfolio-details');

    }
    public function adminlogin(){
        return view('adminlogin');
    }
}
