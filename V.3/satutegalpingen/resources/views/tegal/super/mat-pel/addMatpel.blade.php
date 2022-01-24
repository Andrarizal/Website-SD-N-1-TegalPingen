@@extends('tegal.layout.super_master_admin')
@section('content')

@auth
<!-- <figure class="wp-block-table is-style-stripes">
    <form class="m-3" action="/t3g4l/superministrator/mat-pel/submit" method="post" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
               <label for="title">Nama Mata Pelajaran</label>
               <input type="text" class="form-control" name="matpel" id="title" placeholder="Masukan Nama">
            </div>             
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</figure> -->
<div class="card">
        <div class="card-header">
            <h3>Tambah Data Mapel</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="/t3g4l/superministrator/mat-pel/submit" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nama Mata Pelajaran</label>
                            <input type="text" name="matpel" class="form-control">
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