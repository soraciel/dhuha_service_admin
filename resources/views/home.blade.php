@extends('app')
@section('content')
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
			<a href="http://www.creative-tim.com">
				<div class="logo-container">
					<div class="logo">
						<img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
					</div>
					<div class="brand">
						Dhuha Service 
					</div>
				</div>
			</a>
		</div>

		<div class="collapse navbar-collapse" id="navigation-index">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="components-documentation.html" target="_blank">
						<i class="material-icons">home</i> HOME
					</a>
				</li>
				<li>
					<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
						<i class="material-icons">settings</i> Layanan Kami
					</a>
				</li>
				<li>
					<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
						<i class="material-icons">mood</i> Tim Mekanik
					</a>
				</li>
				<li>
					<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
						<i class="material-icons">person</i> Profil
					</a>
				</li>
				<li>
					<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
						<i class="material-icons">subject</i> Berita
					</a>
				</li>
				<li>
					<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
						<i class="material-icons">thumb_up</i> Testimoni
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
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
						<h1>Dhuha Service</h1>
						<h3>Automotive Repair Centre</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
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
				<h2 align="center">LAYANAN KAMI</h2>
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
					</div>
					<div class="col-xs-6 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
					</div>
					<div class="col-xs-6 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
					</div>
					<div class="col-xs-6 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised" style="margin-bottom: 20px">
					</div>
				</div>
			</div>
			<div class="section section-tabs" id="carousel">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">

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
												<img src="assets/img/bg2.jpeg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
												</div>
											</div>
											<div class="item">
												<img src="assets/img/bg3.jpeg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4>
												</div>
											</div>
											<div class="item">
												<img src="assets/img/bg4.jpeg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
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
				</div>
			</div>
			<div class="container">
				<h2 align="center">TIM MEKANIK</h2>
				<div class="row">
					<div class="col-xs-4 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle" style="margin-bottom: 20px">
					</div>
					<div class="col-xs-4 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle" style="margin-bottom: 20px">
					</div>
					<div class="col-xs-4 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle" style="margin-bottom: 20px">
					</div>
					<div class="col-xs-4 col-sm-3">
						<img src="assets/img/avatar.jpg" alt="Raised Image" class="img-rounded img-responsive img-circle" style="margin-bottom: 20px">
					</div>
				</div>
				<hr>
				<h2 align="center">VIDEO PROFILE</h2>
				<img src="assets/img/bg2.jpeg" class="img-responsive">
				<hr>
				<h2 align="center">BERITA TERBARU</h2>
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<!-- Tabs with icons on Card -->
						<div class="card card-nav-tabs">
							<div class="header" style="height: auto; background-color: #ff0000">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="card-header" data-background-color="purple">
									<h4 class="card-title" align="center" style="color: #fff">Berita</h4>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="profile">
										<p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Tabs with icons on Card -->
					</div>
					<div class="col-xs-6 col-sm-3">
						<!-- Tabs with icons on Card -->
						<div class="card card-nav-tabs">
							<div class="header" style="height: auto; background-color: #ff0000">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="card-header" data-background-color="purple">
									<h4 class="card-title" align="center" style="color: #fff">Berita</h4>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="profile">
										<p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Tabs with icons on Card -->
					</div>
				</div>
				<hr>
				<h2 align="center">TESTIMONI</h2>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
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
					</div> <!-- end col-sm-10 -->
				</div>
				

			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="copyright pull-right">
				&copy; 2017, Make something people need want by OWLINE
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
