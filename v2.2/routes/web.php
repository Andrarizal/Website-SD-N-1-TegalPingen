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

        // ===== super
        Route::get('/t3g4l/register-super', [RegisterController::class, 'showSuper'])->name('registerSuper.show');
        Route::post('/t3g4l/register-super', [RegisterController::class, 'registerSuper'])->name('registerSuper.perform');

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
        Route::get('/t3g4l/superministrator/home', [HomeController::class, 'superHome'])->name('super.home')->middleware('is_super');

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

        //====== Super
        
        Route::get('/t3g4l/superministrator/profile', [ProfileAdminController::class, 'superProfile'])->name('super.profile-show')->middleware('is_super');
        
        Route::get('/t3g4l/superministrator/update-profile', [ProfileAdminController::class, 'superUpdateProfile'])->name('super.profile-update')->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/update-profile-send/{id}', [ProfileAdminController::class, 'superUpdateProfileSend'])->middleware('is_super');

        /*
            FITUR SARANA
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/sarana/view', [SaranaPrasaranaController::class, 'superViewSarana'])->name('aViewSarana')->middleware('is_super');

        Route::get('/t3g4l/superministrator/sarana/add', [SaranaPrasaranaController::class, 'superAddSarana'])->name('super.add-sarana')->middleware('is_super');

        Route::post('/t3g4l/superministrator/sarana/submit', [SaranaPrasaranaController::class, 'superSubmitSarana'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/sarana/update/{id}', [SaranaPrasaranaController::class, 'superUpdateSarana'])->name('super.update-sarana')->middleware('is_super');

        Route::put('/t3g4l/superministrator/sarana/change/{id}', [SaranaPrasaranaController::class, 'superChangeSarana'])->name('super.change-sarana')->middleware('is_super');

        Route::delete('/t3g4l/superministrator/sarana/delete/{id}', [SaranaPrasaranaController::class, 'superDeleteSarana'])->middleware('is_super');

        //======= ADMIN





        /*
            FITUR BERITA
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/berita/view', [BeritaController::class, 'superViewBerita'])->name('aViewBerita')->middleware('is_super');

        Route::get('/t3g4l/superministrator/berita/add', [BeritaController::class, 'superAddBerita'])->name('super.add-berita')->middleware('is_super');
        Route::post('/t3g4l/superministrator/berita/submit', [BeritaController::class, 'superSubmitBerita'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/berita/update/{id}', [BeritaController::class, 'superUpdateBerita'])->name('super.update-berita')->middleware('is_super');
        Route::put('/t3g4l/superministrator/berita/change/{id}', [BeritaController::class, 'superChangeBerita'])->name('super.change-berita')->middleware('is_super');

        Route::delete('/t3g4l/superministrator/berita/delete/{id}', [BeritaController::class, 'superDeleteBerita'])->middleware('is_super');

        //======= ADMIN







        /*
            FITUR MANAGE ADMIN
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/manage-admin/view', [ManageAdmin::class, 'superViewAdmin'])->name('aViewAdmin')->middleware('is_super');

        Route::get('/t3g4l/superministrator/manage-admin/add', [ManageAdmin::class, 'superAddAdmin'])->name('super.add-admin')->middleware('is_super');
        Route::post('/t3g4l/superministrator/manage-admin/submit', [ManageAdmin::class, 'superSubmitAdmin'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/manage-admin/update/{id}', [ManageAdmin::class, 'superUpdateAdmin'])->name('super.update-admin')->middleware('is_super');
        Route::put('/t3g4l/superministrator/manage-admin/change/{id}', [ManageAdmin::class, 'superChangeAdmin'])->name('super.change-admin')->middleware('is_super');

        Route::get('/t3g4l/superministrator/manage-admin/update-password/{id}', [ManageAdmin::class, 'superUpdatePasswordAdmin'])->name('super.update-password-admin')->middleware('is_super');
        Route::put('/t3g4l/superministrator/manage-admin/change-password/{id}', [ManageAdmin::class, 'superChangePasswordAdmin'])->name('super.change-password-admin')->middleware('is_super');

        // Route::get('/t3g4l/superministrator/manage-admin/update-image/{id}', [ManageAdmin::class, 'superUpdateImageAdmin'])->name('super.update-image-admin')->middleware('is_super');
        // Route::put('/t3g4l/superministrator/manage-admin/change-image/{id}', [ManageAdmin::class, 'superChangeImageAdmin'])->name('super.change-image-admin')->middleware('is_super');

        Route::delete('/t3g4l/superministrator/manage-admin/delete/{id}', [ManageAdmin::class, 'superDeleteAdmin'])->middleware('is_super');







        /*
            FITUR GALERI
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/galeri/view', [GaleriController::class, 'superViewGaleri'])->name('aViewGaleri')->middleware('is_super');

        Route::get('/t3g4l/superministrator/galeri/add', [GaleriController::class, 'superAddGaleri'])->name('super.add-galeri')->middleware('is_super');
        Route::post('/t3g4l/superministrator/galeri/submit', [GaleriController::class, 'superSubmitGaleri'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/galeri/update/{id}', [GaleriController::class, 'superUpdateGaleri'])->name('super.update-galeri')->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/galeri/change/{id}', [GaleriController::class, 'superChangeGaleri'])->name('super.change-galeri')->middleware('is_super');

        Route::delete('/t3g4l/superministrator/galeri/delete/{id}', [GaleriController::class, 'superDeleteGaleri'])->middleware('is_super');





        /*
            FITUR Mata Pelajaran
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/mat-pel/view', [mata_pelajaranController::class, 'superViewMatpel'])->name('aViewMatpel')->middleware('is_super');

        Route::get('/t3g4l/superministrator/mat-pel/add', [mata_pelajaranController::class, 'superAddMatpel'])->name('super.add-matpel')->middleware('is_super');
        Route::post('/t3g4l/superministrator/mat-pel/submit', [mata_pelajaranController::class, 'superSubmitMatpel'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/mat-pel/update/{id}', [mata_pelajaranController::class, 'superUpdateMatpel'])->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/mat-pel/change/{id}', [mata_pelajaranController::class, 'superChangeMatpel'])->middleware('is_super');

        Route::delete('/t3g4l/superministrator/mat-pel/delete/{id}', [mata_pelajaranController::class, 'superDeleteMatpel'])->middleware('is_super');
    });







    /*
            FITUR PRESTASI
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/prestasi/view', [PrestasiController::class, 'superViewPrestasi'])->name('aViewPrestasi')->middleware('is_super');

        Route::get('/t3g4l/superministrator/prestasi/add', [PrestasiController::class, 'superAddPrestasi'])->name('superAddPrestasi')->middleware('is_super');

        Route::post('/t3g4l/superministrator/prestasi/submit', [PrestasiController::class, 'superSubmitPrestasi'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/prestasi/update/{id}', [PrestasiController::class, 'superUpdatePrestasi'])->name('super.update-prestasi')->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/prestasi/change/{id}', [PrestasiController::class, 'superChangePrestasi'])->name('super.change-prestasi')->middleware('is_super');

        Route::delete('/t3g4l/superministrator/prestasi/delete/{id}', [PrestasiController::class, 'superDeletePrestasi'])->middleware('is_super');






    /*
            FITUR TENAGA PENDIDIK
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/tenaga/view', [tenaga_pendidikanController::class, 'superViewTenaga'])->name('aViewTenaga')->middleware('is_super');

        Route::get('/t3g4l/superministrator/tenaga/add', [tenaga_pendidikanController::class, 'superAddTenaga'])->name('superAddTenaga')->middleware('is_super');

        Route::post('/t3g4l/superministrator/tenaga/submit', [tenaga_pendidikanController::class, 'superSubmitTenaga'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/tenaga/update/{id}', [tenaga_pendidikanController::class, 'superUpdateTenaga'])->name('super.update-tenaga')->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/tenaga/change/{id}', [tenaga_pendidikanController::class, 'superChangeTenaga'])->name('super.change-tenaga')->middleware('is_super');

        Route::delete('/t3g4l/superministrator/tenaga/delete/{id}', [tenaga_pendidikanController::class, 'superDeleteTenaga'])->middleware('is_super');







     /*
            FITUR VISI MISI
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/visi-misi/view', [VisiMisiController::class, 'superViewVimi'])->name('aViewVimi')->middleware('is_super');

        Route::get('/t3g4l/superministrator/visi-misi/add', [VisiMisiController::class, 'superAddVimi'])->name('superAddVimi')->middleware('is_super');

        Route::post('/t3g4l/superministrator/visi-misi/submit', [VisiMisiController::class, 'superSubmitVimi'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/visi-misi/update/{id}', [VisiMisiController::class, 'superUpdateVimi'])->name('super.update-vimi')->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/visi-misi/change/{id}', [VisiMisiController::class, 'superChangeVimi'])->name('super.change-vimi')->middleware('is_super');

});