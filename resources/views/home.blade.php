@extends('app')
@section('content')
<style type="text/css">
	.titleBar {
		background-color: rgb(225,0,0);
		height: 4px;
		width: 60px;
		margin: 0 auto 22px;
		position: relative;
	}
	.logo-container .logo {
		margin: 5px;
		width: 40px;
	}
</style>
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#">
				<div class="logo-container">
					<div class="logo">
						<img src="assets/img/logo.png">
					</div>
					<div class="brand">
						<b>DHUHA SERVICE</b>
					</div>
				</div>
			</a>
		</div>

		<div class="collapse navbar-collapse" id="navigation-index">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#home" class="link">
						<i class="material-icons">home</i> HOME
					</a>
				</li>
				<li>
					<a href="#layanan" class="link">
						<i class="material-icons">settings</i> Layanan
					</a>
				</li>
				<li>
					<a href="#tim" class="link">
						<i class="material-icons">mood</i> Tim Mekanik
					</a>
				</li>
				<li>
					<a href="#profil" class="link">
						<i class="material-icons">person</i> Profil
					</a>
				</li>
				<li>
					<a href="#berita" class="link">
						<i class="material-icons">subject</i> Berita
					</a>
				</li>
				<li>
					<a href="#testimoni" class="link">
						<i class="material-icons">thumb_up</i> Testimoni
					</a>
				</li>

			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('images/car_repair.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>DHUHA SERVICE</h1>
						<h3>Automotive Repair Centre</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised wow animated fadeInUp">
	<h2 id="home" align="center" style="padding-top: 20px"><b>HOME</b></h2>
				<div class="titleBar"></div>
		<div class="section section-basic">
			<div class="container">
				<table>
					<tr>
						<td style="vertical-align: top;">
							<ul class="nav nav-pills" role="tablist" style="display: block">
								<li class="active">
									<a href="#dashboard" role="tab" data-toggle="tab">
										<i class="material-icons">schedule</i>
										Jadwal
									</a>
								</li>
							</ul>
						</td>
						<td style="vertical-align: top; padding-left: 10px; padding-right: 10px">
							<h5 style="margin-top: 5px; margin-bottom: 0"><b>JAM OPERASIONAL</b></h5>
							<h5>Buka setiap hari 07:00 - 16.30. Hari libur & tanggal merah buka</h5>
						</td>
					</tr>
				</table>
				<hr>
				<table>
					<tr>
						<td style="vertical-align: top;">
							<ul class="nav nav-pills" role="tablist" style="display: block">
								<li class="active">
									<a href="#dashboard" role="tab" data-toggle="tab">
										<i class="material-icons">place</i>
										Lokasi
									</a>
								</li>
							</ul>
						</td>
						<td style="vertical-align: top; padding-left: 10px; padding-right: 10px">
							<h5 style="margin-top: 5px; margin-bottom: 0"><b>LOKASI & ALAMAT</b></h5>
							<h5>Jl. Hasyim Asyari<br>Jombang, Jawa Timur, Indonesia 61471</h5>
						</td>
					</tr>
				</table>
				<hr>
				<table>
					<tr>
						<td style="vertical-align: top;">
							<ul class="nav nav-pills" role="tablist" style="display: block">
								<li class="active">
									<a href="#dashboard" role="tab" data-toggle="tab">
										<i class="material-icons">phone</i>
										Telepon
									</a>
								</li>
							</ul>
						</td>
						<td style="vertical-align: top; padding-left: 10px; padding-right: 10px">
							<h5 style="margin-top: 5px; margin-bottom: 0"><b>TELEPON / FAX</b></h5>
							<h5>(0321) 873025</h5>
						</td>
					</tr>
				</table>
				<hr>
				<h2 id="layanan" align="center"><b>LAYANAN KAMI</b></h2>
				<div class="titleBar"></div>
				<div class="row wow animated fadeInUp">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/tune_up_efi.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Tune Up Efi</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/spooring_2.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Spooring</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/balancing.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Balancing</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/understell.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Under Steel</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/ac_mobil.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">AC Mobil</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/ganti_ban.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Ganti Ban</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/nitrogen.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Nitrogen</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/kelistrikan.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Kelitrikan</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/ganti_oli_fluser.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Ganti Oli Flusher</h4>
							</div>
							<div class="col-xs-6 col-sm-3">
								<img src="dhuha_foto/cuci_mobil.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
								<h4 align="center" style="margin-bottom: 20px">Cuci Mobil</h4>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="wow animated fadeInUp" id="carousel">
				<div class="">

							<!-- Carousel Card -->
							<div class="card card-raised card-carousel">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<div class="carousel slide" data-ride="carousel">

										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-example-generic" data-slide-to="1"></li>
											<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<div class="item active">
												<img src="dhuha_foto/1.jpeg" alt="Awesome Image">
												<div class="carousel-caption">
													<button class="btn btn-danger">Yellowstone National Park, United States</button>
												</div>
											</div>
											<div class="item">
												<img src="dhuha_foto/2.jpeg" alt="Awesome Image">
												<div class="carousel-caption">
													<button class="btn btn-danger">Somewhere Beyond, United States</button>
												</div>
											</div>
											<div class="item">
												<img src="dhuha_foto/customer_service.jpg" alt="Awesome Image">
												<div class="carousel-caption">
													<button class="btn btn-danger">Customer Service</button>
												</div>
											</div>
										</div>

										<!-- Controls -->
										<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
											<i class="material-icons">keyboard_arrow_left</i>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
											<i class="material-icons">keyboard_arrow_right</i>
										</a>
									</div>
								</div>
							</div>
							<!-- End Carousel Card -->
				</div>
			</div>
			<div class="container wow animated fadeInUp">
				<h2 id="tim" align="center"><b>TIM MEKANIK</b></h2>
				<div class="titleBar"></div>
				<div class="row">
					<div class="col-xs-4 col-sm-2 col-sm-offset-1">
						<img src="images/foto_mekanik/1.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle img-raised" style="margin-bottom: 20px">
						<h4 align="center">Sugeng<br><small>Mekanik</small></h4>
					</div>
					<div class="col-xs-4 col-sm-2">
						<img src="images/foto_mekanik/2.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle img-raised" style="margin-bottom: 20px">
						<h4 align="center">Kukuh<br><small>Mekanik</small></h4>
					</div>
					<div class="col-xs-4 col-sm-2">
						<img src="images/foto_mekanik/3.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle img-raised" style="margin-bottom: 20px">
						<h4 align="center">Wills<br><small>Spooring</small></h4>
					</div>
					<div class="col-xs-4 col-sm-2">
						<img src="images/foto_mekanik/4.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle img-raised" style="margin-bottom: 20px">
						<h4 align="center">Anas<br><small>Mekanik</small></h4>
					</div>
					<div class="col-xs-4 col-sm-2">
						<img src="images/foto_mekanik/5.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle img-raised" style="margin-bottom: 20px">
						<h4 align="center">Agaus<br><small>Mekanik</small></h4>
					</div>
				</div>
				<hr>
				<h2 id="profil" align="center"><b>VIDEO PROFIL</b></h2>
				<div class="titleBar"></div>
				<div class="row wow animated fadeInUp">
					<div class="col-xs-12 col-md-10 col-md-offset-1">
					<div style="background:url('dhuha_foto/pintu_depan.jpg'); width: 100%; height:360px;display:block; background-size: cover, cover; background-position: center, center; background-repeat: none, none">
						<a href="https://www.youtube.com/watch?v=YonXYokw9CE" class="popup-youtube">
						<img src="dhuha_foto/play.png" style="width: 60px; position: relative;top: 50%; left: 50%; z-index: 100; margin-left: -30px; margin-top: -30px"/></a>
					</div>
						
					</div>
				</div>
				<hr>
				<h2 id="berita" align="center"><b>BERITA TERBARU</b></h2>
				<div class="titleBar"></div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 wow animated fadeInUp">
						<!-- Tabs with icons on Card -->
						<div class="card">
						<img src="images/foto_mekanik/5.jpg" style="width: 100%">
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="profile">
									<h3><b>Lorem Ipsum Dolor</b></h3>
									<div class="titleBar"></div>
										<p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
									</div>
									<div class="footer">
										BACA SELENGKAPNYA
									</div>
								</div>
							</div>
						</div>
						<!-- End Tabs with icons on Card -->
					</div>
				</div>
					</div>
				</div>

				<hr>
				<h2 id="testimoni" align="center"><b>TESTIMONI</b></h2>
				<div class="titleBar"></div>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 wow animated fadeInUp">
						<div class="col-md-4 col-sm-6">
							<div class="card-container">
								<div class="card">
									<div class="front">
										<div class="cover">
											<img src="images/rotating_card_thumb2.png"/>
										</div>
										<div class="user">
											<img class="img-circle" src="images/rotating_card_profile3.png"/>
										</div>
										<div class="content">
											<div class="main">
												<h3 class="name">John Marvel</h3>
												<p class="profession">CEO</p>
												<p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
											</div>
											<div class="footer">
												<i class="fa fa-mail-forward"></i> Auto Rotation
											</div>
										</div>
									</div> <!-- end front panel -->
									<div class="back">
										<div class="content">
											<div class="main">
												<h4 class="text-center">Job Description</h4>
												<p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

												<div class="stats-container">
													<div class="stats">
														<h4>235</h4>
														<p>
															Followers
														</p>
													</div>
													<div class="stats">
														<h4>114</h4>
														<p>
															Following
														</p>
													</div>
													<div class="stats">
														<h4>35</h4>
														<p>
															Projects
														</p>
													</div>
												</div>

											</div>
										</div>
									</div> <!-- end back panel -->
								</div> <!-- end card -->
							</div> <!-- end card-container -->
						</div> <!-- end col sm 3 -->
						<div class="col-md-4 col-sm-6 wow animated fadeInUp">
							<div class="card-container">
								<div class="card">
									<div class="front">
										<div class="cover">
											<img src="images/rotating_card_thumb2.png"/>
										</div>
										<div class="user">
											<img class="img-circle" src="images/rotating_card_profile3.png"/>
										</div>
										<div class="content">
											<div class="main">
												<h3 class="name">John Marvel</h3>
												<p class="profession">CEO</p>
												<p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
											</div>
											<div class="footer">
												<i class="fa fa-mail-forward"></i> Auto Rotation
											</div>
										</div>
									</div> <!-- end front panel -->
									<div class="back">
										<div class="content">
											<div class="main">
												<h4 class="text-center">Job Description</h4>
												<p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

												<div class="stats-container">
													<div class="stats">
														<h4>235</h4>
														<p>
															Followers
														</p>
													</div>
													<div class="stats">
														<h4>114</h4>
														<p>
															Following
														</p>
													</div>
													<div class="stats">
														<h4>35</h4>
														<p>
															Projects
														</p>
													</div>
												</div>

											</div>
										</div>
									</div> <!-- end back panel -->
								</div> <!-- end card -->
							</div> <!-- end card-container -->
						</div> <!-- end col sm 3 -->
						<div class="col-md-4 col-sm-6 wow animated fadeInUp">
							<div class="card-container">
								<div class="card">
									<div class="front">
										<div class="cover">
											<img src="images/rotating_card_thumb2.png"/>
										</div>
										<div class="user">
											<img class="img-circle" src="images/rotating_card_profile3.png"/>
										</div>
										<div class="content">
											<div class="main">
												<h3 class="name">John Marvel</h3>
												<p class="profession">CEO</p>
												<p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
											</div>
											<div class="footer">
												<i class="fa fa-mail-forward"></i> Auto Rotation
											</div>
										</div>
									</div> <!-- end front panel -->
									<div class="back">
										<div class="content">
											<div class="main">
												<h4 class="text-center">Job Description</h4>
												<p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

												<div class="stats-container">
													<div class="stats">
														<h4>235</h4>
														<p>
															Followers
														</p>
													</div>
													<div class="stats">
														<h4>114</h4>
														<p>
															Following
														</p>
													</div>
													<div class="stats">
														<h4>35</h4>
														<p>
															Projects
														</p>
													</div>
												</div>

											</div>
										</div>
									</div> <!-- end back panel -->
								</div> <!-- end card -->
							</div> <!-- end card-container -->
						</div> <!-- end col sm 3 -->
					</div> <!-- end col-sm-10 -->
				</div>
				

			</div>

		</div>
		<div class="map wow animated fadeInUp" id="contact">
	<div id="map"></div>
	<div class="map-c">
		<p>Website resmi Dhuha Service Jombang sebagai media informasi yang komperhensif untuk pelanggan dan calon pelanggan untuk mendapatkan informasi yang update dan jangkauan lebih luas.</p>
		<button class="btn btn-danger">Dokumen CV. Dhuha</button>
	</div>
</div>
	</div>


	<footer class="footer">
		<div class="container">
			<div class="copyright center">
				&copy; 2017, Make something people need by <img style="width: 100px" src="{{url('dhuha_foto/gambar_footer.png')}}">
			</div>
		</div>
	</footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->
@stop
