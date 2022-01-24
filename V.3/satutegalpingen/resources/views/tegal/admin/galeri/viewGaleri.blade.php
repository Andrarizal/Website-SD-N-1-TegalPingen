@extends('tegal.layout.admin_master_admin')
@section('content')

@auth
<figure class="wp-block-table is-style-stripes">
        <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama Galeri</th>
					<th scope="col">Img</th>
					<th scope="col">Deskripsi</th>
					<th scope="col">Dibuat</th>
					<th scope="col">Terbarui</th>
					<th scope="col">AKSI</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pick as $p)
					<tr>
						<th scope="row">{{$p->id}}</th>
						<td>{{$p->title}}</td>
						<td><img src="{!! url('images/'.$p->image.'') !!}" style="width:200px; height: 200px;"></td>
						<td>{{$p->deskripsi}}</td>
						<td>{{$p->created_at}}</td>
						<td>{{$p->updated_at}}</td>
						<td><a href="{{ url('/t3g4l/adminministrator/galeri/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>   
						<form action="{{ url('/t3g4l/adminministrator/galeri/delete/'.$p->id.'') }}"  method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</tr></td>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('admin.add-galeri')}}" class="btn btn-primary">add Data</a>
</figure>
@endauth
@endsection
    