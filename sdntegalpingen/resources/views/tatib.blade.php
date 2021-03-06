<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SD N 1 TegalPingen | {{ $title }} </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/icon/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <section>
        <div id="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="top-contact">
                            <li><a href=""><i class="fas fa-phone"></i>(082)53246</a></li>
                            <li><a href=""><i class="fas fa-envelope"></i>satutegalpingen@gmail.com</a>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="sosmed">
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	 <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="brand">
                        <img src="assets/img/jbg.png" alt="">
                        <div class="brand-name">
                            <h1>SD N 1 TegalPingen</h1>
                            <h3>Unggul Dalam Prestasi, Terampil Dalam Berkarya, Santun Dalam Perilaku</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wrapper-searchbox">
                    <div class="searchbox">
                        <form method="get">
                            <div class="input-group">
                                <input class="input-group-append" type="text" name="cari" placeholder="   Cari sesuatu"
                                    aria-label="Tombol cari" aria-describedby="tombol-cari">
                                <div class="input-group-append">
                                    <button class="btn btn-utama-sb" id="my-addon">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</header>
     <!-- section menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="my-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ ($title === "Home") ? 'active' : ''  }} ">
                        <a class="nav-link" href="/home">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown {{ ($title === "Profil") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Profil</a>
                        <div class="dropdown-menu">
                            <a href="/profil" class="dropdown-item "id="test">Sejarah</a>
                            <a href="/visi" class="dropdown-item"id="test">Visi & Misi</a>
                            <a href="/guru" class="dropdown-item"id="test">Tenaga Pendidik</a>
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ ($title === "Sarana & Prasarana") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Sarana & Prasarana</a>
                        <div class="dropdown-menu">
                            <a href="/sarpras" class="dropdown-item"id="test">Sarana Infrastruktur</a>
                        </div>
                    </li>
                    <li class="nav-item {{ ($title === "Prestasi") ? 'active' : ''  }} ">
                        <a class="nav-link" href="#prestasi">Prestasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Berita</a>
                        <div class="dropdown-menu">
                            <a href="/" class="dropdown-item"id="test">Berita Sekolah</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ ($title === "Galeri") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Galeri</a>
                        <div class="dropdown-menu">
                            <a href="/galeri" class="dropdown-item"id="test">Galeri Foto</a>
                        </div>
                    </li>
                     <li class="nav-item dropdown {{ ($title === "Tata Tertib") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">About</a>
                        <div class="dropdown-menu">
                            <a href="/tatib" class="dropdown-item"id="test">Tata Tertib</a>
                            <a href="/pengumuman" class="dropdown-item"id="test">Pengumuman Penting</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="tataterib">
        <div class="container">
            <div class="section-title">
                <br>
                <h2>Tata Tertib Sekolah</h2>
            </div>
            <p>
                I. TATA TERTIB SEKOLAH <br>
                <br>
                1. Siswa datang 15 menit sebelum pelajaran dimulai.<br>
                2. Setelah tanda bel masuk berbunyi, siswa berbaris di depan kelas, kemudian masuk satu persatu dengan tertib dan teratur.<br>
                3. Sebelum dan sesudah pelajaran, siswa wajib berdoa dipimpin oleh ketua kelas atau bergiliran.<br>
                4. Waktu pelajaran berlangsung siswa wajib menjaga ketertiban kelas.<br>
                5. Waktu istirahat siswa wajib diluar kelas dan tidak boleh keluar dari halaman sekolah.<br>
                6. Siswa wajib berpakaian sopan dan berseragam dengan ketentuan sebagai berikut :<br>
                <ol type="a">
                    <li>Hari Senin dan Selasa : Seragam atas putih, bawah merah hati lengkap dengan atribut logo, lokasi, nama dan bersepatu kets ( warior ) warna hitam .</li>
                    <li>Hari Rabu dan Kamis : Seragam identitas sekolah krem.</li>
                    <li>Hari Jumat dan Sabtu : Seragam batik, sepatu hitam, kaos kaki hitam</li>
                    <li>Pada waktu upacara : Seragam atas putih, bawah merah hati, ikat pinggang hitam,sepatu kets (warior), bertopi identitas sekolah (seragam lengkap)</li>
                    <li>Pada waktu olahraga : Pakaian olah raga, bersepatu kets.</li>
                    <li>Siswa Kelas III s.d V : Wajib mengikuti kegiatan Pramuka.</li>
                </ol>
                7. Siswa wajib mengikuti Upacara Bendera setiap hari Senin / tanggal 17 / Hari Nasional yang dimulai pukul 06.30 WIB.<br>
                8. Siswa wajib melaksanakan senam massal setiap hari Jumat pukul 06.45 WIB dan berseragam olahraga.<br>
                9. Siswa yang tidak masuk sekolah harus memberi keterangan / Surat Ijin.<br>
                10. Siswa tidak masuk tiga hari berturut ??? turut harus memberi keterangan dengan jelas.<br>
                11. Siswa harus memiliki alat tulis sendiri.<br>
                12. Siswa wajib mengerjakan Pekerjaan Rumah ( PR ) di rumah.<br>
                13. Siswa wajib mengikuti kergiatan ekstrakurikuler dan berpakaian bebas, rapi, dan bersepatu.<br>
                14. Siswa wajib melaksanakan piket harian di sekolah.<br>
                15. Siswa tidak diperbolehkan membawa uang berlebihan.<br>
                16. Siswa tidak diperbolehkan membawa Handphone ( HP ).<br>
                17. Siswa dilarang membeli makanan diluar sekolah selama jam belajar di Sekolah.<br>
                18. Siswa wajib mentaati Tata Tertib Sekolah, bagi yang melanggar akan dikenakan sanksi dari sekolah.<br>
                <br>
                II. LARANGAN<br>
                <br>
                1. Siswa dilarang memakai topi di dalam kelas saat pelajaran berlangsung.<br>
                2. Makan di dalam kelas saat pelajaran berlangsung.<br>
                3. Menyontek pekerjaan milik teman.<br>
                4. Bermain di luar pekarangan sekolah.<br>
                5. Merokok, meminum-minuman keras, menggunakan ganja, narkotika.<br>
                6. Membawa senjata tajam.<br>
                7. Mencorat-coret tembok, dinding, meja , kursi dan perabot di lingkungan sekolah.<br>
                8. Selama Kegiatan Belajar Mengajar berlangsung tidak diperbolehkan membuat gaduh.<br>
                9. Berkelahi dan bertengkar di dalam maupun di luar sekolah.<br>
                10. Membawa petasan di sekolah.<br>
                <br>
                III. SANKSI<br>
                <br>
                Siswa yang melanggar tata tertib sekolah akan di beri sanksi :<br>
                a. Teguran lisan I, II dan III<br>
                b. Teguran tertulis I, II dan III<br>
                c. Tidak diperkenankan masuk sekolah dalam jangka waktu tertentu.<br>
                d. Dikembalikan pada orang tua.<br>
                <br>
            </p>
        </div>
        
    </section>

 <!---footer--->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-col">
                        <div class="brand">
                            <img src="assets/img/jbg.png" alt="">
                            <h1>SD N 1 TegalPingen</h1>
                        </div>
                        <p class="tentang">SD N 1 TegalPingen merupakan sekolah akreditasi B. Dengan alumni yang bisa melanjutkan sekolah menuju jenjang berikutnya. dengan dinahkodai Martinus Tri Raharjo mampu merebut prestasi yang luar biasa sehingga mampu menjadikan sekolah ini unggul, modern, islami.</p>
                        <ul class="sosmed">
                            <li><a href="www.facebook.com"><i class="fab fa-fw fa-facebook"></i></a></li>
                            <li><a href="www.twitter.com"><i class="fab fa-fw fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-col">
                        <h2>Kontak Kami</h2>
                        <p class="alamat">Jika ada pertanyaan lebih lanjut hubungi kontak dibawah ini:</p>
                        <ul class="kontak">
                            <li><i class="fas fa-phone"></i>087532725234</li>
                            <li><i class="fas fa-envelope"></i>087543526123</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-col">
                        <h2>Navigasi</h2>
                        <ul class="footer-nav">
                            <li><a href="/profil">Profil</a></li>
                            <li><a href="/visi">Visi & Misi</a></li>
                            <li><a href="/sarpras">Sumber Daya Manusia</a></li>
                            <li><a href="https://siap-ppdb.com/">Pendaftaran PPDB 2022</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container text-center">
                <h6>Hak Cipta dilindungi. @ 2021 <a href="">andradev.inc</a></h6>
            </div>
        </div>

    </footer>


    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>