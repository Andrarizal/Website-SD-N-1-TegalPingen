@extends('tegal.layout.admin_master_admin')
@section('content')
@auth
    <!-- <form class="m-3" action="/t3g4l/adminministrator/visi-misi/change/{{$vimi->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="title">Judul </label>
               <input type="text" class="form-control" name="title" id="title" placeholder="Masukan jenis" value="{{$vimi->title}}" required disabled>
            </div>
            <div class="form-group">
               <label for="desc">Deskripsi</label>
               <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$vimi->deskripsi}}</textarea>
            </div>    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->


<div class="card">
        <div class="card-header">
            <h3>Tambah Data Visi</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="/t3g4l/adminministrator/visi-misi/change/{{$vimi->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                         <div class="form-group">
                           <label for="title">Judul </label>
                           <input type="text" class="form-control" name="title" id="title" placeholder="Masukan jenis" value="{{$vimi->title}}" required disabled>
                        </div>
                        <div class="form-group">
                           <label for="desc">Deskripsi</label>
                           <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$vimi->deskripsi}}</textarea>
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