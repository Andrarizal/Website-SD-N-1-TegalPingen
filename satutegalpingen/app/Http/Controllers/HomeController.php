<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() 
    {            
        /*
        if (Auth::check()) {

            if (Auth::user()->is_admin === "no"){
                           
                return  route('super.home');//->with('success', "Anda Login Sebagai SUPER ADMIN");
                
            } else if (Auth::user()->is_admin === "yes"){
                
                //return redirect('/t3g4l/ministrator/home');
                //return $next($request);
                return redirect() -> route('admin.home');
            
            } else {

                //return redirect() -> back();
                abort(403);
            }

        } else {
            //abort(403);
            //return view('auth.login');
            return view('home.index');

        }
        */


        if (Auth::check()) {

             return redirect() -> route('admin.home');

        } else {

            return view('home.index');
        
        }
    }

    public function adminHome() 
    {
        /*
        if (Auth::check()) {

            if (Auth::user()->is_admin === "no"){
                           
                return  route('super.home');//->with('success', "Anda Login Sebagai SUPER ADMIN");
                
            } else if (Auth::user()->is_admin === "yes"){
                                
                return redirect() -> route('admin.home');
            
            } else {

                abort(403);

            }

        } else {

            return view('home.index');

        }
        */



        return view('tegal.admin.index_admin');
    }

    public function superHome() 
    {
        /*
        if (Auth::check()) {

            if (Auth::user()->is_admin === "no"){
                           
                return  route('super.home');//->with('success', "Anda Login Sebagai SUPER ADMIN");
                
            } else if (Auth::user()->is_admin === "yes"){
                                
                return redirect() -> route('admin.home');
            
            } else {

                abort(403);

            }

        } else {

            return view('home.index');

        }
        */


        return view('tegal.super.index_super');
    
    }

    
}
