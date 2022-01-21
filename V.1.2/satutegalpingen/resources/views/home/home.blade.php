@extends('layout.user-master')
@section('content')
<section id="hero-area">
        <div id="slider-hero-nav"></div>
        <div class="owl-carousel" id="slider-hero">
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="assets/img/WhatsApp Image 2022-01-12 at 6.47.10 PM.jpeg" alt="">
                </div>
                <div class="slider-item-content">
                    <h2>Penerimaan peserta didik baru TA 2022/2023 Telah Dibuka!</h2>
                    <p>Silakan anda bisa mengakses pada website <a href="https://siap-ppdb.com/" class="">ppdb.sdn1tegalpingen.sch.id</a> untuk
                        mendapatkan semua terkait
                        informasi pendaftaran PPDB tahun ajaran 2022/2023 SD N 1 TegalPingen.</p>
                    <a href="https://siap-ppdb.com/">  <button class="btn btn-utama">Daftar PPDB <br> 
                    </button> </a>
                </div>
            </div>
            <!---slider item-->
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="assets/img/masker-sekolah.jpg" alt="">
                </div>
                <div class="slider-item-content"> 
                    <h2>E-Learning SD N 1 TegalPingen</h2>
                    <p>Merupakan platfom E-learning yang dikhusukan untuk memfasilitasi proses pembelajaran secara
                        online untuk mempermudah siswa dan siswi SD N 1 TegalPingen dalam proses pembelajaran.</p>
                    <a href="https://elearningsekolahdasar.com/">  <button class="btn btn-utama">Masuk</button> <br> 
                    </button> </a>
                </div>
            </div>
            <!---slider item-->
        </div>
    </section>
    <!--slider hero-->
    <<section id="sambutan">
        <div class="container">
            <h2>SD N 1 TegalPingen</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="foto-wrapper">
                        <!-- <iframe src="assets/img/profil_sekolah.png" 
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                            <img src="assets/img/profil_sekolah.png" style="display: block; margin: auto; width: 100%;">
                    </div>
                </div>
                <div class="col-md-6 pl-4 pt-2">
                    <h3>Profil Sekolah</h3>
                    <p> Martinus Tri Raharjo Merupakan kepala sekolah SD Negeri 1 TegalPingen. Menjabat selama 3 tahun dengan visi misi sekolah yang mampu membuat sekolah terlihat lebih unggul, modern, dan islami sehingga kami menjadi orang orang yang berguna bagi agama, nusa, bangsa, dan negara.</p> 
                    <a href="profil.html" class="btn btn-utama-sb">Baca Selengkapnya</a>
               </div>
            </div>
        </div>
    </section>
    <!--sambutan-->
    
     <!--prestasi-->
<section id="prestasi">
        <div class="container">
            <div class="section-title">
                <h2>Prestasi Terbaru</h2>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6 ">
                        <img class="section-item-thumbnail" src="assets/img/Medali perak dalam olimpiade nasional matematika 2019.jpeg" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>Medali perak dalam olimpiade nasional matematika 2019</h3>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i>6 januari 2019</span>
                                <span><i class="fas fa-map-marked-alt"></i>Purbalingga, SD N 1 TegalPingen</span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>Juara  olimpiade Matematika tingkat nasional .</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6 ">
                        <img class="section-item-thumbnail" src="assets/img/Juara lomba cerdas cermat.jpeg" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>Juara lomba cerdas cermat  </h3>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i>2 Juli 2018</span>
                                <span><i class="fas fa-map-marked-alt"></i>Purbalingga,SD N 1 TegalPingen </span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>lomba cerdas cermat tingkat Kabupaten Purbalingga</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6 ">
                        <img class="section-item-thumbnail" src="assets/img/lOMBA BERCERITA TINGKAT PROVINSI JAWA TENGAH.jpeg" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>lOMBA BERCERITA TINGKAT PROVINSI JAWA TENGAH</h3>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i> 17 agustus 2019</span>
                                <span><i class="fas fa-map-marked-alt"></i>Purbalingga, SD N 1 TegalPingen</span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>JUARA lOMBA BERCERITA TINGKAT PROVINSI JAWA TENGAH </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-selengkapnya">
                <a href="{{route('prestasi.index')}}" class="btn btn-more">Lihat prestasi lainnya</a>
            </div>
        </div>
    </section>
    <!--prestasi-->
    
    <!--pendidik-->
    <section id="pendidik">
        <div class="container">
            <div class="section-title">
                <h2>Tenaga Pendidik</h2>
            </div>
            <div class="section-body">
                <div id="slider-tools-1"></div>
                <div class="owl-carousel" id="tenaga-pendidik-slider">
                    <div class="section-item-slider">
                        <img class="foto-guru" src="assets/img/adam guru.png" alt="">
                        <div class="section-item-caption">
                            <h5>Hesti Rohmawati, S.Pd.SD</h5>
                            <h6>Guru Kelas 1</h6>
                        </div>
                    </div>
                    <div class="section-item-slider">
                        <img class="foto-guru" src="assets/img/foto-guru-2.jpg" alt="">
                        <div class="section-item-caption">
                            <h5>Sarwanti, S.Pd.SD</h5>
                            <h6>Guru Kelas 2</h6>
                        </div>
                    </div>
                    <div class="section-item-slider">
                        <img class="foto-guru" src="assets/img/foto-guru-3.jpg" alt="">
                        <div class="section-item-caption">
                            <h5>Eka Hastuti, S.Pd.SD</h5>
                            <h6>Guru Kelas 3</h6>
                        </div>
                    </div>
                    <div class="section-item-slider">
                        <img class="foto-guru" src="assets/img/foto-guru-1.jpg" alt="">
                        <div class="section-item-caption">
                            <h5>Nuraningsih, S.Pd.SD</h5>
                            <h6>Guru Kelas 4</h6>
                        </div>
                    </div>
                    <div class="section-item-slider">
                        <img class="foto-guru" src="assets/img/foto-guru-1.jpg" alt="">
                        <div class="section-item-caption">
                            <h5>Nur Dwi Lestari,S.Pd</h5>
                            <h6>Guru Kelas 5</h6>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="btn-selengkapnya">
                <a href="/guru" class="btn btn-more">Lihat semua Guru</a>
            </div>
        </div>
    </section>
    <!--pendidik-->
    
        <!--berita-->
    <section id="berita">
        <div class="container">
            <div class="section-title">
                <h2>Berita Terbaru</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-thumbnail">
                            <img src="WhatsApp Image 2022-01-12 at 5.30.12 PM.jpeg" alt="">
                            <div class="tanggal">
                                <span class="tgl">17</span>
                                <span class="tgl-2">Agustus 2021</span>
                            </div>
                        </div>
                        <div class="section-content">
                            <a href="">
                                <h3> Kegiatan Vaksin Covid-19.</h3>
                            </a>
                            <p>Kegiatan Vaksin Covid-19 dilakukan sebagai upaya pencegahan dari Virus Covid-19 <a href="" class="more">[..]</a></p>
                        </div>
                        <div class="section-meta">
                            <a href="">Kegiatan</a>
                            <a href=""><i class="fas fa-user"></i>Admin</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-thumbnail">
                            <img src="img/DAI.jpeg" alt="">
                            <div class="tanggal">
                                <span class="tgl">19</span>
                                <span class="tgl-2">Oktober 2021</span>
                            </div>
                        </div>
                        <div class="section-content">
                            <a href="">
                                <h3> Mengikuti Lomba baca Al-Quran</h3>
                            </a>
                            <p>Juara 3 lomba baca Al-Quran <a href="" class="more">[..]</a></p>
                        </div>
                        <div class="section-meta">
                            <a href="">Kegiatan</a>
                            <a href=""><i class="fas fa-user"></i>Admin</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-thumbnail">
                            <img src="img/kartini.jpeg" alt="">
                            <div class="tanggal">
                                <span class="tgl">21</span>
                                <span class="tgl-2">April 2021</span>
                            </div>
                        </div>
                        <div class="section-content">
                            <a href="">
                                <h3> Memperingati Hari Kartini</h3>
                            </a>
                            <p> <a href="" class="more">[..]</a></p>
                        </div>
                        <div class="section-meta">
                            <a href="">Kegiatan</a>
                            <a href=""><i class="fas fa-user"></i>Admin</a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-thumbnail">
                            <img src="img/ppdb.jpg" alt="">
                            <div class="tanggal">
                                <span class="tgl">10</span>
                                <span class="tgl-2">Juni 2021</span>
                            </div>
                        </div>
                        <div class="section-content">
                            <a href="">
                                <h3> PPDB</h3>
                            </a>
                            <p>Penerimaan Peserta Didik Baru<a href="" class="more">[..]</a></p>
                        </div>
                        <div class="section-meta">
                            <a href="">Kegiatan</a>
                            <a href=""><i class="fas fa-user"></i>Admin</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-thumbnail">
                            <img src="img/hari guru.jpeg" alt="">
                            <div class="tanggal">
                                <span class="tgl">25</span>
                                <span class="tgl-2">November 2021</span>
                            </div>
                        </div>
                        <div class="section-content">
                            <a href="">
                                <h3> Hari Guru</h3>
                            </a>
                            <p>Memperingati Hari Guru Nasional <a href="" class="more">[..]</a></p>
                        </div>
                        <div class="section-meta">
                            <a href="">Kegiatan</a>
                            <a href=""><i class="fas fa-user"></i>Admin</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-thumbnail">
                            <img src="img/prokes.jpeg" alt="">
                            <div class="tanggal">
                                <span class="tgl">22</span>
                                <span class="tgl-2">November 2021</span>
                            </div>
                        </div>
                        <div class="section-content">
                            <a href="">
                                <h3> Menerapkan Protokol Kesehatan</h3>
                            </a>
                            <p><a href="" class="more">[..]</a></p>
                        </div>
                        <div class="section-meta">
                            <a href="">Kegiatan</a>
                            <a href=""><i class="fas fa-user"></i>Admin</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
  <!---berita--->
@endsection