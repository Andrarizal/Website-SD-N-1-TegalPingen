@extends('tegal.layout.super_master_admin')
@section('content')
	@auth

		<h5>Login As SUPER Admin</h5>
		<a href="{{route('logout')}}">Logut</a>
		<a href="{{route('super.profile-show')}}">Profile</a>
		<a href="{{route('aViewSarana')}}">Sarana & Prasarana</a>
		<a href="{{route('aViewBerita')}}">Berita</a>
		<a href="{{route('aViewAdmin')}}">ADmin_List</a>
		<a href="{{route('aViewGaleri')}}">Galeri</a>
		<a href="{{route('aViewMatpel')}}">Mat Pels</a>
		<a href="{{route('aViewPrestasi')}}">Prestasi</a>
		<a href="{{route('aViewTenaga')}}">tenaga pendidik</a>
		<a href="{{route('aViewVimi')}}">Visi Misi</a>

	@endauth
@endsection