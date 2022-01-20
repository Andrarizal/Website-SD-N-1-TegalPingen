@auth
    <form class="m-3" action="/t3g4l/superministrator/visi-misi/change/{{$vimi->id}}" method="post">
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
        </form>
    @endauth    