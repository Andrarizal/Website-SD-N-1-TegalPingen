@auth
    <form class="m-3" action="/t3g4l/superministrator/berita/submit" method="post" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
               <label for="title">Nama Berita</label>
               <input type="text" class="form-control" name="title" id="title" placeholder="Masukan Nama">
            </div>      
            <div class="form-group mb-3">
               <input type="file" class="form-control" name="image" id="image">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div> 
            <div class="form-group">
               <label for="deskripsi">Deskripsi</label>
               <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi">
            </div>            
            <div class="form-group">
               <label for="carosel">Muncul Carousel</label>
               <select class="form-control" id="carosel" name="carosel">
                  <option>yes</option>
                  <option>no</option>
               </select>
            </div> 
            <div class="form-group"> 
               <label for="carosel">Pengumuman Penting ?</label>
               <select class="form-control" id="penting" name="penting">
                  <option>yes</option>
                  <option>no</option>
               </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endauth        