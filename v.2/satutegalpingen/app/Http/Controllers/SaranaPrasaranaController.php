<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sarana_prasarana;

class SaranaPrasaranaController extends Controller
{
    /*
    =============
    ADMIN
    =============
    */
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

        $sarana = sarana_prasarana::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);

        return redirect() -> route('aViewSarana') -> with('success', "Data Berhasil Ditambah");

    }


     public function adminUpdateSarana($id) {

        $data['sarana'] = sarana_prasarana::find($id);
        return view('home.admin.sarana.updateSarana', $data);

    }

     public function adminChangeSarana(Request $request, $id) 
    {
        ddd($request);
        $update = sarana_prasarana::where('id', $id);
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
        ddd($update);
        $update->update();

        //$update->save();

        return redirect() -> route('aViewSarana') -> with('success', "Data Berhasil Terubah");
    }


    public function adminDeleteSarana($id){
        
        $pick = sarana_prasarana::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }






    /*
    =============
    admin ADMIN
    =============
    */
    public function adminViewSarana() {
        $select = new sarana_prasarana;
        $data['pick'] = $select::all();
        return view('tegal.admin.sarana.viewSarana', $data);
        //return view('home.admin.sarana.viewSarana');
    }

    public function adminAddSarana() {
        return view('tegal.admin.sarana.addSarana');

    }

    public function adminSubmitSarana(Request $request) {

        ///ddd($request);
        $validated = $request->validate([
            'title' => 'required|min:2',
            'deskripsi' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]); 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $sarana = sarana_prasarana::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);

        return redirect() -> route('aViewSarana') -> with('success', "Data Berhasil Ditambah");

    }


     public function adminUpdateSarana($id) {

        $data['sarana'] = sarana_prasarana::find($id);
        return view('tegal.admin.sarana.updateSarana', $data);

    }

     public function adminChangeSarana(Request $request, $id) 
    {
        //ddd($request);
        $update = sarana_prasarana::where('id', $id)->first();
        $update->title = request('title');
        $update->deskripsi = request('deskripsi');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalName(); 
            $file->move(public_path('images'), $fileName);

            //$update = galeri::find($id);
            
            $update->image = $fileName;

        } else {
            
            $update->image = $update->image;

        }
        $update->update();
        //$update->save();

        return redirect() -> route('aViewSarana') -> with('success', "Data Berhasil Terubah");
    }


    public function adminDeleteSarana($id){
        
        $pick = sarana_prasarana::find($id);
        $pick->delete();

        return redirect() -> back() -> with('success', "Data Berhasil Dihapus");
    }
}
