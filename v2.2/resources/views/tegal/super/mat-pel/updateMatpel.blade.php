@auth
    <form class="m-3" action="/t3g4l/superministrator/mat-pel/change/{{$matpel->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="title">Nama Mata Pelajaran</label>
               <input type="text" class="form-control" name="matpel" id="title" placeholder="Masukan Nama" value="{{$matpel->mata_pelajaran}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    