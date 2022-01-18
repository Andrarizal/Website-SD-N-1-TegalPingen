<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileAdminController extends Controller
{
     public function adminProfile() 
    {
        return view('home.admin.profile');
    }

     public function adminUpdateProfile() 
    {
        return view('home.admin.updateProfile');
    }

     public function adminUpdateProfileSend(Request $request, $id) 
    {
        $update = User::find($id);
        $update->name = request('nama');
        $update->username = request('username');
        $update->email = request('email');
        $update->save();

        return redirect('/admin/home') -> with('Pesan', "Data Berhasil Terubah");
    }




    public function superProfile() 
    {
        return view('home.super.profile');
    }

     public function superUpdateProfile() 
    {
        return view('home.super.updateProfile');
    }

     public function superUpdateProfileSend(Request $request, $id) 
    {
        $update = User::find($id);
        $update->name = request('nama');
        $update->username = request('username');
        $update->email = request('email');
        $update->save();

        return redirect('/super/home') -> with('Pesan', "Data Berhasil Terubah");
    }
}
