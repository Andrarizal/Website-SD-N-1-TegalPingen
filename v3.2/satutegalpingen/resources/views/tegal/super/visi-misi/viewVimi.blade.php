@extends('tegal\layout\super_master_admin')
@section('content')
@auth
	<figure class="wp-block-table is-style-stripes">
        <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Jenis</th>
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
						<td>{{$p->deskripsi}}</td>
						<td>{{$p->created_at}}</td>
						<td>{{$p->updated_at}}</td>
						<td><a href="{{ url('/t3g4l/superministrator/visi-misi/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>   
					</tr></td>
				@endforeach
			</tbody>
		</table>
		<br><br><br>
		<a href="{{route('superAddVimi')}}" class="btn btn-primary"><span style="color:red; font-size:12px;">(DO NOT CLICK)</span>  add Data</a>
	</figure>
    @endauth
    @endsection
    