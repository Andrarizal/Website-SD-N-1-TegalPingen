@extends('tegal.layout.admin-master')
@section('content')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Judul Berita</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul Beritas">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Deskripsi Berita</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection