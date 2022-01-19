@extends('layout.app-master')

@section('content')
    @auth
        <div class="card p-0 mx-auto" style="width: 20rem; height: 100% ">
            <img class="card-img-top" src="{!! url('images/profile-pic.jpg') !!}">
            <div class="card-body p-2">
            	<div class="judulmenu d-flex">
                    <div class="col-10 text-start">
                        <h5 class="card-title fw-bold">
                            Username    : {{Auth::user()->username;}}
                        </h5>
                        <br>
                        <h5 class="card-title fw-bold">
                            Nama Penuh  : {{Auth::user()->name;}}
                       </h5>
                        <br>
                        <h5 class="card-title fw-bold">
                            Email       : {{Auth::user()->email;}}
                        </h5>
                    </div>
                </div>
                <br><br>
                <a href="{{route('admin.updateProfile')}}" class="btn btn-primary mb-2">Update profile</a>                  
            </div>
        </div>
    @endauth
    
@endsection
