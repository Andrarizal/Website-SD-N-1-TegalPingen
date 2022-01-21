<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    public function showadmin()
    {
        return view('auth.registeradmin');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/t3g4l/ministrator/home')->with('success', "Akun Berhasil Teregistrasi !");
    }

    public function registeradmin(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/t3g4l/adminministrator/home')->with('success', "Akun Berhasil Teregistrasi !");
    }
}
