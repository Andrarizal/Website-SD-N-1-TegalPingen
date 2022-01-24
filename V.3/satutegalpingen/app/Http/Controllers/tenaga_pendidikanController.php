<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenaga_pendidik;

class tenaga_pendidikanController extends Controller
{
   
    /*
    =============
    SUPER ADMIN
    =============
    */
    public function superViewTenaga() {
        $select = new tenaga_pendidik;
        $data['pick'] = $select::all();
        return view('tegal.super.tenaga.viewTenaga', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function superAddTenaga() {
        return view('tegal.super.tenaga.addTenaga');

    }

    public function superSubmitTenaga(Request $request) {

        //dd($request);
        $validated = $request->validate([
            'namaTenaga' => 'required|min:5',
            'carosel' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $berita = tenaga_pendidik::create([
            'nama_GuruKaryawan' => $request->namaTenaga,
            'role' => $request->role,
            'carosel' => $request->carosel,
            'image' => $imageName,
        ]);

        return redirect() -> route('aViewTenaga') -> with('success', "Data Berhasil Ditambah");

    }


     public function superUpdateTenaga($id) {

        $data['tenaga'] = tenaga_pendidik::find($id);
        return view('tegal.super.tenaga.updateTenaga', $data);

    }

     public function superChangeTenaga(Request $request, $id) 
    {   
        //ddd($request);
        // $request->validate([
        //     'title' => 'required|min:2',
        //     'deskripsi' => 'required|min:5',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     //'imageOld' => 'required',
        // ]); 

        $update = tenaga_pendidik::where('id', $id)->first();
        $update->nama_GuruKaryawan = $request->namaTenaga;
        $update->carosel = $request->carosel;
        $update->role = $request->role;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalName(); 
            $file->move(public_path('images'), $fileName);

            //$update = galeri::find($id);
            
            $update->image = $fileName;

        } else {
            
            $update->image = $update->image;

        }

        //dd($update);
        $update->update();

        return redirect() -> route('aViewTenaga') -> with('success', "Data Berhasil Terubah");
    }


    public function superDeleteTenaga($id){
        
        $pick = tenaga_pendidik::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }





    /*
    =============
    admin ADMIN
    =============
    */
    public function adminViewTenaga() {
        $select = new tenaga_pendidik;
        $data['pick'] = $select::all();
        return view('tegal.admin.tenaga.viewTenaga', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function adminAddTenaga() {
        return view('tegal.admin.tenaga.addTenaga');

    }

    public function adminSubmitTenaga(Request $request) {

        //dd($request);
        $validated = $request->validate([
            'namaTenaga' => 'required|min:5',
            'carosel' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $berita = tenaga_pendidik::create([
            'nama_GuruKaryawan' => $request->namaTenaga,
            'role' => $request->role,
            'carosel' => $request->carosel,
            'image' => $imageName,
        ]);

        return redirect() -> route('adViewTenaga') -> with('success', "Data Berhasil Ditambah");

    }


     public function adminUpdateTenaga($id) {

        $data['tenaga'] = tenaga_pendidik::find($id);
        return view('tegal.admin.tenaga.updateTenaga', $data);

    }

     public function adminChangeTenaga(Request $request, $id) 
    {   
        //ddd($request);
        // $request->validate([
        //     'title' => 'required|min:2',
        //     'deskripsi' => 'required|min:5',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     //'imageOld' => 'required',
        // ]); 

        $update = tenaga_pendidik::where('id', $id)->first();
        $update->nama_GuruKaryawan = $request->namaTenaga;
        $update->carosel = $request->carosel;
        $update->role = $request->role;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalName(); 
            $file->move(public_path('images'), $fileName);

            //$update = galeri::find($id);
            
            $update->image = $fileName;

        } else {
            
            $update->image = $update->image;

        }

        //dd($update);
        $update->update();

        return redirect() -> route('adViewTenaga') -> with('success', "Data Berhasil Terubah");
    }


    public function adminDeleteTenaga($id){
        
        $pick = tenaga_pendidik::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }
}


