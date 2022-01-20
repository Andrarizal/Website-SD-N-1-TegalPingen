@auth
    <form class="m-3" action="/t3g4l/superministrator/manage-admin/change-image/{{$users->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group mb-3">
               <input type="file" class="form-control" name="image" id="image">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    