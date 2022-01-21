@extends('tegal.layout.admin_master_admin')
@section('content')
@auth
    <form class="m-3" action="/t3g4l/adminministrator/sarana/change/{{$sarana->id}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="title">Nama Sarana & Prasarana</label>
               <input type="text" class="form-control" name="title" id="title" placeholder="Masukan Nama" value="{{$sarana->title}}" required>
            </div>
            <div class="form-group">
               <label for="desc">Deskripsi</label>
               <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$sarana->deskripsi}}</textarea>
            </div>   
            <div class="form-group mb-3">
               <label for="desc">Gambar</label>
               <input type="file" accept=".jpg, .png, .jpeg, .gif" class="form-control" name="image" id="image">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div>          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth  
@endsection  