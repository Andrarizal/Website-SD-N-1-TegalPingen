<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;

class GaleriController extends Controller
{
    /*
    =============
    SUPER ADMIN
    =============
    */
    public function superViewGaleri() {
        $select = new galeri;
        $data['pick'] = $select::all();
        return view('tegal.super.galeri.viewGaleri', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function superAddGaleri() {
        return view('tegal.super.galeri.addGaleri');

    }

    public function superSubmitGaleri(Request $request) {

        ///ddd($request);
        $validated = $request->validate([
            'title' => 'required|min:2',
            'deskripsi' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $berita = galeri::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);

        return redirect() -> route('aViewGaleri') -> with('success', "Data Berhasil Ditambah");

    }


     public function superUpdateGaleri($id) {

        $data['galeri'] = galeri::find($id);
        return view('tegal.super.galeri.updateGaleri', $data);

    }

     public function superChangeGaleri(Request $request, $id) 
    {   
        //dd($request);
        // $request->validate([
        //     'title' => 'required|min:2',
        //     'deskripsi' => 'required|min:5',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     //'imageOld' => 'required',
        // ]); 

        $update = galeri::where('id', $id)->first();
        $update->title = $request->title;
        $update->deskripsi = $request->deskripsi;
        
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

        return redirect() -> route('aViewGaleri') -> with('success', "Data Berhasil Terubah");
    }


    public function superDeleteGaleri($id){
        
        $pick = galeri::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }





     /*
    =============
    ADMIN
    =============
    */
    public function adminViewGaleri() {
        $select = new galeri;
        $data['pick'] = $select::all();
        return view('tegal.admin.galeri.viewGaleri', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function adminAddGaleri() {
        return view('tegal.admin.galeri.addGaleri');

    }

    public function adminSubmitGaleri(Request $request) {

        ///ddd($request);
        $validated = $request->validate([
            'title' => 'required|min:2',
            'deskripsi' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $berita = galeri::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);

        return redirect() -> route('adViewGaleri') -> with('success', "Data Berhasil Ditambah");

    }


     public function adminUpdateGaleri($id) {

        $data['galeri'] = galeri::find($id);
        return view('tegal.admin.galeri.updateGaleri', $data);

    }

     public function adminChangeGaleri(Request $request, $id) 
    {   
        //dd($request);
        // $request->validate([
        //     'title' => 'required|min:2',
        //     'deskripsi' => 'required|min:5',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     //'imageOld' => 'required',
        // ]); 

        $update = galeri::where('id', $id)->first();
        $update->title = $request->title;
        $update->deskripsi = $request->deskripsi;
        
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

        return redirect() -> route('adViewGaleri') -> with('success', "Data Berhasil Terubah");
    }


    public function adminDeleteGaleri($id){
        
        $pick = galeri::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }
}
