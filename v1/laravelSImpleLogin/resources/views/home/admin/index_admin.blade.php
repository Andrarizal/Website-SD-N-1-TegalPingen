@extends('layout.app-master')

@section('content')
    @auth
        {{$role=Auth::user()->is_admin;}}

        @if ($role==1)
            <h5>Selamat datang {{Auth::user()->username}}, anda login sebagai ADMIN</h5>
        @endif
    @endauth
    
@endsection
