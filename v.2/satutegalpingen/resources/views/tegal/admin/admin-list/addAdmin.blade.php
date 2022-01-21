@auth
    <form class="m-3" action="/t3g4l/adminministrator/manage-admin/submit" method="post" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
               <label for="title">Nama</label>
               <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" required="required">
            </div>    
            <div class="form-group">
               <label for="title">Username</label>
               <input type="text" class="form-control" name="username" id="title" placeholder="Masukan UserNama" required="required">
            </div>   
            <div class="form-group">
               <label for="deskripsi">Email</label>
               <input type="email" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan Email" required="required">
            </div>            
            <div class="form-group form-floating mb-3">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>

           <div class="form-group form-floating mb-3">
               <label for="email">Confirm Password</label>
               <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="required">
           </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endauth        