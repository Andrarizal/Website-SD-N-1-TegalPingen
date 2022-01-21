<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SaranaPrasaranaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ManageAdmin;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\mata_pelajaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\tenaga_pendidikanController;
use App\Http\Controllers\VisiMisiController;


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

Route::get('/rumahAdmin', function () {
        return view('tegal/admin/index-admin');
    });

Route::get('satutegalpingen/t3g4l/ministrator/berita/view', function () {
        return view('tegal/admin/berita/beritaAdmin');
    });

Route::get('/rumahAdmin/berita/add', function () {
        return view('tegal/admin/berita/beritaAdd');
    });

Route::get('/rumahAdmin/berita/update', function () {
        return view('tegal/admin/berita/beritaAdd');
    });

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::get('/home', [HomeController::class, 'index'])->name('home.index');//->middleware('is_admin');


    Route::group(['middleware' => ['guest']], function() {

        /*
            REGISTER ROUTES
        */
        // ===== admin
        Route::get('/t3g4l/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/t3g4l/register', [RegisterController::class, 'register'])->name('register.perform');

        // ===== admin
        Route::get('/t3g4l/register-admin', [RegisterController::class, 'showadmin'])->name('registeradmin.show');
        Route::post('/t3g4l/register-admin', [RegisterController::class, 'registeradmin'])->name('registeradmin.perform');

        /*
            login ROUTES
        */
        Route::get('/t3g4l/login', [LoginController::class, 'login'])->name('login.show');
        Route::post('/t3g4l/login', [LoginController::class, 'actionLogin'])->name('login.perform');

    });


    Route::group(['middleware' => ['auth']], function() {

         /*
            HOME ROUTES
        */
        Route::get('/t3g4l/ministrator/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
        Route::get('/t3g4l/superministrator/home', [HomeController::class, 'adminHome'])->name('super.home')->middleware('is_super');

         /*
            LOGOUT ROUTES
        */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');

         /*
            PROFILE ROUTES
        */
        Route::get('/t3g4l/ministrator/profile', [ProfileAdminController::class, 'adminProfile'])->name('admin.profile-show')->middleware('is_admin');

        Route::get('/t3g4l/ministrator/update-profile', [ProfileAdminController::class, 'adminUpdateProfile'])->name('admin.profile-update')->middleware('is_admin');
        
        Route::put('/t3g4l/ministrator/update-profile-send/{id}', [ProfileAdminController::class, 'adminUpdateProfileSend'])->middleware('is_admin');

        //====== admin
        
        Route::get('/t3g4l/adminministrator/profile', [ProfileAdminController::class, 'adminProfile'])->name('admin.profile-show')->middleware('is_admin');
        
        Route::get('/t3g4l/adminministrator/update-profile', [ProfileAdminController::class, 'adminUpdateProfile'])->name('admin.profile-update')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/update-profile-send/{id}', [ProfileAdminController::class, 'adminUpdateProfileSend'])->middleware('is_admin');

        /*
            FITUR SARANA
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/sarana/view', [SaranaPrasaranaController::class, 'adminViewSarana'])->name('aViewSarana')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/sarana/add', [SaranaPrasaranaController::class, 'adminAddSarana'])->name('admin.add-sarana')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/sarana/submit', [SaranaPrasaranaController::class, 'adminSubmitSarana'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/sarana/update/{id}', [SaranaPrasaranaController::class, 'adminUpdateSarana'])->name('admin.update-sarana')->middleware('is_admin');

        Route::put('/t3g4l/adminministrator/sarana/change/{id}', [SaranaPrasaranaController::class, 'adminChangeSarana'])->name('admin.change-sarana')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/sarana/delete/{id}', [SaranaPrasaranaController::class, 'adminDeleteSarana'])->middleware('is_admin');

        //======= ADMIN





        /*
            FITUR BERITA
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/berita/view', [BeritaController::class, 'adminViewBerita'])->name('aViewBerita')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/berita/add', [BeritaController::class, 'adminAddBerita'])->name('admin.add-berita')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/berita/submit', [BeritaController::class, 'adminSubmitBerita'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/berita/update/{id}', [BeritaController::class, 'adminUpdateBerita'])->name('admin.update-berita')->middleware('is_admin');

        Route::put('/t3g4l/adminministrator/berita/change/{id}', [BeritaController::class, 'adminChangeBerita'])->name('admin.change-berita')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/berita/delete/{id}', [BeritaController::class, 'adminDeleteBerita'])->middleware('is_admin');

        //======= ADMIN







        /*
            FITUR MANAGE ADMIN
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/manage-admin/view', [ManageAdmin::class, 'adminViewAdmin'])->name('aViewAdmin')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/manage-admin/add', [ManageAdmin::class, 'adminAddAdmin'])->name('admin.add-admin')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/manage-admin/submit', [ManageAdmin::class, 'adminSubmitAdmin'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/manage-admin/update/{id}', [ManageAdmin::class, 'adminUpdateAdmin'])->name('admin.update-admin')->middleware('is_admin');

        Route::put('/t3g4l/adminministrator/manage-admin/change/{id}', [ManageAdmin::class, 'adminChangeAdmin'])->name('admin.change-admin')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/manage-admin/update-password/{id}', [ManageAdmin::class, 'adminUpdatePasswordAdmin'])->name('admin.update-password-admin')->middleware('is_admin');

        Route::put('/t3g4l/adminministrator/manage-admin/change-password/{id}', [ManageAdmin::class, 'adminChangePasswordAdmin'])->name('admin.change-password-admin')->middleware('is_admin');

        // Route::get('/t3g4l/adminministrator/manage-admin/update-image/{id}', [ManageAdmin::class, 'adminUpdateImageAdmin'])->name('admin.update-image-admin')->middleware('is_admin');
        // Route::put('/t3g4l/adminministrator/manage-admin/change-image/{id}', [ManageAdmin::class, 'adminChangeImageAdmin'])->name('admin.change-image-admin')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/manage-admin/delete/{id}', [ManageAdmin::class, 'adminDeleteAdmin'])->middleware('is_admin');







        /*
            FITUR GALERI
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/galeri/view', [GaleriController::class, 'adminViewGaleri'])->name('aViewGaleri')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/galeri/add', [GaleriController::class, 'adminAddGaleri'])->name('admin.add-galeri')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/galeri/submit', [GaleriController::class, 'adminSubmitGaleri'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/galeri/update/{id}', [GaleriController::class, 'adminUpdateGaleri'])->name('admin.update-galeri')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/galeri/change/{id}', [GaleriController::class, 'adminChangeGaleri'])->name('admin.change-galeri')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/galeri/delete/{id}', [GaleriController::class, 'adminDeleteGaleri'])->middleware('is_admin');





        /*
            FITUR Mata Pelajaran
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/mat-pel/view', [mata_pelajaranController::class, 'adminViewMatpel'])->name('aViewMatpel')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/mat-pel/add', [mata_pelajaranController::class, 'adminAddMatpel'])->name('admin.add-matpel')->middleware('is_admin');
        
        Route::post('/t3g4l/adminministrator/mat-pel/submit', [mata_pelajaranController::class, 'adminSubmitMatpel'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/mat-pel/update/{id}', [mata_pelajaranController::class, 'adminUpdateMatpel'])->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/mat-pel/change/{id}', [mata_pelajaranController::class, 'adminChangeMatpel'])->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/mat-pel/delete/{id}', [mata_pelajaranController::class, 'adminDeleteMatpel'])->middleware('is_admin');
    });







    /*
            FITUR PRESTASI
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/prestasi/view', [PrestasiController::class, 'adminViewPrestasi'])->name('aViewPrestasi')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/prestasi/add', [PrestasiController::class, 'adminAddPrestasi'])->name('adminAddPrestasi')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/prestasi/submit', [PrestasiController::class, 'adminSubmitPrestasi'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/prestasi/update/{id}', [PrestasiController::class, 'adminUpdatePrestasi'])->name('admin.update-prestasi')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/prestasi/change/{id}', [PrestasiController::class, 'adminChangePrestasi'])->name('admin.change-prestasi')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/prestasi/delete/{id}', [PrestasiController::class, 'adminDeletePrestasi'])->middleware('is_admin');






    /*
            FITUR TENAGA PENDIDIK
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/tenaga/view', [tenaga_pendidikanController::class, 'adminViewTenaga'])->name('aViewTenaga')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/tenaga/add', [tenaga_pendidikanController::class, 'adminAddTenaga'])->name('adminAddTenaga')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/tenaga/submit', [tenaga_pendidikanController::class, 'adminSubmitTenaga'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/tenaga/update/{id}', [tenaga_pendidikanController::class, 'adminUpdateTenaga'])->name('admin.update-tenaga')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/tenaga/change/{id}', [tenaga_pendidikanController::class, 'adminChangeTenaga'])->name('admin.change-tenaga')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/tenaga/delete/{id}', [tenaga_pendidikanController::class, 'adminDeleteTenaga'])->middleware('is_admin');







     /*
            FITUR VISI MISI
        */
        // ===== admin
        Route::get('/t3g4l/adminministrator/visi-misi/view', [VisiMisiController::class, 'adminViewVimi'])->name('aViewVimi')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/visi-misi/add', [VisiMisiController::class, 'adminAddVimi'])->name('adminAddVimi')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/visi-misi/submit', [VisiMisiController::class, 'adminSubmitVimi'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/visi-misi/update/{id}', [VisiMisiController::class, 'adminUpdateVimi'])->name('admin.update-vimi')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/visi-misi/change/{id}', [VisiMisiController::class, 'adminChangeVimi'])->name('admin.change-vimi')->middleware('is_admin');

});