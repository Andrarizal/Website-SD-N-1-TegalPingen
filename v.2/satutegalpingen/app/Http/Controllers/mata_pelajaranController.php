<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mata_pelajaran;

class mata_pelajaranController extends Controller
{
     /*
    =============
    ADMIN
    =============
    */
    public function adminViewMatpel() {
        $select = new mata_pelajaran;
        $data['pick'] = $select::all();
        return view('tegal.admin.mat-pel.viewMatpel', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function adminAddMatpel() {
        return view('tegal.admin.mat-pel.addMatpel');

    }

    public function adminSubmitMatpel(Request $request) {

        ///ddd($request);
        $validated = $request->validate([
            'matpel' => 'required|min:1',
        ]); 

        $matpel = mata_pelajaran::create([
            'mata_pelajaran' => $request->matpel,
        ]);

        return redirect() -> route('aViewMatpel') -> with('success', "Data Berhasil Ditambah");

    }


     public function adminUpdateMatpel($id) {

        $data['matpel'] = mata_pelajaran::find($id);
        return view('tegal.admin.mat-pel.updateMatpel', $data);

    }

     public function adminChangeMatpel(Request $request, $id) 
    {   
        
        $update = mata_pelajaran::where('id', $id)->first();
        $update->mata_pelajaran = $request->matpel;        

        //dd($update);
        $update->update();

        return redirect() -> route('aViewMatpel') -> with('success', "Data Berhasil Terubah");
    }


    public function adminDeleteMatpel($id){
        
        $pick = mata_pelajaran::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }

}
