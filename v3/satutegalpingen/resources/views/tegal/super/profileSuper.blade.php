@extends('tegal\layout\super_master_admin')
@section('content')
@auth
<table>
<!-- 	<thead>
		<th>Username</th>
		<th>Name</th>
		<th>Email</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<tr>
			<td><h5>{{Auth::user()->username;}}</h5></td>
			<td><h5>{{Auth::user()->name;}}</h5></td>
			<td><h5>{{Auth::user()->email;}}</h5></td>
			<td><a href="{{route('super.profile-update')}}">Update</a></td>
		</tr>
	</tbody>
</table> -->

<figure class="wp-block-table is-style-stripes">
        <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Username</th>
					<th scope="col">Nama</th>
					<th scope="col">Email</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<th scope="row">{{Auth::user()->id;}}</th>
						<td>{{Auth::user()->username;}}</td>
						<td>{{Auth::user()->name;}}</td>
						<td>{{Auth::user()->email;}}</td>
						<td>
							<a href="{{route('super.profile-update')}}" class="btn btn-secondary">Update</a>   
						</td>
					</tr>
			</tbody>
		</table>
	</figure>
@endauth
@endsection