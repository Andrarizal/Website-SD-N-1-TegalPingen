<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }

    public function adminHome() 
    {
        return view('home.admin.index_admin');
    }

   

    public function superHome() 
    {
        return view('home.super.index_super');
    }

    
}
