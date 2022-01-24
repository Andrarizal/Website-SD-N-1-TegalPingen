@extends('layout.user-master')
@section('content')
<section id="pengumuman_penting">
        <div class="container">
            <div class="section-title">
                <br>
                <h2>Pengumuman Penting</h2>
            </div>

            @foreach($pegpenting as $pp)
            @if($pp->penting=='yes')
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6 ">
                        <img class="section-item-thumbnail" src="{!!url('images/'.$pp->image.'')!!}" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>{{$pp->title}}</h3>
                        </div>
                        <div class="section-item-body">
                            <p>{{$pp->deskripsi}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach



        </div>
    </section>
@endsection