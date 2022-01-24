@extends('tegal.layout.admin_master_admin')
@section('content')
@auth
<!-- <form action="/t3g4l/superministrator/update-profile-send/{{{Auth::user()->id}}}" method="post">
	@method('put')
	@csrf
	<label for="username">Username</label>
	<input type="text" name="username" value="{{Auth::user()->username}}">

	<label for="name">Name</label>
	<input type="text" name="name" value="{{Auth::user()->name}}">

	<label for="email">Email</label>
	<input type="email" name="email" value="{{Auth::user()->email}}">

	<button type="submit" class="btn btn-primary">Submit</button>
</form> -->


<div class="card">
        <div class="card-header">
            <h3>Edit Profile</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="/t3g4l/adminministrator/update-profile-send/{{{Auth::user()->id}}}" method="post" enctype="multipart/form-data">
                        @method('put')
					@csrf
                        <div class="form-group">
                           <label for="username">Username</label>
                           <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" value="{{Auth::user()->username}}" required >
                        </div>
                        <div class="form-group">
                           <label for="Nama">Nama</label>
                           <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama Full" value="{{Auth::user()->name}}" required >
                        </div>    
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" name="email" id="email" placeholder="Masukan jenis" value="{{Auth::user()->email}}" required >
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <!-- <a href="" class="btn btn-primary">Kembali</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endauth
@endsection