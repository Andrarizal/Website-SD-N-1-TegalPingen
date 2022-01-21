<nav class="navbar navbar-expand-lg navbar-dark bg-biru">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="my-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ ($title === "Home") ? 'active' : ''  }} ">
                        <a class="nav-link" href="{{route('home.index')}}">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown {{ ($title === "Profil") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Profil</a>
                        <div class="dropdown-menu">
                            <a href="{{route('profil.index')}}" class="dropdown-item "id="test">Sejarah</a>
                            <a href="{{route('vimi.index')}}" class="dropdown-item"id="test">Visi & Misi</a>
							<a href="{{route('guru.index')}}" class="dropdown-item"id="test">Tenaga Pendidik</a>
                            
                        </div>
                    </li>
					<li class="nav-item dropdown {{ ($title === "Sarana & Prasarana") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Sarana & Prasarana</a>
                        <div class="dropdown-menu">
                            <a href="{{route('sarpras.index')}}" class="dropdown-item"id="test">Sarana Infrastruktur</a>
                        </div>
                    </li>
                    <li class="nav-item {{ ($title === "Prestasi") ? 'active' : ''  }} ">
                        <a class="nav-link" href="#prestasi">Prestasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Berita</a>
                        <div class="dropdown-menu">
                            <a href="#berita" class="dropdown-item"id="test">Berita Sekolah</a>
                        </div>
                    </li>
					<li class="nav-item dropdown {{ ($title === "Galeri") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Galeri</a>
                        <div class="dropdown-menu">
                            <a href="{{route('galeri.index')}}" class="dropdown-item"id="test">Galeri Foto</a>
                        </div>
                    </li>
					 <li class="nav-item dropdown {{ ($title === "About") ? 'active' : ''  }} ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">About</a>
						<div class="dropdown-menu">
							<a href="{{route('tatib.index')}}" class="dropdown-item"id="test">Tata Tertib</a>
							<a href="{{route('pengumuman.index')}}" class="dropdown-item"id="test">Pengumuman Penting</a>
						</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>