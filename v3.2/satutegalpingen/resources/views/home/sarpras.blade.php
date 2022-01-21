@extends('layout.user-master')
@section('content')
<section id="sarpras">
        <br>
        <div class="container">
            <h2>Sarana dan Prasarana</h2>
            <div class="entry-content clearfix">
                <!-- <h2><strong>Fasilitas Sekolah </strong></h2>
                <p>Demi kepuasan dan ketenangan orang tua dalam menyekolahkan
                anaknya di SD N 1 TegalPingen, maka kami memberikan yang terbaik dengan
                melengkapi prasarana sekolah tersebut seperti:</p>
                <ul>
                    <li>Ruang belajar 19 kelas dan 19 rombel khusus kelas I s/d kelas VI ber-AC</li>
                    <li>Ruang perpustakaan</li>
                    <li>Ruang Lab Komputer</li>
                    <li>Ruang UKS</li>
                    <li>Ruang Musik/Kesenian</li>
                    <li>Ruang Sarana Prasarana</li>
                    <li>Ruang Terbuka Hijau</li>
                    <li>Musholla</li>
                    <li>Kantin</li>
                    <li>Taman Sekolah</li>
                    <li>Kebun Sekolah</li>
                    <li>Lapangan</li>
                    <li>Koperasi Sekolah</li>
                    <li>WC murid dan Guru</li>
                    <li>Aula serbaguna</li>
                </ul> -->
                <br>
                <h2><strong>Sarana Prasarana Sekolah</strong></h2>
                <p>SD N 1 TegalPingen memiliki 598 orang siswa
                dengan jumlah guru sebanyak 9 orang. Sedangkan kegiatan belajar mengajar
                dilaksanakan pada hari Senin sampai hari Kamis pukul 07.00-15.00 WIB,
                hari Jumat dari jam 07.00 – 11.00 Wita.</p>

                <p>Untuk memberikan gambaran yang lebih jelas mengenai sarana
                dan prasarana, guru atau pegawai dan siswa yang ada di SD N 1 TegalPingen, 
                maka sekolah sajikan pada tabel sebagai berikut ini :</p>
                
                <p><strong>Tabel: </strong>Sarana dan Prasarana SD N 1 TegalPingen</p>
                
                <figure class="wp-block-table is-style-stripes">
                    @foreach($sarana as $s)
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Nama Ruangan</strong>
                                </td>
                                <td>
                                    <strong>Deskripsi ruangan</strong>
                                </td>
                                <td>
                                    <strong>Gambar</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{$s->title}}
                                </td>
                                <td>
                                    {{$s->Deskripsi}}
                                </td>
                                <td>
                                    <img src="{!! url('images/'.$s->image.'') !!}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </figure>

                <p><strong>Sumber Data</strong> : SD N 1 TegalPingen</p>
            </div>
        </div>
</section>
        @endsection