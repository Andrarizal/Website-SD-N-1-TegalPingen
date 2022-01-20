@extends('tegal\layout\super_master_admin')
@section('content')
@auth
        <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama Mata Pelajaran</th>
					<th scope="col">Dibuat</th>
					<th scope="col">Terbarui</th>
					<th scope="col">AKSI</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pick as $p)
					<tr>
						<th scope="row">{{$p->id}}</th>
						<td>{{$p->mata_pelajaran}}</td>
						<td>{{$p->created_at}}</td>
						<td>{{$p->updated_at}}</td>
						<td><a href="{{ url('/t3g4l/superministrator/mat-pel/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>   
						<form action="{{ url('/t3g4l/superministrator/mat-pel/delete/'.$p->id.'') }}"  method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</tr></td>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('super.add-matpel')}}" class="btn btn-primary">add Data</a>
    @endauth
    @endsection
    