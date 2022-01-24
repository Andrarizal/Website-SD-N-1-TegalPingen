@auth
    <form class="m-3" action="/t3g4l/adminministrator/manage-admin/change-password/{{$users->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="name">New Password</label>
               <input type="password" class="form-control" name="password" id="name" placeholder="Masukan Nama" required>
            </div>
            <div class="form-group">
               <label for="desc">Confirm New Password</label>
               <input type="password" class="form-control" name="password_confirmation" id="name" placeholder="Masukan Nama" required>
            </div>           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    