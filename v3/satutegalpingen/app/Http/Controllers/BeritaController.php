<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;

class BeritaController extends Controller
{
    /*
    =============
    SUPER ADMIN
    =============
    */
    public function superViewBerita() {
        $select = new berita;
        $data['pick'] = $select::all();
        return view('tegal.super.berita.viewBerita', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function superAddBerita() {
        return view('tegal.super.berita.addBerita');

    }

    public function superSubmitBerita(Request $request) {

        ///ddd($request);
        $validated = $request->validate([
            'title' => 'required|min:2',
            'deskripsi' => 'required|min:5',
            'carosel' => 'required',
            'penting' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $berita = berita::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'carosel' => $request->carosel,
             'penting' => $request->carosel,
            'image' => $imageName,
        ]);

        return redirect() -> route('aViewBerita') -> with('success', "Data Berhasil Ditambah");

    }


     public function superUpdateBerita($id) {

        $data['berita'] = berita::find($id);
        return view('tegal.super.berita.updateBerita', $data);

    }

     public function superChangeBerita(Request $request, $id) 
    {
        //ddd($request);
        $update = berita::where('id', $id)->first();
        $update->title = $request->title;
        $update->deskripsi = $request->deskripsi;
        $update->carosel = $request->carosel;
        $update->penting = $request->penting;
        
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
        //$update->save();

        return redirect() -> route('aViewBerita') -> with('success', "Data Berhasil Terubah");
    }


    public function superDeleteBerita($id){
        
        $pick = berita::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }
}
