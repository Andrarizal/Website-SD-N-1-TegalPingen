@auth
    <form class="m-3" action="/t3g4l/superministrator/mat-pel/submit" method="post" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
               <label for="title">Nama Mata Pelajaran</label>
               <input type="text" class="form-control" name="matpel" id="title" placeholder="Masukan Nama">
            </div>             
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endauth        