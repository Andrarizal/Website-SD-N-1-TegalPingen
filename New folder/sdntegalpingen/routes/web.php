<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', [       
        "title" => "Home"           
   ]);
});

Route::get('/profil', function () {
    return view('Profil', [       
        "title" => "Profil"     
    ]);
});

Route::get('/sarpras', function () {
    return view('sarpras', [       
        "title" => "Sarana & Prasarana"     
    ]);
});

Route::get('/prestasilain', function () {
    return view('prestasilain', [       
        "title" => "Prestasi"     
    ]);
});

Route::get('/berita', function () {
    return view('Berita');
});

Route::get('/galeri', function () {
    return view('Galeri', [       
        "title" => "Galeri"     
    ]);
});

Route::get('/about', function () {
    return view('About', [       
        "title" => "About"     
    ]);
});

Route::get('/kontak', function () {
    return view('Kontak');
});


Route::get('/tatib', function () {
    return view('tatib', [       
        "title" => "Tata Tertib"     
    ]);
});

Route::get('/visi', function () {
    return view('visi', [       
        "title" => "Visi & Misi"     
    ]);
});

Route::get('/guru', function () {
    return view('guru', [       
        "title" => "Tenaga Pendidik"     
    ]);
});