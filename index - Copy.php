<?php 
	include 'config.php';
	$get_setting =  http_request($api_link.'api/get-setting');
	$result_get_setting = json_decode($get_setting, true);

	$get_gelombang =  http_request($api_link.'api/cek-gelombang');
	$result_get_gelombang = json_decode($get_gelombang, true);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<!-- /.website title -->
		<title>Universitas Sangga Buana YPKP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="shortcut icon" href="assets/images/header/logo.png" type="image/x-icon">
		<!-- CSS Files -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
		<link href="assets/css/animate.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.theme.css" rel="stylesheet">
		<link href="assets/css/owl.carousel.css" rel="stylesheet">

		<link href="assets/css/styles.css" rel="stylesheet" media="screen">    

		<!-- Font Awesome -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="assets/css/ypkp.css?load=99">

		<?php 
			echo $result_get_setting['data']['facebook_pixel'];
		?>
	</head>

	<body data-spy="scroll" data-target="#navbar-scroll" style="background:#000;font-family: nexa;">

		<div id="top"></div>

		<!-- NAVIGATION -->
		<div id="menu">
			<nav class="navbar-wrapper navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-themers">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand site-name" href="#top"><img style="width: 100px; height: 100px;margin-top: -30px;" src="assets/images/header/logo.png" alt="logo"></a>
					</div>

					<div id="navbar-scroll" class="collapse navbar-collapse navbar-themers navbar-right">
						<ul class="nav navbar-nav">
							<li><a style="font-family: nexa;" href="#tentang_kami">Tentang Kami</a></li>
							<li><a href="#jurusan">Jurusan</a></li>
							<li><a href="#perkuliahan">Perkuliahan</a></li>
							<li><a href="#keunggulan">Keunggulan</a></li>
							<li><a href="#biaya">Biaya</a></li>
							<li><a href="#biaya" class="btn-primary" style="margin-top: -1px;padding-top: 12px;">Hubungi Kami</a></li>
								<!--
								<li><a href="https://api.whatsapp.com/send?phone=6282128211958&text=Halo%20Tim%20Pendaftaran%20Online%20Pascasarjana%20Universitas%20Sangga%20Buana%20!" target="_blank" class="btn-primary" style="margin-top: -1px;padding-top: 12px;">Hubungi Kami</a></li>
								-->
								<!--
								<li><a href="https://api.whatsapp.com/send?phone=6282128211958&text=Halo%20Tim%20Pendaftaran%20Online%20Pascasarjana%20Universitas%20Sangga%20Buana%20!" target="_blank" class="btn-primary" style="margin-top: -1px;padding-top: 12px;">Daftar Sekarang</a></li>-->
							<!--
							<li><a href="#download">Download</a></li>
							<li><a href="#juy">juy</a></li>-->
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<!-- /.parallax full screen background image -->
		<div class="fullscreen landing banner bg-carousel" style="/*background-image:url('images/bg.jpg');">
			<div class="overlay">
				<div class="container" style="width: 100%;">
					<div class="col-md-6 padding-carousel">

						<!-- /.main title -->
							<!--<h1 class="wow fadeInLeft">
								The Right Way to Reach The Future
								
							</h1>-->
							<img style="margin-top: -20px;" src="assets/images/carousel/img_2.png" alt="phone" class="header-phone img-responsive wow fadeInLeft carousel-pc">
							<img style="margin-top: -20px; width: 100%;" src="assets/images/carousel/teteh-mobile.png" alt="phone" class="header-phone img-responsive wow fadeInLeft carousel-mobile">
							<br>
							<!-- /.header paragraph -->
							<div class="landing-text wow fadeInLeft text-carousel" style="text-align:justify;">
								<p>Universitas Sangga Buana YPKP menyelenggarakan pendidikan jenjang pascasarjana mencakup program magister manajemen, magister teknik sipil, dan magister akuntansi. Mari raih masa depan bersama kami....!!!</p>
							</div>				  

							<!-- /.header button -->
							<div class="head-btn wow fadeInLeft">
								<a href="#biaya" class="btn-primary">
									<span> Daftar Sekarang</span>
								</a>
								<!--
								<a href="https://forms.gle/EaFbYW2hWaNwVLmN9" target="_blank"class="btn-primary">
									<span> Daftar Sekarang</span>
								</a>
								-->

								<!--
								<a href="#" class="btn-primary play-market">
								<i class="fa fa-android"></i> <span> Google Play</span>
							</a>-->
						</div>
					</div> 
					<!-- /.phone image -->
					<div class="col-md-6 carousel-pc">
						<img style="margin-top: -10px; width:100%" src="assets/images/carousel/siteteh.png" alt="phone" class="header-phone img-responsive wow fadeInRight">
						<img src="assets/images/carousel/tr.png" alt="phone" class="header-phone img-responsive wow fadeInRight text-r">
					</div>
					
				</div> 
			</div> 
		</div>

		<!-- /.tentang_kami section -->
		<div id="tentang_kami" class="padding-page bg">
			<img width="60%" src="assets/images/tentang/img1.png" alt="image" class="img-responsive">
			<div class="container">
				<div class="row">
			
					<!-- /.feature image -->
					<div class="col-md-6 feature-2-pic wow fadeInLeft">
						<h2 class="title-page tentang_kami1">Tentang Kami</h2>
						<img style="margin-top:-50px" src="assets/images/tentang/bactentang.png" alt="image" class="img-responsive img-tentang1">
						<img style="margin-top:-20px" src="assets/images/tentang/img2.png" alt="image" class="img-responsive img-tentang2">
					</div>	
					
					<!-- /.feature content -->
					<div class="col-md-6 wow fadeInRight" style="padding-top:110px;">
						<h2 style="margin-left: -190px;"  class="title-page tentang_kami2">Tentang Kami</h2>
						<h2  class="text-pt-tentang poin-tentang"><img class="img-poin-tentang" src="assets/images/tentang/poin.png" alt="image"> Universitas Sangga Buana</h2>
						<p class="sub-point-tentang">Pengalaman Universitas Sangga Buana YPKP mengelola pendidikan lebih dari 44 tahun, Pendirian USB YPKP bertujuan mencerdaskan kehidupan bangsa dan menunjang nilai-nilai luhur bangsa dalam mengelola program pendidikan dari Diploma, Sarjana dan Pascasarjana dalam upaya mencapai masyarakat adil, makmur dan sejahtera yang diridhoi oleh Allah SWT. USB YPKP menyelenggarakan program S2 yang berkualitas dengan masa studi yang singkat (18 Bulan) dan biaya yang relatif terjangkau serta dapat diangsur secara terstruktur. Dreams Come True With US!, Pasca sarjana Bisa ! </p>
						<br>
						<h2 class="poin-tentang"><img class="img-poin-tentang" src="assets/images/tentang/poin.png" alt="image"> Visi</h2>
						<p class="sub-point-tentang">Menjadikan Program Pascasarjana Universitas Sangga Buana YPKP sebagai Program Pascasarjana yang unggul dalam menghasilkan lulusan Magister Manajemen, Magister Akuntansi dan Magister Teknik Sipil di Jawa Barat, pada tahun 2023.</p>
						<br>
						<h2 class="poin-tentang"> <img class="img-poin-tentang" src="assets/images/tentang/poin.png" alt="image"> Misi</h2>
						<ol class="sub-point-tentang">
							<li>Menyelenggarakan pendidikan berbasiskan keunggulan program studi.</li>
							<li>Menyelenggarakan penelitian dan pengembangan ilmu secara berkesinambungan menuju penelitian yang unggul.</li>
							<li>Menyelenggarakan pengabdian kepada masyarakat untuk meningkatkan kualitas kehidupan masyarakat.</li>
							<li>Membangun scientific atmosphere berbasiskan perkembangan ilmu pengetahuan, teknologi, dan seni.</li>
							<li>Melaksanankan pelayanan akademik secara profesional dan paripurna.</li>
						</ol>
					</div>
			

				</div>			  

			</div>
		</div>

		<div id="jurusan" class="padding-page bg">
			<div class="container">
				<div class="text-left title-jurusan" style="">

					<!-- /.pricing title -->
					<h2 class="wow fadeInLeft animated title-page" style="visibility: visible; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">Jurusan</h2>
					<!--<div class="title-line wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;"></div>-->
				</div>
				<div class="row package-option area-jurusan">
					<!-- /.package 1 -->
					<div class="col-lg-4 col-md-4">
						<div class="wow fadeInUp animated item-jurusan">
							<img style="width:130px;margin-top: -80px;" src="assets/images/jurusan/logo1.png">
							<h3 class="title-jurusan">Magister Manajemen</h3>
							<p style="color:gray;">Menjadikan program studi Manajemen yang unggul, Berbudaya, dan Profesional di Bidang Manajemen di Jawa Barat pada tahun 2023</p>
							<a href="#show_jurusan1" id="jurusan1" onclick="load_jurusan('1','2','3');" class="btn-jurusan">Lebih Lengkap&nbsp;&nbsp; <i class="fa fa-chevron-down icon-btn-jurusan"></i></a>
							<button id="jurusan-1" onclick="close_load_jurusan('1','2','3');" class="btn-jurusan-klik">Lebih Lengkap&nbsp;&nbsp; <i class="fa fa-chevron-up icon-btn-jurusan"></i></button>
						</div>
						<div id="show_jurusan_mobile1"></div>
					</div>
						
					<div class="col-lg-4 col-md-4">
						<div class="wow fadeInUp animated item-jurusan">
							<img style="width:130px;margin-top: -80px;" src="assets/images/jurusan/logo2.png">
							<h3 class="title-jurusan">Magister Teknik Sipil</h3>
							<p style="color:gray;">Menjadikan program studi Magister Teknik Sipil yang memiliki keunggulan dan semangat kontribusi yang tinggi dalam khasanah ilmu dan teknologi, pembangunan untuk kesejahteraan masyarakat serta kelestarian Lingkungan.</p>
							<a href="#show_jurusan2" id="jurusan2" onclick="load_jurusan('2','1','3');" class="btn-jurusan">Lebih Lengkap&nbsp;&nbsp; <i class="fa fa-chevron-down icon-btn-jurusan"></i></a>
							<button id="jurusan-2" onclick="close_load_jurusan('2','1','3');" class="btn-jurusan-klik">Lebih Lengkap&nbsp;&nbsp; <i class="fa fa-chevron-up icon-btn-jurusan"></i></a>
						</div>
						<div id="show_jurusan_mobile2"></div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="wow fadeInUp animated item-jurusan">
							<img style="width:130px;margin-top: -80px;" src="assets/images/jurusan/logo3.png">
							<h3 class="title-jurusan">Magister Akuntansi</h3>
							<p style="color:gray;">Menjadikan Program studi yang berdaya saing tinggi dan unggul dalam bidang pengembangan ilmu akuntansi di Jawa Barat pada tahun 2023</p>
							<a href="#show_jurusan3" id="jurusan3" onclick="load_jurusan('3','1','2');" class="btn-jurusan">Lebih Lengkap&nbsp;&nbsp; <i class="fa fa-chevron-down icon-btn-jurusan"></i></a>
							<button id="jurusan-3" onclick="close_load_jurusan('3','1','2');" class="btn-jurusan-klik">Lebih Lengkap&nbsp;&nbsp; <i class="fa fa-chevron-up icon-btn-jurusan"></i></button>
						</div>
						<div id="show_jurusan_mobile3"></div>
					</div>	

					<div id="show_jurusan1" class="col-md-12 show-item-jurusan" style="width: 100%; margin-top:0px;display: none;">
						<div class="text-left">
							<a href="#jurusan" onclick="close_load_jurusan('1','2','3');" class="btn-close-jurusan"><img src="assets/images/jurusan/close_jurusan.png"></a>
							<h2 class="title-show-jurusan">Magister Manajemen</h2>
							<button class="label-red-jurusan"><img style="margin-top:-13px;margin-left: -10px;" src="assets/images/jurusan/banpt.png"/><span style="margin-top:-20px;">Terakreditasi BAN PT</span>  <strong>"SANGAT BAIK"</strong></button>
						</div><br>
						<h2 class="visi-jurusan">Visi</h2>
						<p style="color:#FFF;">Menjadikan program studi Magister Manajemen yang Unggul, Berbudaya, dan Profesional di Bidang Manajemen di Jawa Barat pada tahun 2020.</p><br>
						<div class="col-md-4" style="margin-top:10px;margin-bottom: 19px;">
							<button class="btn-primary label-tabel-jurusan">Komptensi</button>
							<div style="border:1px solid #FEFFFF ;margin-top: -10px;min-height: 300px;"><br>
								<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Pendidikan</td>
									</tr>
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Keuangan</td>
									</tr>
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Pemasaran</td>
									</tr>
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen MSDM</td>
									</tr>
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Rumah Sakit</td>
									</tr>
								</table>
								
							</div>
						</div>
						<div class="col-md-8" style="margin-top:10px;margin-bottom: 19px;">
							<button class="btn-primary label-tabel-jurusan">Kerjasama</button>
							<div style="border:1px solid #FEFFFF ;margin-top: -10px; min-height: 300px;">
								<br>
								<div class="col-md-12">
									<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Asosiasi Manajemen Indonesia</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Help University Kuala Lumpur Malaysia</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Universitas Utara Malaysia (UUM)</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Universiti Utara Malaysia</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Asosiasi Manajemen (AMA) Bandung</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>ISEI</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>KADIN</td>
										</tr>
									</table>
									
								</div>
								<br>
							</div>
						</div>
					</div>
					<div id="show_jurusan2" class="col-md-12 show-item-jurusan" style="width: 100%; margin-top:0px;display: none;">
						<div class="text-left">
							<a href="#jurusan" onclick="close_load_jurusan('2','1','3');" class="btn-close-jurusan"><img src="assets/images/jurusan/close_jurusan.png"></a>
							<h2 class="title-show-jurusan">Magister Teknik Sipil</h2>
							<button class="label-red-jurusan"><img style="margin-top:-13px;margin-left: -10px;" src="assets/images/jurusan/banpt.png"/><span style="margin-top:-20px;">Terakreditasi BAN PT</span>  <strong>"SANGAT BAIK"</strong></button>
						</div><br>
						<h2 class="visi-jurusan">Visi</h2>
						<p style="color:#FFF;">Menjadikan Program studi Magister Teknik Sipil yang memiliki keunggulan dan semangat
						kontribusi yang tinggi dalam khasanah ilmu dan teknologi, pembangunan untuk kesejahteraan masyarakat serta kelestarian lingkungan</p><br>
						<div class="col-md-4" style="margin-top:10px;margin-bottom: 19px;">
							<button class="btn-primary label-tabel-jurusan">Komptensi</button>
							<div style="border:1px solid #FEFFFF ;margin-top: -10px;min-height: 300px;"><br>
								
								<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Infrastruktur Transportasi</td>
									</tr>
									<tr>
										<td><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Infrastruktur High Rise Building</td>
									</tr>
									<tr>
										<td><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Infrastruktur Sumber< Daya Air</td>
									</tr>
									<tr>
										<td><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Ilmu Kebumian (Geoteknik)</td>
									</tr>
									<tr>
										<td><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Manajemen Rekayasa Kontruksi</td>
									</tr>
								</table>

							</div>
						</div>
						<div class="col-md-8" style="margin-top:10px;margin-bottom: 19px;">
							<button class="btn-primary label-tabel-jurusan">Kerjasama</button>
							<div style="border:1px solid #FEFFFF ;margin-top: -10px; min-height: 300px;">
								<br>
								<div class="col-md-6">
									<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>LIP</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Pusair</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Puskim</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Pusjatan</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Dinas Bina Marga Jabar</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Dinas Cipta Karya Kota Bandung</td>
										</tr>
									</table>
								</div>
								<div class="col-md-6">		
									<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>PT. Sumercon</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>PT.PP</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Dinas Pendidikan KA</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Forum Manajemen Indonesia
											</td>
										</tr>
									
									</table>
									
								</div>
								<br>
							</div>
						</div>
					</div>	
					<div id="show_jurusan3" class="col-md-12 show-item-jurusan" style="width: 100%; margin-top:0px;display: none;">
						<div class="text-left">
							<a href="#jurusan" onclick="close_load_jurusan('3','1','2');" class="btn-close-jurusan"><img src="assets/images/jurusan/close_jurusan.png"></a>
							<h2 class="title-show-jurusan">Magister Akuntansi</h2>
							<button class="label-red-jurusan"><img style="margin-top:-13px;margin-left: -10px;" src="assets/images/jurusan/banpt.png"/><span style="margin-top:-20px;">Terakreditasi BAN PT</span>  <strong>"BAIK"</strong></button>
						</div><br>
						<h2 class="visi-jurusan">Visi</h2>
						<p style="color:#FFF;">Menjadikan program studi yang berdaya saing tinggi dan unggul dalam bidang pengembangan ilmu akuntansi di Jawa Barat pada tahun 2020.</p><br>
						<div class="col-md-4" style="margin-top:10px;margin-bottom: 19px;">
							<button class="btn-primary label-tabel-jurusan">Komptensi</button>
							<div style="border:1px solid #FEFFFF ;margin-top: -10px;min-height: 300px;"><br>
								<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Auditing</td>
									</tr>
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Keuangan Pusat/ Daerah</td>
									</tr>
									<tr>
										<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
										<td>Perpajakan</td>
									</tr>
								</table>
								<br>
								
							</div>
						</div>
						<div class="col-md-8" style="margin-top:10px;margin-bottom: 19px;">
							<button class="btn-primary label-tabel-jurusan">Kerjasama</button>
							<div style="border:1px solid #FEFFFF ;margin-top: -10px; min-height: 300px;">
								<br>
								<div class="col-md-6">
									<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Asosiasi Manajemen Indonesia</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Help University Kuala Lumpur Malayasia</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Universitas Utara Malaysia (UUM)</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Universiti Utara Malaysia</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Universiti Teknikal Malaysia</td>
										</tr>
										<tr>
											<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
											<td>Asosiasi Manajemen (AMA) Bandung</td>
										</tr>
									</table>
								</div>
								<div class="col-md-6">	
									<table border="0" style="margin-right: 10px;margin-left: 10px; color: #FFF;">
											<tr>
												<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
												<td>UNIKL</td>
											</tr>
											<tr>
												<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
												<td>ISEI</td>
											</tr>
											<tr>
												<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
												<td>AAI</td>
											</tr>
											<tr>
												<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
												<td>LSF. AF</td>
											</tr>
											<tr>
												<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
												<td>KADIN</td>
											</tr>
											<tr>
												<td style="width:40px;"><img style="margin-top:-5px" width="25" src="assets/images/jurusan/icon_num.png"></td>
												<td>Dekopindo Jabar</td>
											</tr>
										</table>	
									
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center" style="margin-top:-120px;">
						<img style="width: 300px;" src="assets/images/jurusan/hr.png"></div>
				</div>
			</div>
		</div>
		<!-- /.feature section -->
		<section id="perkuliahan" class="padding-page" style="margin-top:-60px">
			<div class="container" style="width:100%;">
				<div class="row">
					<div class="col-md-12 col-sm-12 wow fadeInRight animated bg-perkuliahan" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; -webkit-animation-delay: 0.8s; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;">
						<img src="assets/images/perkuliahan/suriken.png">
						<h1 class="title title-page title-perkuliahan-pl" style="">Online learning system</h1>

						<div class="feature-item">
							<div class="media">
								<div class="pull-left icon" href="#">

								</div>
								<div class="media-body perkuliahan-ml">
									<h4 class="media-heading"></h4>
									<p style="font-size: 20px; max-width: 500px;">Menerapkan sistem pembelajaran secara full online, dengan materi yang lebih luas, lebih banyak, bervariasi, dan mudah diakses melalui online learning system yang telah terintegrasi.</p>
									<img width="230" src="assets/images/perkuliahan/hr.png">
								</div>

							</div>
						</div>
						<img style="" class="img-responsive img-perkuliahan" src="assets/images/perkuliahan/img1.png" alt="">
					</div>
					<!--
					<div class="col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; -webkit-animation-delay: 0.8s; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
						<div class="block">
							<img style="margin-top:70px;" class="img-responsive" src="assets/images/perkuliahan/img1.png" alt="">
						</div>
					</div>-->
				</div>
			</div>
		</section> 

		<div id="keunggulan" class="padding-page bg">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

						<!-- /.feature title -->
						<h2 class="title-page">Keunggulan</h2>
					</div>
				</div>
				<div class="row row-feat">
					
					<div class="col-md-12">
						<div class="col-md-6">
							<img style="width: 100%;" src="assets/images/keunggulan/1.png">
						</div>
						<div class="col-md-6">
							<img style="width:100%" src="assets/images/keunggulan/2.png">
						</div>
						<div class="col-md-6">
							<img style="width:100%" src="assets/images/keunggulan/3.png">
						</div>
						<div class="col-md-6">
							<img style="width:100%" src="assets/images/keunggulan/4.png">
						</div>
						<div class="col-md-6">
							<img style="width:100%" src="assets/images/keunggulan/5.png">
						</div>
						<div class="col-md-6">
							<img style="width:100%" src="assets/images/keunggulan/6.png">
						</div>
						
						<div class="col-md-6 col-md-offset-3">
							<img style="width:100%" src="assets/images/keunggulan/7.png">
						</div>
						<!-- /.feature 1 -->
						<!--
						<div class="col-sm-6 feat-list">
							<div class="inner keunggulan-box" style="padding-top: 13px;">
								<h4 class="keunggulan-text">terakreditasi B, Universitas terakreditasi B plus </h4>
							</div>
						</div>

						<div class="col-sm-6 feat-list">
							<div class="inner keunggulan-box"  style="padding-top:12px;">
								<h4 class="keunggulan-text">Pembayaran bisa persemester, per tiga bulan, perbulan</h4>
								<p></p>
							</div>
						</div>
						<div class="col-sm-6 feat-list">
							<div class="inner keunggulan-box"  style="padding-top:28px;">
								<h4 class="keunggulan-text">Lab, perpustakaan </h4>
								<p></p>
							</div>
						</div>
						<div class="col-sm-6 feat-list">
							<div class="inner keunggulan-box"  style="padding-top:17px;">
								<h4 class="keunggulan-text">Dibekali pendidikan enterpreneur </h4>
								<p></p>
							</div>
						</div>
						<div class="col-sm-6 feat-list">
							<div class="inner keunggulan-box"  style="padding-top:17px;">
								<h4 class="keunggulan-text">Mendapatkan sertifikasi profesi</h4>
								<p></p>
							</div>
						</div>
						<div class="col-sm-6 feat-list">
							<div class="inner keunggulan-box"  style="padding-top:2px;">
								<h4 class="keunggulan-text">Sebaran alumni diberbagai sektor seperti : ASN, TNI, POLRI, Industri, konsultan, entrepreneur, Dll.</h4>
								<p>	</p>
							</div>
						</div>
					

						
							<div class="col-sm-6 col-md-offset-3  feat-list" style="">
								<div class="inner keunggulan-box"  style="padding-top:15px;">
									<h4 class="keunggulan-text">Kurikulum mengikuti perkembangan dunia keilmuan dan praktisi </h4>
									<p>	</p>
								</div>
							</div>-->
					</div>
				</div>
			</div>
		</div>

		<br><br>

		<div id="biaya"  class="padding-page bg">
			<div class="container">
				<!-- style="width: 100%; background-image: url(images/biaya/img11.png); background-position: right; background-size: 80%;background-repeat: no-repeat;"-->
				<div class="text-center">

					<!-- /.pricing title -->
					<h1 class="wow fadeInLeft animated title-page" style="visibility: visible; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">Biaya Investasi</h1>
					<!--<div class="title-line wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;"></div>-->
				</div>
				<div class="row package-option" style="margin-top:-50px;">

					<!-- /.package 1 -->
					<div class="col-md-4 col-md-offset-4 text-center" style="background-color:rgba(255, 234, 234, 0.1);">
						<!--<div class="wow fadeInUp animated" style="padding: 70px 20px; visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">-->
						<div class="wow fadeInUp animated" style="padding: 70px 20px;">
							<h1 style="font-family: nexa; color: #FFF;"><?php echo number_format($result_get_setting['data']['biaya'],0,',','.'); ?></h1>
							<h3 style="font-family: nexa; font-size: 19px; color: #FFF;">( Total Biaya Selama Kuliah )</h3>
							<h3 style="text-align: left;font-family: nexa; ">
								<ul type="disc" style="font-size:16px;margin-left: auto;margin-left: 20px;text-align:justify">
								    <li>Uang pangkal sebesar Rp.6.000.000 sudah termasuk Pendaftaran, Martikulasi, Jaket Almamater dan Propanka </li>
								    <li>Spp dapat dicicil sebanyak 10 bulan sebesar Rp. 2.900.000/bulan</li>
								    <!--
									<li>Pembayaran Pertama adalah Uang Pendaftaran dan Uang Pangkal</li>
									<li>Uang Pangkal sudah termasuk Martikulasi, Jaket Almamater & Propanka</li>
									<li>Uang kuliah dapat dicicil 6 kali dalam 1 semester sebesar Rp. 1.050.000 per bulan</li>
									<li>Uang Kuliah sudah termasuk Sumbangan Pembangunan, DPP, SKS dan Ujian.</li>
									-->
								</ul>
							</h3>
							<br>
							<h3 style="font-family: nexa; font-size: 15px; color: #FFF;">
								<?php 
								/* 
									foreach ($result_get_gelombang['data'] as $ff){
										echo 'Pendaftaran dibuka sampai dengan<br>'.date('d-m-Y', strtotime($ff['tanggal_akhir']));
									}
								*/
								?>		
							</h3>
							<br>
							
								<!--<a href="https://forms.gle/EaFbYW2hWaNwVLmN9" target="_blank" class="btn-primary">-->
								<a href="https://api.whatsapp.com/send?phone=6282128211958&text=Hallo%20Admin%20Pascasarjana%20USBYPKP...%20Saya%20ingin%20daftar%20kuliah" target="_blank" class="btn-primary">
									<span> Daftar Sekarang</span>
								</a>
								
								<!-- /.package button -->

						</div>
					</div>
				</div>

				<div class="row package-option" style="margin-top:-50px;">

					<!-- /.package 1 -->
					<div class="col-md-4 col-md-offset-4 text-center" style="background-color:rgba(255, 234, 234, 0.1);">
						<div class="" style="padding: 70px 20px;">
							<h1 style="font-family: nexa; color: #FFF;"><?php echo number_format($result_get_setting['data']['biaya'],0,',','.'); ?></h1>
							<h3 style="font-family: nexa; font-size: 19px; color: #FFF;">( Total Biaya Selama Kuliah )</h3>
							<h3 style="text-align: left;font-family: nexa; ">
								<ul type="disc" style="font-size:16px;margin-left: auto;margin-left: 20px;text-align:justify">
								    <li>Uang pangkal sebesar Rp.6.000.000 sudah termasuk Pendaftaran, Martikulasi, Jaket Almamater dan Propanka </li>
								    <li>Spp dapat dicicil sebanyak 10 bulan sebesar Rp. 2.900.000/bulan</li>
								    <!--
									<li>Pembayaran Pertama adalah Uang Pendaftaran dan Uang Pangkal</li>
									<li>Uang Pangkal sudah termasuk Martikulasi, Jaket Almamater & Propanka</li>
									<li>Uang kuliah dapat dicicil 6 kali dalam 1 semester sebesar Rp. 1.050.000 per bulan</li>
									<li>Uang Kuliah sudah termasuk Sumbangan Pembangunan, DPP, SKS dan Ujian.</li>
									-->
								</ul>
							</h3>
							<br>
							<h3 style="font-family: nexa; font-size: 15px; color: #FFF;">
								<?php 
								/* 
									foreach ($result_get_gelombang['data'] as $ff){
										echo 'Pendaftaran dibuka sampai dengan<br>'.date('d-m-Y', strtotime($ff['tanggal_akhir']));
									}
								*/
								?>		
							</h3>
							<br>
							
								<!--<a href="https://forms.gle/EaFbYW2hWaNwVLmN9" target="_blank" class="btn-primary">-->
								<a href="https://api.whatsapp.com/send?phone=6282128211958&text=Hallo%20Admin%20Pascasarjana%20USBYPKP...%20Saya%20ingin%20daftar%20kuliah" target="_blank" class="btn-primary">
									<span> Daftar Sekarang</span>
								</a>
								
								<!-- /.package button -->

						</div>
					</div>
				</div>

			</div>
		</div>

			<!-- /.screenshot section -->
		<div id="galeri" style="margin-top: -20px;">
			<div class="container">
				<div class="text-center">
					<h1 class="wow fadeInLeft title-page">Galeri</h1>
					<!--<div class="title-line wow fadeInRight"></div>-->
				</div>
				<div class="row screenshots" style="margin-top: -50px;">
					<div id="screenshots" class="owl-carousel">
						<!-- /.screenshot images -->
						<div class="screen wow fadeInUp">
							<a href="assets/images/galeri/1.png" data-toggle="lightbox"><img src="assets/images/galeri/1.png" alt="Screenshot"></a>
						</div>

						<div class="screen wow fadeInUp" data-wow-delay="0.1s">
							<a href="assets/images/galeri/2.png" data-toggle="lightbox"><img src="assets/images/galeri/2.png" alt="Screenshot"></a>
						</div>

						<div class="screen wow fadeInUp" data-wow-delay="0.2s">
							<a href="assets/images/galeri/3.png" data-toggle="lightbox"><img src="assets/images/galeri/3.png" alt="Screenshot"></a>
						</div>

						<div class="screen wow fadeInUp" data-wow-delay="0.3s">
							<a href="assets/images/galeri/4.png" data-toggle="lightbox"><img src="assets/images/galeri/4.png" alt="Screenshot"></a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div id="hubungi_kami" class="bg" style="margin-top:-90px">
			<div class="contact">
				<div class="container">
					<div class="row contact-row">

						<!-- /.contact form -->
						<!--
						<div class="col-sm-7 contact-right">
							<form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert('Thank you for your feedback!');">
								<div class="form-group">
								<input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
								</div>
								<div class="form-group">
								<input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
								</div>					
								<div class="form-group">
								<textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
								</div>
								<div class="form-group">
								<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
								</div>
							</form>		
						</div>
						-->
						<!-- /.address and contact -->
						<div class="col-sm-12 contact-center wow fadeInUp" style="text-align: center;">

							<img class="logo-hub-mobile" style="width: 150px; height: 150px;" src="assets/images/header/logo.png" alt="logo">	
							<h2 style="font-size: 40px;" class="title-page"><img class="logo-hub-desk" style="width: 100px; height: 100px;" src="assets/images/header/logo.png" alt="logo">Universitas Sangga Buana YPKP</h2>

						</div>
						<div class="col-sm-4 contact-left wow fadeInUp">
							
							<ul class="ul-address" style="color: #FFF;">
								<li><h3 style="font-weight: bold;color: #FFF;">Pasca Sarjana</h3></li>
								<li style="color: #FFF;">Universitas bermutu berbasis kewirausahaan dan berwawasan global.
								</li>
							</ul>	

						</div>
						<div class="col-sm-4 contact-left wow fadeInUp">
							
							<ul class="ul-address">
								<li><h3 style="font-weight: bold;color: #FFF;">Alamat Kampus</h3></li>
								<li style="color: #FFF;">
									Jl. PH.H. Mustofa No.68, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124
									+62 22 7275489
								</li>
							</ul>	

						</div>
						<div class="col-sm-4 contact-left wow fadeInUp">
							
							<ul class="ul-address">
								<li><h3 style="font-weight: bold;color: #FFF;">Kontak Kami</h3></li>
								
								
							</ul>	
							<div class="social text-left">
								<ul  style="padding-left: 30px;">
									<li><a style="background: transparent; border: none;" class="fadeInUp" href="https://api.whatsapp.com/send?phone=6282128211958&text=Halo%20Tim%20Pendaftaran%20Online%20Pascasarjana%20Universitas%20Sangga%20Buana%20!" target="_blank"><img src="assets/images/hubungi/wa.png"></a></li>
									<li><a style="background: transparent; border: none;" class="wow fadeInUp" href="https://www.instagram.com/official_pascasarjanausb/" target="_blank" data-wow-delay="0.2s"><img src="assets/images/hubungi/ig.png"></a></li>
									<li><a style="background: transparent; border: none;" class="wow fadeInUp" href="mailto:admin@pascasarjanausbypkp.ac.id" data-wow-delay="0.2s"><img src="assets/images/hubungi/email.png"></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- /.footer -->
		<footer id="footer" style="background: #DE2525;">
			<div class="container">
				<div class="col-sm-4 col-sm-offset-4">
					<!-- /.social links -->
					<!--
						<div class="social text-center">
							<ul>
								<li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
								<li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
								<li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>	
					-->
					<div class="text-center wow fadeInUp" style="font-size: 14px;font-weight: bold;">&copy; Universitas Sanggabuana. All Right Reserved
						<!--<a href="https://webthemez.com/free-bootstrap-templates/" target="_blank" title="Free Bootstrap Templates">Free Bootstrap Templates</a>--></div>
						<a href="#" class="scrollToTop"><i class="fa fa-arrow-circle-o-up"></i></a>
					</div>	
				</div>	
			</footer>

			<!--
			<div class="floatwa">
			<a href="https://api.whatsapp.com/send?phone=6282128211958&text=Halo%20Tim%20Pendaftaran%20Online%20Pascasarjana%20Universitas%20Sangga%20Buana%20!" target="_blank" target="_blank"><img style="width:80%" src="assets/images/whatsapp.png"></a>
			</div>
			-->
			<!-- /.javascript files -->
			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/custom.js?load=2"></script>
			<script src="assets/js/jquery.sticky.js"></script>
			<script src="assets/js/wow.min.js"></script>
			<script src="assets/js/owl.carousel.min.js"></script>
			<script src="assets/js/ekko-lightbox-min.js"></script>
			<script type="text/javascript">
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { event.preventDefault(); $(this).ekkoLightbox(); }); 
			</script>
			<script>
				new WOW().init();
			</script>
			<script src="assets/js/ypkp.js?load=99"></script>
	</body>
</html>