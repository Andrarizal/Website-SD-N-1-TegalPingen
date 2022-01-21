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
        // $update = User::find($id);
        // $update->name = request('name');
        // $update->username = request('username');
        // $update->email = request('email');
        // $update->save();

        $update = User::where('id', $id)->first();
        $update->name = $request->name;
        $update->username = $request->username;
        $update->email = $request->email;
        $update->save();

        return redirect('/t3g4l/ministrator/home') -> with('Pesan', "Data Berhasil Terubah");
    }




    public function adminProfile() 
    {
        return view('tegal.admin.profileadmin');
    }

     public function adminUpdateProfile() 
    {
        return view('tegal.admin.updateadmin');
    }

     public function adminUpdateProfileSend(Request $request, $id) 
    {
        $update = User::find($id);
        $update->name = request('name');
        $update->username = request('username');
        $update->email = request('email');
        $update->save();

        return redirect('/t3g4l/adminministrator/home') -> with('Pesan', "Data Berhasil Terubah");
    }
}
