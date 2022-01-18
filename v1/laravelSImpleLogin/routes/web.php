<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    //Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/', [HomeController::class, 'index'])->name('home.index')->middleware('is_user');
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    Route::get('/super/home', [HomeController::class, 'superHome'])->name('super.home')->middleware('is_super');


    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        //Route::get('/register', 'RegisterController@show')->name('register.show');
        //Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        //Route::get('/login', 'LoginController@show')->name('login.show');
        //Route::post('/login', 'LoginController@login')->name('login.perform');
        Route::get('/login', [LoginController::class, 'login'])->name('login.show');
        Route::post('/login', [LoginController::class, 'actionLogin'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        //Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});
