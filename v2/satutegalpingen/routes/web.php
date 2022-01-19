<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\RegisterController;


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
    return redirect('/home');
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::get('/home', [HomeController::class, 'index'])->name('home.index');//->middleware('is_admin');


    Route::group(['middleware' => ['guest']], function() {

        Route::get('/t3g4l/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/t3g4l/register', [RegisterController::class, 'register'])->name('register.perform');

        Route::get('/t3g4l/register-super', [RegisterController::class, 'showSuper'])->name('registerSuper.show');
        Route::post('/t3g4l/register-super', [RegisterController::class, 'registerSuper'])->name('registerSuper.perform');

        Route::get('/t3g4l/login', [LoginController::class, 'login'])->name('login.show');
        Route::post('/t3g4l/login', [LoginController::class, 'actionLogin'])->name('login.perform');

    });


    Route::group(['middleware' => ['auth']], function() {

        Route::get('/t3g4l/ministrator/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
        Route::get('/t3g4l/superministrator/home', [HomeController::class, 'superHome'])->name('super.home')->middleware('is_super');

        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');

        Route::get('/t3g4l/ministrator/profile', [ProfileAdminController::class, 'adminProfile'])->name('admin.profile-show')->middleware('is_admin');
        Route::get('/t3g4l/ministrator/update-profile', [ProfileAdminController::class, 'adminUpdateProfile'])->name('admin.profile-update')->middleware('is_admin');
        Route::put('/t3g4l/ministrator/update-profile-send/{id}', [ProfileAdminController::class, 'adminUpdateProfileSend'])->middleware('is_admin');

        Route::get('/t3g4l/superministrator/profile', [ProfileAdminController::class, 'superProfile'])->name('admin.profile-show')->middleware('is_admin');
        Route::get('/t3g4l/superministrator/update-profile', [ProfileAdminController::class, 'superUpdateProfile'])->name('admin.profile-update')->middleware('is_admin');
        Route::put('/t3g4l/superministrator/update-profile-send/{id}', [ProfileAdminController::class, 'superUpdateProfileSend'])->middleware('is_admin');

    });

});