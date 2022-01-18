<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sarana_prasarana;

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

        ///ddd($request);
        $validated = $request->validate([
            'title' => 'required|min:8',
            'deskripsi' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);
        
        // $sarana = new sarana_prasarana;
        // $sarana->title = request('namaSarana');
        // $sarana->deskripsi = request('desc');
        // $sarana->image = request($imageName);
        // //$request->image->storeAs('image', $imageName, 'sarana_prasarana');
        // $sarana->save();

        $sarana = sarana_prasarana::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);
        //$sarana = sarana_prasarana::create($validated);

        return redirect() -> back() -> with('success', "Data Berhasil Ditambah");

    }


     public function adminUpdateSarana($id) {

        $data['sarana'] = sarana_prasarana::find($id);
        return view('home.admin.sarana.updateSarana', $data);

    }


    public function adminDeleteSarana($id){
        
        $pick = sarana_prasarana::find($id);
        $pick->delete();

        return redirect() -> back() -> with('Pesan', "Data Berhasil Dihapus");
    }
}
