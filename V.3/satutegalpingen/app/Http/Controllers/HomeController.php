<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\visi_misi;
use App\Models\galeri;
use App\Models\berita;
use App\Models\mata_pelajaran;
use App\Models\prestasi;
use App\Models\sarana_prasarana;
use App\Models\tenaga_pendidik;
use App\Models\guru_mapel;


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

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

            $data['title'] = "Home";
             $select = new berita;
            $brit['berita'] = $select::all(); 
            return view('home.home', $data, $brit);
        
        }
    }


    public function profilHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

            $data['title'] = "Profil";
            return view('home.profil', $data);
        
        }

    }


    public function sarprasHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

             $data['title'] = "Sarana & Prasarana";
            $select = new sarana_prasarana;
            $data2['sarana'] = $select::all();
            return view('home.sarpras', $data,$data2);
        
        }

    }


    public function prestasiHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

            $data['title'] = "Prestasi";
            $select = new prestasi;
            $pres['prestasisw'] = $select::all();
            return view('home.prestasilain',$pres, $data);
        
        }

    }

    public function beritaHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

           
            return view('home.berita');
        
        }

    }

    public function galeriHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

           $data['title'] = "Galeri";
            return view('home.galeri', $data);
        
        }

    }


    public function tatibHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

           $data['title'] = "Tata Terib";
            return view('home.tatib', $data);
        
        }

    }


    public function vimiHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

            $data['title'] = "Visi & Misi";

            $select = new visi_misi;
            $data2['vimi'] = $select::all();
            return view('home.visi', $data, $data2);
        
        }

    }

    public function guruHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

           $data['title'] = "Tenaga Pendidik";
           $select = new tenaga_pendidik;
           $sql['guru'] = $select::all();
           return view('home.guru', $data, $sql);
        
        }

    }


    public function pengumumanHome() {

        if (Auth::check()) {

            if (Auth::user()->is_admin == "yes") {

                return redirect() -> route('admin.home');

            }

            if (Auth::user()->is_super == "yes") {

                return redirect() -> route('super.home');

            }

            //return redirect() -> route('admin.home');

        } else {

           $data['title'] = "Pengumuman Penting";
           $select = new berita;
           $pntg['pegpenting'] = $select::all(); 
            return view('home.pengumuman',$pntg, $data);
        
        }

    }




    /*
        END USER ROUTES
    */

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
