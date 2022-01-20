<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visi_misi;

class VisiMisiController extends Controller
{
    /*
    =============
    SUPER ADMIN
    =============
    */
    public function superViewVimi() {
        $select = new visi_misi;
        $data['pick'] = $select::all();
        return view('tegal.super.visi-misi.viewVimi', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function superAddVimi() {
        return view('tegal.super.visi-misi.addVimi');

    }

    public function superSubmitVimi(Request $request) {

        //dd($request);
        $request->validate([
            'vimi' => 'required|min:2',
            'deskripsi' => 'required|min:5',
        ]); 

        $berita = visi_misi::create([
            'title' => $request->vimi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect() -> route('aViewVimi') -> with('success', "Data Berhasil Ditambah");

    }


     public function superUpdateVimi($id) {

        $data['vimi'] = visi_misi::find($id);
        return view('tegal.super.visi-misi.updateVimi', $data);

    }

     public function superChangeVimi(Request $request, $id) 
    {   
        //ddd($request);
        $update = visi_misi::where('id', $id)->first();
        $update->title = $request->vimi;
        $update->deskripsi = $request->deskripsi;
        
        //dd($update);
        $update->update();

        return redirect() -> route('aViewVimi') -> with('success', "Data Berhasil Terubah");
    }


    public function superDeleteVimi($id){
        
        $pick = visi_misi::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }
}
