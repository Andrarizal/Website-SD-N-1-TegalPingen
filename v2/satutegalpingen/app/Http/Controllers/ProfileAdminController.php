<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileAdminController extends Controller
{
     public function adminProfile() 
    {
        return view('tegal.admin.profile');
    }

     public function adminUpdateProfile() 
    {
        return view('tegal.admin.updateProfile');
    }

     public function adminUpdateProfileSend(Request $request, $id) 
    {
        $update = User::find($id);
        $update->name = request('name');
        $update->username = request('username');
        $update->email = request('email');
        $update->save();

        return redirect('/t3g4l/ministrator/home') -> with('Pesan', "Data Berhasil Terubah");
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
        $update->name = request('name');
        $update->username = request('username');
        $update->email = request('email');
        $update->save();

        return redirect('/t3g4l/superministrator/home') -> with('Pesan', "Data Berhasil Terubah");
    }
}