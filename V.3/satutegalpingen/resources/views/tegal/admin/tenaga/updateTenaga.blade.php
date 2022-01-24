@extends('tegal.layout.admin_master_admin')
@section('content')
@auth
   <!--  <form class="m-3" action="/t3g4l/adminministrator/tenaga/change/{{$tenaga->id}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="title">Nama </label>
               <input type="text" class="form-control" name="namaTenaga" id="title" placeholder="Masukan Nama" value="{{$tenaga->nama_GuruKaryawan}}" required>
            </div>
            <div class="form-group">
               <label for="carosel">Muncul Carousel</label>
               <select class="form-control" id="carosel" name="carosel">
                  <option>yes</option>
                  <option>no</option>
               </select>
            </div>
            <div class="form-group">
               <label for="carosel">Role</label>
               <select class="form-control" id="role" name="role">
                  <option>Kepala Sekolah</option>
                  <option>Wakil Kepala Sekolah</option>
                  <option>Guru</option>
                  <option>Sekretaris</option>
                  <option>OB</option>
               </select>
            </div>
            <div class="form-group mb-3">
               <label for="desc">Gambar</label>
               <input type="file" accept=".jpg, .png, .jpeg, .gif" class="form-control" name="image" id="image">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div>   
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->

<div class="card">
        <div class="card-header">
            <h3>Tambah Data Tenaga</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="/t3g4l/adminministrator/tenaga/change/{{$tenaga->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                           <label for="title">Nama </label>
                           <input type="text" class="form-control" name="namaTenaga" id="title" placeholder="Masukan Nama" value="{{$tenaga->nama_GuruKaryawan}}" required>
                        </div>
                        <div class="form-group">
                           <label for="carosel">Muncul Carousel</label>
                           <select class="form-control" id="carosel" name="carosel">
                              <option>yes</option>
                              <option>no</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="carosel">Role</label>
                           <select class="form-control" id="role" name="role">
                              <option>Kepala Sekolah</option>
                              <option>Wakil Kepala Sekolah</option>
                              <option>Guru</option>
                              <option>Sekretaris</option>
                              <option>OB</option>
                           </select>
                        </div>
                        <div class="form-group mb-3">
                           <label for="desc">Gambar</label>
                           <input type="file" accept=".jpg, .png, .jpeg, .gif" class="form-control" name="image" id="image">
                           <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
                        </div>   
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <a href="" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endauth
@endsection    