

<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('')}}assets/admin/img/profile3.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>

									<span class="user-level"></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="{{route('super.profile-show')}}">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="{{route('super.profile-update')}}">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<!-- <li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
                    {{-- MENU UTAMA --}}
					<ul class="nav nav-primary">
                        {{-- MENU --}}
                        <li class="nav-item ">
							<a href="{{route('super.home')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<!-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Pendaftaran</h4>
						</li>
						<li class="nav-item ">
							<a href="">
								<i class="fas fa-pen-square"></i>
								<p>Pendaftaran Siswa</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="">
								<i class="fas fa-pen-square"></i>
								<p>Pengaturan Pendaftaran</p>
							</a>
						</li> -->

						<!-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Master Data</h4>
						</li>

						<li class="nav-item ">
							<a href="">
								<i class="fas fa-pen-square"></i>
								<p>Siswa</p>
							</a>
						</li>

						<li class="nav-item ">
							<a href="">
								<i class="fas fa-pen-square"></i>
								<p>Kelas</p>
							</a>
						</li>

						<li class="nav-item ">
							<a href="/admin/list">
								<i class="fas fa-pen-square"></i>
								<p>Admin</p>
							</a>
						</li> -->

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Content Management</h4>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#contentmanage">
								<i class="fas fa-table"></i>
								<p>Manage Admin</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contentmanage">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewAdmin')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<li class="">
										<a href="{{route('aViewAdmin')}}">
											<span class="sub-item">TAMBAH</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#contentberita">
								<i class="fas fa-table"></i>
								<p>Berita</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contentberita">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewBerita')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<li class="">
										<a href="{{route('super.add-berita')}}">
											<span class="sub-item">TAMBAH</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#contentgaleri">
								<i class="fas fa-table"></i>
								<p>Galeri</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contentgaleri">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewGaleri')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<li class="">
										<a href="{{route('super.add-galeri')}}">
											<span class="sub-item">TAMBAH</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#mapel">
								<i class="fas fa-table"></i>
								<p>Mata Pelajaran</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="mapel">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewMatpel')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<li class="">
										<a href="{{route('super.add-matpel')}}">
											<span class="sub-item">TAMBAH</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#prestasi">
								<i class="fas fa-table"></i>
								<p>Prestasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="prestasi">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewPrestasi')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<li class="">
										<a href="{{route('superAddPrestasi')}}">
											<span class="sub-item">TAMBAH</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#sarana">
								<i class="fas fa-table"></i>
								<p>Sarana & Prasarana</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sarana">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewSarana')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<li class="">
										<a href="{{route('super.add-sarana')}}">
											<span class="sub-item">TAMBAH</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#tenaga">
								<i class="fas fa-table"></i>
								<p>Tenaga Pendidik</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tenaga">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewTenaga')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<li class="">
										<a href="{{route('superAddTenaga')}}">
											<span class="sub-item">TAMBAH</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#vimi">
								<i class="fas fa-table"></i>
								<p>Visi & Misi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="vimi">
								<ul class="nav nav-collapse">
									<li class="">
										<a href="{{route('aViewVimi')}}">
											<span class="sub-item">LIHAT</span>
										</a>
									</li>
									<!-- <li class="">
										<a href="{{route('superAddVimi')}}">
											<span class="sub-item">(WARNING) TAMBAH</span>
										</a>
									</li> -->
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->