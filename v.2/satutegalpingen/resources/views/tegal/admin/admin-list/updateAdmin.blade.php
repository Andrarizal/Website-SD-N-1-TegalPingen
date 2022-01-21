@auth
    <form class="m-3" action="/t3g4l/adminministrator/manage-admin/change/{{$users->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="name">Nama</label>
               <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" value="{{$users->name}}" required>
            </div>
            <div class="form-group">
               <label for="desc">Username</label>
               <input type="text" class="form-control" name="username" id="name" placeholder="Masukan Nama" value="{{$users->username}}" required>
            </div>   
            <div class="form-group">
               <label for="desc">Email</label>
               <input type="email" class="form-control" name="email" id="name" placeholder="Masukan Nama" value="{{$users->email}}" required>
            </div>         
            <!-- <div class="form-group mb-3">
               <label for="desc">Profile Image</label>
               <input type="file" class="form-control" name="image" id="image">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div>  -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    