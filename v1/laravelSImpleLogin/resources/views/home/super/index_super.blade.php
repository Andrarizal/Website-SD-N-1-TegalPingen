@extends('layout.app-master')

@section('content')
    {{$role="Auth::user()->is_super";}}

    @if ($role==1)
        <b>Super Admin</b>
    @endif

    <h5>Selamat datang {{Auth::user()->username}}, anda login sebagai</h5>
    }
@endsection
