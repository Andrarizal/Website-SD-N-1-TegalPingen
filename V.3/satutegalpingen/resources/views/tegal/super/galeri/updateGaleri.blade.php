@extends('tegal.layout.super_master_admin')
@section('content')
@auth
    <form class="m-3" action="/t3g4l/superministrator/galeri/change/{{$galeri->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="title">Judul Galeri</label>
               <input type="text" class="form-control" name="title" id="title" placeholder="Masukan Nama" value="{{$galeri->title}}" required>
            </div>
            <div class="form-group">
               <label for="desc">Deskripsi</label>
               <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$galeri->deskripsi}}</textarea>
            </div>    
            <div class="form-group mb-3">
               <label for="desc">Image</label>
              <!--  <input type="hidden" class="form-control" name="imageOld" value="{{$galeri->image}}" id="image"> -->
               <input accept=".jpg, .png, .jpeg, .gif" type="file" class="form-control" name="image" id="image">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div>      
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    
@endsection