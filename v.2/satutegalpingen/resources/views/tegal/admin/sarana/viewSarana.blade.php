@extends('tegal.layout.admin_master_admin')
@section('content')
@auth
        <!-- <table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama Sarana & Prasarana</th>
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
						<td><img src="{!! url('images/'.$p->image.'') !!}" style="width:50%; height: 50%;"></td>
						<td>{{$p->deskripsi}}</td>
						<td>{{$p->created_at}}</td>
						<td>{{$p->updated_at}}</td>
						<td><a href="{{ url('/t3g4l/adminministrator/sarana/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>   
						<form action="{{ url('/t3g4l/adminministrator/sarana/delete/'.$p->id.'') }}"  method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</tr></td>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('admin.add-sarana')}}" class="btn btn-primary">add Data</a> -->

<h2><strong>Fasilitas Sekolah </strong></h2>
<figure class="wp-block-table is-style-stripes">
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <strong>id</strong>
                </td>
                <td>
                    <strong>Ruangan</strong>
                </td>
                <td>
                    <strong>Gambar</strong>
                </td>
                <td>
                    <strong>Deskripsi</strong>
                </td>
                <td>
                    <strong>Dibuat Saat</strong>
                </td>
                <td>
                    <strong>Diubah Saat</strong>
                </td>
                <td>
                    <strong>Aksi</strong>
                </td>
            </tr>
            @foreach ($pick as $p)
            <tr>
            	<td>
                    {{$p->id}}
                </td>
                <td>
                    {{$p->title}}
                </td>
                <td>
                    <img src="{!! url('images/'.$p->image.'') !!}" style="width:100%; height: 100%;">
                </td>
                <td>
                    {{$p->deskripsi}}
                </td>
                <td>
                    {{$p->created_at}}
                </td>
                <td>
                    {{$p->updated_at}}
                </td>
                <td>
                    	<a href="{{ url('/t3g4l/adminministrator/sarana/update/'.$p->id.'') }}" class="btn btn-secondary">Update</a>   
			
			<form action="{{ url('/t3g4l/adminministrator/sarana/delete/'.$p->id.'') }}"  method="post">
				@method('delete')
				@csrf
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <a href="{{route('admin.add-sarana')}}" class="btn btn-primary">add Data</a>
</figure>

    @endauth
    @endsection
    