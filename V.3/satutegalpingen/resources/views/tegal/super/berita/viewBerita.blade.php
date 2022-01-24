@extends('tegal.layout.super_master_admin')
@section('content')
@auth
	<figure class="wp-block-table is-style-stripes">
        <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama Berita</th>
					<th scope="col">Deskripsi</th>
					<th scope="col">Img</th>
					<th scope="col">Muncul Carousel</th>
					<th scope="col">Pengumuman Penting</th>
					<th scope="col">Dibuat Saat</th>
					<th scope="col">Terbarui Saat</th>
					<th scope="col">AKSI</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pick as $p)
					<tr>
						<th scope="row">{{$p->id}}</th>
						<td>{{$p->title}}</td>
						<td>{{$p->deskripsi}}</td>
						<td><img src="{!! url('images/'.$p->image.'') !!}" style="width:200px; height: 200px;"></td>
						<td>{{$p->carosel}}</td>
						<td>{{$p->penting}}</td>
						<td>{{$p->created_at}}</td>
						<td>{{$p->updated_at}}</td>
						<td><a href="{{ url('/t3g4l/superministrator/berita/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>   
						<form action="{{ url('/t3g4l/superministrator/berita/delete/'.$p->id.'') }}"  method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</tr></td>
				@endforeach
			</tbody>
		</table>
	</figure>
		<a href="{{route('super.add-berita')}}" class="btn btn-primary">add Data</a>
@endauth
@endsection
    