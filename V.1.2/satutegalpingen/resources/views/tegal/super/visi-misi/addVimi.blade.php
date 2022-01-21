@auth
    <form class="m-3" action="/t3g4l/superministrator/visi-misi/submit" method="post">
      @csrf
            <div class="form-group">
               <label for="carosel">Jenis</label>
               <select class="form-control" id="vimi" name="vimi">
                  <option>visi</option>
                  <option>misi</option>
               </select>
            </div>    
            <div class="form-group">
               <label for="deskripsi">Deskripsi</label>
               <textarea class="form-control" name="deskripsi" id="" rows="3"></textarea>
            </div>            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endauth        