@extends('layout.user-master')
@section('content')
<section id="galeri">
        <div class="container">
            <div class="section-title">
                <h2>Dokumentasi Kegiatan</h2>
            </div>
            <div class="section-body">
                <div id="slider-tools-3"></div>
                <div class="owl-carousel" id="galeri-slider">
                    <div class="section-item-slider">
                        <img class="foto-guru" src="assets/img/WhatsApp Image 2021-11-26 at 1.38.35 AM.jpeg" alt="">
                        @foreach($galeri as $g)
                        <div class="section-item-caption">
                            <a href="">
                                <h5>{{$g->title}}</h5>
                            </a>
                            <a href="">
                                <h6>{{$g->Deskripsi}}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </a>
            </div>
        </div>
        <div class="section-item-slider">
            <div class="video-wrapper video-galeri">
                <iframe src="https://www.youtube.com/embed/vK4hL967byc" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="section-item-caption">
                <a href="">
                    <h5>Reuni Akbar Alumni</h5>
                </a>
                <a href="">
                    <h6>SD N 1 TegalPingen</h6>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="btn-selengkapnya">
    <a href="www.youtube.com" class="btn btn-more">Lihat Galery Lainnya</a>
</div>
@endsection