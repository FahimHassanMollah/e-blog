<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('Home.index');
    }
    
    public function show()
    {
        return view('home.single');
    }

    public function about()
    {
        return view('home.about');
    }
}
