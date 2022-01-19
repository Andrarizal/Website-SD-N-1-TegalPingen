@extends('layout.app-master')

@section('content')
     @auth
        
            <h5>Selamat datang {{Auth::user()->username}}, anda login sebagai SUPER ADMIN</h5>

            <a href="{{route('super.profile')}}">Profile</a>
        
    @endauth
@endsection
