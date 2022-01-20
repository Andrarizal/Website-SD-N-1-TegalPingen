@auth
        <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama</th>
					<th scope="col">Username</th>
					<th scope="col">Email</th>
					<th scope="col">Dibuat Saat</th>
					<th scope="col">Terbarui Saat</th>
					<th scope="col">AKSI</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pick as $p)
				@if ($p->is_admin == 'yes')
					<tr>
						<th scope="row">{{$p->id}}</th>
						<td>{{$p->name}}</td>
						<td>{{$p->username}}</td>
						<td>{{$p->email}}</td>
						<td>{{$p->created_at}}</td>
						<td>{{$p->updated_at}}</td>
						<td><a href="{{ url('/t3g4l/superministrator/manage-admin/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>  

						<a href="{{ url('/t3g4l/superministrator/manage-admin/update-password/'.$p->id.'') }}" class="btn btn-secondary">Update Password</a>   

						<a href="{{ url('/t3g4l/superministrator/manage-admin/update-image/'.$p->id.'') }}" class="btn btn-secondary">Update Profile Image</a>   

						<form action="{{ url('/t3g4l/superministrator/manage-admin/delete/'.$p->id.'') }}"  method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</tr></td>
				@endif
				@endforeach
			</tbody>
		</table>
		<a href="{{route('super.add-berita')}}" class="btn btn-primary">add Data</a>
    @endauth
    