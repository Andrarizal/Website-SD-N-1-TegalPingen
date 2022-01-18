<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sarana_prasarana;
use App\Models\User;

class SaranaPrasaranaController extends Controller
{
    public function adminViewSarana() {
        $select = new sarana_prasarana;
        $data['pick'] = $select::all();
        return view('home.admin.sarana.viewSarana', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function adminAddSarana() {
        return view('home.admin.sarana.addSarana');

    }

    public function adminSubmitSarana(Request $request) {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        
        $sarana = new sarana_prasarana;
        $sarana->title = request('namaSarana');
        $sarana->deskripsi = request('desc');
        $sarana->image = $request->image;
        $sarana->save();
        
        $request->image->move(public_path('images'), $imageName);
        return redirect() -> back() -> with('success', "Data Berhasil Ditambah");

    }

    public function adminDeleteSarana($id){
        $pick = sarana_prasarana::find($id);
        $pick->delete();

        return redirect() -> back() -> with('Pesan', "Data Berhasil Dihapus");
    }
}
