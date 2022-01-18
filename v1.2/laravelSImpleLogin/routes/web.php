<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\SaranaPrasaranaController;

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
    Route::get('/', [HomeController::class, 'index'])->name('home.index');//->middleware('is_user');

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
        /*
            ===========================
            ==== HOME
            ==========================
        */
        // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
        // Route::get('/super/home', [HomeController::class, 'superHome'])->name('super.home')->middleware('is_super');

            Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
        Route::get('/super/home', [HomeController::class, 'superHome'])->name('super.home')->middleware('is_super');



         /*
            ==========================
            ==== PROFILE
            =========================
        */

        Route::get('/admin/profile', [ProfileAdminController::class, 'adminProfile'])->name('admin.profile')->middleware('is_admin');
        Route::get('/admin/update-profile', [ProfileAdminController::class, 'adminUpdateProfile'])->name('admin.updateProfile')->middleware('is_admin');
        Route::put('/admin/update-profile/{id}', [ProfileAdminController::class, 'adminUpdateProfileSend'])->name('admin.updateProfileSend')->middleware('is_admin');

        Route::get('/super/profile', [ProfileAdminController::class, 'superProfile'])->name('super.profile')->middleware('is_super');
        Route::get('/super/update-profile', [ProfileAdminController::class, 'superUpdateProfile'])->name('super.updateProfile')->middleware('is_super');
        Route::put('/super/update-profile/{id}', [ProfileAdminController::class, 'superUpdateProfileSend'])->name('super.updateProfileSend')->middleware('is_super');



         /*
            ======================
            ==== SARANA
            ======================
        */

        Route::get('/admin/sarana-prasarana', [SaranaPrasaranaController::class, 'adminViewSarana'])->name('aViewSarana')->middleware('is_admin');
            // Route::get('/admin/sarana-prasarana', function() {
            //     return view('home.admin.sarana.viewSarana');
            // });

        Route::get('/admin/sarana-prasarana/add', [SaranaPrasaranaController::class, 'adminAddSarana'])->name('admin.add-sarana')->middleware('is_admin');
        Route::post('/admin/sarana-prasarana/submit', [SaranaPrasaranaController::class, 'adminSubmitSarana'])->middleware('is_admin');

        Route::get('/admin/sarana-prasarana/{id}/update', [SaranaPrasaranaController::class, 'adminUpdateSarana'])->name('admin.update-sarana')->middleware('is_admin');

        Route::delete('/admin/sarana-prasarana/{id}/delete', [SaranaPrasaranaController::class, 'adminDeleteSarana'])->middleware('is_admin');
       



        /*
        =======================
          Logout Routes
        =========================
         */
        //Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});
