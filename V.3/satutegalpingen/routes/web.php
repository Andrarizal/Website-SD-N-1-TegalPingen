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


    /*
    USER ROUTES
    */

    // Route::get('/home', function () {
    //         return view('home', [       
    //             "title" => "Home"     
    //         ]);
    //     });

    Route::get('/home/profil-sekolah', [HomeController::class, 'profilHome'])->name('profil.index');

    Route::get('/home/sarana-prasarana', [HomeController::class, 'sarprasHome'])->name('sarpras.index');

    Route::get('/home/prestasi-lain', [HomeController::class, 'prestasiHome'])->name('prestasi.index');

    Route::get('/home/berita', [HomeController::class, 'beritaHome'])->name('berita.index');

    Route::get('/home/galeri', [HomeController::class, 'galeriHome'])->name('galeri.index');

    Route::get('/home/tata-tertib', [HomeController::class, 'tatibHome'])->name('tatib.index');

    Route::get('/home/kontak', [HomeController::class, 'kontakHome'])->name('kontak.index');

    Route::get('/home/visi-misi', [HomeController::class, 'vimiHome'])->name('vimi.index');

    Route::get('/home/guru', [HomeController::class, 'guruHome'])->name('guru.index');

    Route::get('/home/pengumuman-penting', [HomeController::class, 'pengumumanHome'])->name('pengumuman.index');

    /*
        END USER ROUTES
    */


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
          END  REGISTER ROUTES
        */




        /*
            login ROUTES
        */
        Route::get('/t3g4l/login', [LoginController::class, 'login'])->name('login.show');
        Route::post('/t3g4l/login', [LoginController::class, 'actionLogin'])->name('login.perform');
        /*
          END  login ROUTES
        */

    });


    Route::group(['middleware' => ['auth']], function() {

        /*
            HOME ROUTES
        */
        //Route::get('/t3g4l/ministrator/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
        Route::get('/t3g4l/adminministrator/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
        Route::get('/t3g4l/superministrator/home', [HomeController::class, 'superHome'])->name('super.home')->middleware('is_super');

         /*
           END HOME ROUTES
        */



        /*
            LOGOUT ROUTES
        */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');

         /*
           END LOGOUT ROUTES
        */



        /*
            PROFILE ROUTES
        */
        // Route::get('/t3g4l/ministrator/profile', [ProfileAdminController::class, 'adminProfile'])->name('admin.profile-show')->middleware('is_admin');

        // Route::get('/t3g4l/ministrator/update-profile', [ProfileAdminController::class, 'adminUpdateProfile'])->name('admin.profile-update')->middleware('is_admin');
        
        // Route::put('/t3g4l/ministrator/update-profile-send/{id}', [ProfileAdminController::class, 'adminUpdateProfileSend'])->middleware('is_admin');

        //======= Admin
        Route::get('/t3g4l/adminministrator/profile', [ProfileAdminController::class, 'adminProfile'])->name('admin.profile-show')->middleware('is_admin');
        
        Route::get('/t3g4l/adminministrator/update-profile', [ProfileAdminController::class, 'adminUpdateProfile'])->name('admin.profile-update')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/update-profile-send/{id}', [ProfileAdminController::class, 'adminUpdateProfileSend'])->middleware('is_admin');

        //====== Super
        
        Route::get('/t3g4l/superministrator/profile', [ProfileAdminController::class, 'superProfile'])->name('super.profile-show')->middleware('is_super');
        
        Route::get('/t3g4l/superministrator/update-profile', [ProfileAdminController::class, 'superUpdateProfile'])->name('super.profile-update')->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/update-profile-send/{id}', [ProfileAdminController::class, 'superUpdateProfileSend'])->middleware('is_super');

        /*
          END  PROFILE ROUTES
        */




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

         Route::get('/t3g4l/adminministrator/sarana/view', [SaranaPrasaranaController::class, 'adminViewSarana'])->name('adViewSarana')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/sarana/add', [SaranaPrasaranaController::class, 'adminAddSarana'])->name('admin.add-sarana')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/sarana/submit', [SaranaPrasaranaController::class, 'adminSubmitSarana'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/sarana/update/{id}', [SaranaPrasaranaController::class, 'adminUpdateSarana'])->name('admin.update-sarana')->middleware('is_admin');

        Route::put('/t3g4l/adminministrator/sarana/change/{id}', [SaranaPrasaranaController::class, 'adminChangeSarana'])->name('admin.change-sarana')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/sarana/delete/{id}', [SaranaPrasaranaController::class, 'adminDeleteSarana'])->middleware('is_admin');


        /*
           END FITUR SARANA
        */



        


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

        Route::get('/t3g4l/adminministrator/berita/view', [BeritaController::class, 'adminViewBerita'])->name('adViewBerita')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/berita/add', [BeritaController::class, 'adminAddBerita'])->name('admin.add-berita')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/berita/submit', [BeritaController::class, 'adminSubmitBerita'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/berita/update/{id}', [BeritaController::class, 'adminUpdateBerita'])->name('admin.update-berita')->middleware('is_admin');

        Route::put('/t3g4l/adminministrator/berita/change/{id}', [BeritaController::class, 'adminChangeBerita'])->name('admin.change-berita')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/berita/delete/{id}', [BeritaController::class, 'adminDeleteBerita'])->middleware('is_admin');


         /*
           END FITUR BERITA
        */



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
           END FITUR MANAGE ADMIN
        */





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

        //====== ADmin
         Route::get('/t3g4l/adminministrator/galeri/view', [GaleriController::class, 'adminViewGaleri'])->name('adViewGaleri')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/galeri/add', [GaleriController::class, 'adminAddGaleri'])->name('admin.add-galeri')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/galeri/submit', [GaleriController::class, 'adminSubmitGaleri'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/galeri/update/{id}', [GaleriController::class, 'adminUpdateGaleri'])->name('admin.update-galeri')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/galeri/change/{id}', [GaleriController::class, 'adminChangeGaleri'])->name('admin.change-galeri')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/galeri/delete/{id}', [GaleriController::class, 'adminDeleteGaleri'])->middleware('is_admin');

         /*
           END FITUR GALERI
        */



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
        

        //===== Admin
         Route::get('/t3g4l/adminministrator/mat-pel/view', [mata_pelajaranController::class, 'adminViewMatpel'])->name('adViewMatpel')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/mat-pel/add', [mata_pelajaranController::class, 'adminAddMatpel'])->name('admin.add-matpel')->middleware('is_admin');
        
        Route::post('/t3g4l/adminministrator/mat-pel/submit', [mata_pelajaranController::class, 'adminSubmitMatpel'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/mat-pel/update/{id}', [mata_pelajaranController::class, 'adminUpdateMatpel'])->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/mat-pel/change/{id}', [mata_pelajaranController::class, 'adminChangeMatpel'])->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/mat-pel/delete/{id}', [mata_pelajaranController::class, 'adminDeleteMatpel'])->middleware('is_admin');
         /*
           END FITUR Mata Pelajaran
        */





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


        //===== Admin
          Route::get('/t3g4l/adminministrator/prestasi/view', [PrestasiController::class, 'adminViewPrestasi'])->name('adViewPrestasi')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/prestasi/add', [PrestasiController::class, 'adminAddPrestasi'])->name('adminAddPrestasi')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/prestasi/submit', [PrestasiController::class, 'adminSubmitPrestasi'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/prestasi/update/{id}', [PrestasiController::class, 'adminUpdatePrestasi'])->name('admin.update-prestasi')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/prestasi/change/{id}', [PrestasiController::class, 'adminChangePrestasi'])->name('admin.change-prestasi')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/prestasi/delete/{id}', [PrestasiController::class, 'adminDeletePrestasi'])->middleware('is_admin');
        /*
           END FITUR PRESTASI
        */




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


        //======= Admin
         Route::get('/t3g4l/adminministrator/tenaga/view', [tenaga_pendidikanController::class, 'adminViewTenaga'])->name('adViewTenaga')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/tenaga/add', [tenaga_pendidikanController::class, 'adminAddTenaga'])->name('adminAddTenaga')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/tenaga/submit', [tenaga_pendidikanController::class, 'adminSubmitTenaga'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/tenaga/update/{id}', [tenaga_pendidikanController::class, 'adminUpdateTenaga'])->name('admin.update-tenaga')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/tenaga/change/{id}', [tenaga_pendidikanController::class, 'adminChangeTenaga'])->name('admin.change-tenaga')->middleware('is_admin');

        Route::delete('/t3g4l/adminministrator/tenaga/delete/{id}', [tenaga_pendidikanController::class, 'adminDeleteTenaga'])->middleware('is_admin');
         /*
           END FITUR TENAGA PENDIDIK
        */






        /*
            FITUR VISI MISI
        */
        // ===== SUPER
        Route::get('/t3g4l/superministrator/visi-misi/view', [VisiMisiController::class, 'superViewVimi'])->name('aViewVimi')->middleware('is_super');

        Route::get('/t3g4l/superministrator/visi-misi/add', [VisiMisiController::class, 'superAddVimi'])->name('superAddVimi')->middleware('is_super');

        Route::post('/t3g4l/superministrator/visi-misi/submit', [VisiMisiController::class, 'superSubmitVimi'])->middleware('is_super');

        Route::get('/t3g4l/superministrator/visi-misi/update/{id}', [VisiMisiController::class, 'superUpdateVimi'])->name('super.update-vimi')->middleware('is_super');
        
        Route::put('/t3g4l/superministrator/visi-misi/change/{id}', [VisiMisiController::class, 'superChangeVimi'])->name('super.change-vimi')->middleware('is_super');


        //====== Admin
         Route::get('/t3g4l/adminministrator/visi-misi/view', [VisiMisiController::class, 'adminViewVimi'])->name('adViewVimi')->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/visi-misi/add', [VisiMisiController::class, 'adminAddVimi'])->name('adminAddVimi')->middleware('is_admin');

        Route::post('/t3g4l/adminministrator/visi-misi/submit', [VisiMisiController::class, 'adminSubmitVimi'])->middleware('is_admin');

        Route::get('/t3g4l/adminministrator/visi-misi/update/{id}', [VisiMisiController::class, 'adminUpdateVimi'])->name('admin.update-vimi')->middleware('is_admin');
        
        Route::put('/t3g4l/adminministrator/visi-misi/change/{id}', [VisiMisiController::class, 'adminChangeVimi'])->name('admin.change-vimi')->middleware('is_admin');
         /*
           END FITUR VISI MISI
        */

});