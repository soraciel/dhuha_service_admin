 <!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/logo_bulat.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dhuha Service</title>

	<meta name="description" content="Website resmi Dhuha Service Jombang sebagai media informasi yang komperhensif untuk pelanggan dan calon pelanggan untuk mendapatkan informasi yang update dan jangkauan lebih luas.">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href='assets/css/rotating-card.css' rel='stylesheet' />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	<style type="text/css">
		.map {
  width: 100%;
  height: 380px;
  background: rgb(240, 240, 240);
}

#map {
  width: 65%;
  height: 380px;
  display: inline-block
}

.map-c {
  float: right;
  width: 35%;
  height: 100%;
  padding: 25px;
}

@media only screen and (max-width: 720px) {
	.carousel-inner{
	height: auto;
	}
  .map {
    height: 450px;
    overflow: hidden
  }
  #map {
    width: 100%;
    height: 200px;
  }
  .map-c {
    float: right;
    width: 100%;
  }
}

@media only screen and (max-width: 460px) {
	.gambar_car{
		height: 130px;
	}
	.carousel-inner{
	height: auto;
	}
	.card-title{
		font-size: 12px;
	}
	.carousel{
		margin-top: 40px;
	}
  .navbar-brand{
  	margin-left: 0;
  	margin-right: 0;
  }
  .container-fluid{
  	padding: 0;
  }
  h1 {
    margin-bottom:20px
  }
  .navbar{
  	padding: 0;
  }
  .nama_menu{
  	text-align: left;
  }
}
.t
	</style>

</head>

<body class="index-page">
@yield('content')
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>
<script src="{{URL::to('assets/js/wow.min.js')}}" type="text/javascript"></script>
<script>
  lala = new WOW(
  {
    boxClass:     'wow', 
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
    }
  }
  );
  lala.init();
</script> 
<script>
	var myCenter = {lat: -7.567821, lng: 112.23572};
	var map;
	var grayStyles = [
	{
		featureType: "all",
		stylers: [
		{ saturation: -90 },
		{ lightness: 50 }
		]
	}
	];
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: myCenter,
			zoom: 15,
			styles: grayStyles,
			draggable: false,
			scrollwheel: false,
			navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
		});
		var image = {
		    url: '{{ url('dhuha_foto/pin_3.png') }}',
		    size: new google.maps.Size(128, 128),
		    origin: new google.maps.Point(0, 0),
		    anchor: new google.maps.Point(32, 32),
		    scaledSize: new google.maps.Size(46, 46)
		  };
		var marker = new google.maps.Marker({
			position: myCenter,
			size: new google.maps.Size(71, 71),
			animation: google.maps.Animation.DROP,
			icon: image
		});
		marker.setMap(map);
		marker.addListener('click', toggleBounce);
		function toggleBounce() {
		  if (marker.getAnimation() !== null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}
	}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-fv8X0rN2f1yD_3MVhIMhO2_2Km7Uvog&callback=initMap">
</script>
<script src="{{URL::to('assets/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
  $(document).ready(function(){
    $('.popup-youtube').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: true,

          fixedContentPos: true
        });
  });
</script>
<script>
$(document).ready(function(){
  $(".link").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 70
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
  $(".navbar-collapse").on('click', function(event){
  	$(".navbar-collapse").removeClass("in");
  });
});
</script>
</html>
