@extends('layout.app-master')

@section('content')
    @auth
        <form class="m-3" action="/admin/sarana-prasarana/submit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
               <label for="title">Nama Kegiatan</label>
               <input type="text" class="form-control" name="title" id="namaKegiatan" placeholder="Masukan Nama">
            </div>
            <div class="form-group mb-3">
               <input type="file" class="form-control" name="image" id="image">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div> 
            <div class="form-group">
               <label for="deskripsi">Deskripsi</label>
               <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi">
            </div>            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    
@endsection