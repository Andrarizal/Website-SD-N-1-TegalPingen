@extends('layout.app-master')

@section('content')
    @auth
            <h5>Selamat datang {{Auth::user()->username}}, anda login sebagai ADMIN</h5>

            <a href="{{route('admin.profile')}}">Profile</a>
            <br>
            <a href="{{route('aViewSarana')}}">Sarana & Prasarana</a>
    @endauth
    
@endsection

   