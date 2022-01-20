@auth
<table>
	<thead>
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
</table>
@endauth