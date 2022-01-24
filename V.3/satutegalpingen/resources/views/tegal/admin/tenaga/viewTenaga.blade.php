@extends('tegal.layout.admin_master_admin')
@section('content')
@auth
<figure class="wp-block-table is-style-stripes">
        <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama Guru Karyawan</th>
					<th scope="col">Img</th>
					<th scope="col">Carousel</th>
					<th scope="col">Role</th>
					<th scope="col">Dibuat</th>
					<th scope="col">Terbarui</th>
					<th scope="col">AKSI</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pick as $p)
					<tr>
						<th scope="row">{{$p->id}}</th>
						<td>{{$p->nama_GuruKaryawan}}</td>
						<td><img src="{!! url('images/'.$p->image.'') !!}" style="width:200px; height: 200px;"></td>
						<td>{{$p->carosel}}</td>
						<td>{{$p->role}}</td>
						<td>{{$p->created_at}}</td>
						<td>{{$p->updated_at}}</td>
						<td><a href="{{ url('/t3g4l/adminministrator/tenaga/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>   
						<form action="{{ url('/t3g4l/adminministrator/tenaga/delete/'.$p->id.'') }}"  method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</tr></td>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('adminAddTenaga')}}" class="btn btn-primary">add Data</a>
</figure>
    @endauth
    @endsection
    