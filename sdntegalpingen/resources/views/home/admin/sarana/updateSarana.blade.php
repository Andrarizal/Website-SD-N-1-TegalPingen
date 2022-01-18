@extends('layout.app-master')

@section('content')
    @auth
        <form class="m-3" action="" method="post">
            @method('put')
            @csrf
            <div class="form-group">
               <label for="namaSarana">Nama Sarana & Prasarana</label>
               <input type="text" class="form-control" name="namaSarana" id="namaSarana" placeholder="Masukan Nama" value="{{$sarana->title}}" required>
            </div>
            <!-- <div class="form-group mb-3">
               <img src="{!! url('assets/images/$pick->image') !!}" style="width: 10%; height: 10%;">
               <input type="file" class="form-control" name="img" required="true">
               <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div>  -->
            <div class="form-group">
               <label for="desc">Deskripsi</label>
               <textarea class="form-control" name="desc" id="desc" rows="3">{{$sarana->deskripsi}}</textarea>
            </div>            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth    
@endsection
