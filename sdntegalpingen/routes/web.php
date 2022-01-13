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

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('Profil');
});

Route::get('/sarpras', function () {
    return view('sarpras');
});

Route::get('/prestasi', function () {
    return view('Prestasi');
});

Route::get('/berita', function () {
    return view('Berita');
});

Route::get('/galeri', function () {
    return view('Galeri');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/kontak', function () {
    return view('Kontak');
});

Route::get('/visi', function () {
    return view('visi');
});

Route::get('/tatib', function () {
    return view('tatib');
});