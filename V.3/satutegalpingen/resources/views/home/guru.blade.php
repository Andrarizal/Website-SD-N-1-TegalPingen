@extends('layout.user-master')
@section('content')
<section id="pendidik">
        <div class="container">
            <div class="section-title">
                <h2>Guru & Karyawan</h2>
            </div>
            <div class="section-body">
                <div id="slider-tools-1"></div>
                <div class="owl-carousel" id="tenaga-pendidik-slider">

                    @foreach($guru as $as )
                    <div class="section-item-slider">
                        <img class="foto-guru" src="{!!url('images/'.$as->image.'')!!}" alt="">
                        <div class="section-item-caption">
                            <h5>{{$as->nama_GuruKaryawan}}</h5>
                            <h6>{{$as->role}}</h6>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>
</div>
@endsection