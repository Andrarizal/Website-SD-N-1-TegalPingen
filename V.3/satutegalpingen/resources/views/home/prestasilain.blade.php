@extends('layout.user-master')
@section('content')
<section id="prestasi">
        <div class="container">
            <div class="section-title">
            <br>
                <h2>Prestasi lainnya</h2>
            </div>

            @foreach($prestasisw as $sw )
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6 ">
                        <img class="section-item-thumbnail" src="{!!url('images/'.$sw->image.'')!!}" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>{{$sw->title}}</h3>
                        </div>
                        <div class="section-item-body">
                            <p>{{$sw->deskripsi}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                   
        </div>
    </section>
        <!--galeri-->
    @endsection