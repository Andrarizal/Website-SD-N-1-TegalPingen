<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestasi;

class PrestasiController extends Controller
{
    /*
    =============
    SUPER ADMIN
    =============
    */
    public function superViewPrestasi() {
        $select = new prestasi;
        $data['pick'] = $select::all();
        return view('tegal.super.prestasi.viewPrestasi', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function superAddPrestasi() {
        return view('tegal.super.prestasi.addPrestasi');

    }

    public function superSubmitPrestasi(Request $request) {

        //dd($request);
        $validated = $request->validate([
            'title' => 'required|min:2',
            'deskripsi' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $berita = prestasi::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);

        return redirect() -> route('adViewPrestasi') -> with('success', "Data Berhasil Ditambah");

    }


     public function superUpdatePrestasi($id) {

        $data['prestasi'] = prestasi::find($id);
        return view('tegal.super.prestasi.updatePrestasi', $data);

    }

     public function superChangePrestasi(Request $request, $id) 
    {   
        //ddd($request);
        // $request->validate([
        //     'title' => 'required|min:2',
        //     'deskripsi' => 'required|min:5',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     //'imageOld' => 'required',
        // ]); 

        $update = prestasi::where('id', $id)->first();
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

        return redirect() -> route('adViewPrestasi') -> with('success', "Data Berhasil Terubah");
    }


    public function superDeletePrestasi($id){
        
        $pick = prestasi::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }




    /*
    =============
    ADMIN
    =============
    */
    public function adminViewPrestasi() {
        $select = new prestasi;
        $data['pick'] = $select::all();
        return view('tegal.admin.prestasi.viewPrestasi', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function adminAddPrestasi() {
        return view('tegal.admin.prestasi.addPrestasi');

    }

    public function adminSubmitPrestasi(Request $request) {

        //dd($request);
        $validated = $request->validate([
            'title' => 'required|min:2',
            'deskripsi' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $berita = prestasi::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);

        return redirect() -> route('adViewPrestasi') -> with('success', "Data Berhasil Ditambah");

    }


     public function adminUpdatePrestasi($id) {

        $data['prestasi'] = prestasi::find($id);
        return view('tegal.admin.prestasi.updatePrestasi', $data);

    }

     public function adminChangePrestasi(Request $request, $id) 
    {   
        //ddd($request);
        // $request->validate([
        //     'title' => 'required|min:2',
        //     'deskripsi' => 'required|min:5',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     //'imageOld' => 'required',
        // ]); 

        $update = prestasi::where('id', $id)->first();
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

        return redirect() -> route('adViewPrestasi') -> with('success', "Data Berhasil Terubah");
    }


    public function adminDeletePrestasi($id){
        
        $pick = prestasi::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }
}
