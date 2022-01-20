<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageAdmin extends Controller
{
    /*
    =============
    SUPER ADMIN
    =============
    */
    public function superViewAdmin() {
        $select = new User;
        $data['pick'] = $select::all();
        //$data['pick2'] = $select::where('is_admin', "yes")->first();
        return view('tegal.super.admin-list.viewAdmin', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function superAddAdmin() {
        return view('tegal.super.admin-list.addAdmin');

    }

    public function superSubmitAdmin(Request $request) {

        ///ddd($request);
        $validated = $request->validate([
            'name' => 'required|min:10',
            'username' => 'required|unique:users,username|min:5',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]); 

        $berita = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect() -> route('aViewAdmin') -> with('success', "Data Berhasil Ditambah");

    }


    public function superUpdateAdmin($id) {

        $data['users'] = User::find($id);
        return view('tegal.super.admin-list.updateAdmin', $data);

    }

     public function superChangeAdmin(Request $request, $id) 
    {
        //ddd($request);
        $update = User::find($id);
        $update->username = request('username');
        $update->name = request('name');
        $update->email = request('email');
        $update->save();

        return redirect() -> route('aViewAdmin') -> with('success', "Data Berhasil Terubah");

        // $validated=$request->validate([
        //     'name' => 'required|min:5',
        //     'username' => 'required|unique:users,username',
        //     'email' => 'required|email:rfc,dns|unique:users,email'
        // ]);

        // $update = User::find($id);

        // if ($request->file('image') == "") {

        //     $update->update([

        //         'name' => $request->name,
        //         'username' => $request->username,
        //         'email' => $request->email

        //     ]);

        // } else {

        //     Storage::disk('local')->delete('public/blogs/'.$blog->image);
        //     $image = $request->file('image');
        //     $request->image->move(public_path('images'), $imageName);

        //     $update->update([

        //         'name' => $request->name,
        //         'username' => $request->username,
        //         'email' => $request->email,
        //         'image' => $image

        //     ]);
        // }

        // if($update){
        //     //redirect dengan pesan sukses
        //     return redirect()->route('aViewAdmin')->with(['success' => 'Data Berhasil Diupdate!']);
        // }else{
        //     //redirect dengan pesan error
        //     return redirect()->route('aViewAdmin')->with(['error' => 'Data Gagal Diupdate!']);
        // }

    }

    public function superUpdatePasswordAdmin($id) {

        $data['users'] = User::find($id);
        return view('tegal.super.admin-list.updatePasswordAdmin', $data);

    }

     public function superChangePasswordAdmin(Request $request, $id) 
    {
        //ddd($request);
        $validated = $request->validate([
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password',
        ]); 

        $update = User::find($id);
        $update->password = request('password');
        $update->save();

        return redirect() -> route('aViewAdmin') -> with('success', "Data Berhasil Terubah");
    }

    // public function superUpdateImageAdmin($id) {

    //     $data['users'] = User::find($id);
    //     return view('tegal.super.admin-list.updateImageAdmin', $data);

    // }

    //  public function superChangeImageAdmin(Request $request, $id) 
    // {
    //     //ddd($request);
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
    //     ]); 
    //     $imageName = time().'.'.$request->image->extension(); 
    //     $request->image->move(public_path('images'), $imageName);

    //     // $update::update([
    //     //     'name' => $request->name,
    //     //     'username' => $request->username,
    //     //     'email' => $request->email
    //     // ]);

    //     $update = User::find($id);
    //     $update->image = $imageName;
    //     $update->save();

    //     return redirect() -> route('aViewAdmin') -> with('success', "Data Berhasil Terubah");
    // }


    public function superDeleteAdmin($id){
        
        $pick = User::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }
}
