@extends('layout.app-master')

@section('content')
    @auth
        <form class="m-3" action="/admin/update-profile/{{Auth::user()->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="nim">USERNAME</label>
               <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="{{Auth::user()->username}}" required>
            </div>
            <div class="form-group">
               <label for="nama">NAMA</label>
               <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Nama" value="{{Auth::user()->name}}" required>
            </div>
            <div class="form-group">
               <label for="email">EMAIL</label>
               <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{Auth::user()->email}}" required>
            </div>
            <!--
            <div class="form-group">
               <label for="pass">Password</label>
               <input type="pass" class="form-control" name="pass" id="pass" placeholder="Enter Nama" value="{{Auth::user()->password}}" required>
            </div>
            <div class="form-group">
               <label for="conn_pass">Confirm Password</label>
               <input type="text" class="form-control" name="cons_pass" id="con_pass" placeholder="Enter Nama" value="{{Auth::user()->password}}" required>
               <span style="color:grey; font-size:12px;">(sesuaikan dengan password di atas)</span>
            </div>
            -->
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    
@endsection
