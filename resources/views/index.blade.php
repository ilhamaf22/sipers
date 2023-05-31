<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="description" content="App Landing Page">
	<!-- set the Keyword -->
	<meta name="keywords" content="app, app landing, clean, landing, landing page, marketing, marketing landing, product, product landing, responsive, seo, startup landing ">
	<meta name="author" content="Vue Laboratories">
	<title>SIPERS</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7COswald:400,700" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="Mono/css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="Mono/css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="Mono/css/font-awesome.min.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="Mono/style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="Mono/css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="Mono/css/responsive.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="Mono/css/gridgum.css">
	<style class="color_css"></style>
</head>
<body>
	<!-- Wrapper of the page -->
	<div id="wrapper">
		<!-- Header of the page -->
		<header id="header">
			<div class="container">
				<div class="holder center-block">
					<!-- Logo of the page -->
					<div class="logo">
						<a href="#">
							<img src="Mono/images/logo.svg" alt="Mono" class="light img-responsive width">
							<img src="Mono/images/logo-dark.svg" alt="mono" class="dark img-responsive width">
						</a>
					</div>
					<!-- Logo of the page end -->
					<!-- Navbar of the page -->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<a href="{{ route('login') }}"class="btn btn-default btn-white">{{ __('Login') }}</a>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#" data-scroll-nav="0">Home</a></li>
								<li><a href="#" data-scroll-nav="1">Features</a></li>
								<li><a href="#" data-scroll-nav="2">About</a></li>
								<li><a href="#" data-scroll-nav="3">FAQ</a></li>
								<li><a href="#" data-scroll-nav="4">Contact</a></li>
							</ul>
						</div>
					</nav>
					<!-- Navbar of the page end -->
				</div>
			</div>
		</header>
		<!-- Header of the page end -->
		<!-- Main of the page -->
		<main id="main">
			<!-- Hero area of the page -->
			<section class="hero-area text-center overlay" style="background-image: url(images/slide-1.jpg);" data-scroll-index="0">
				<div id="particles-js"></div>
				<div class="container">
					<div class="row">
						<header class="heading-holder col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
							<h1><span class="text-small">Welcome to</span>SIPERS!</h1>
							<p>Sistem presensi dan Keamanan yang terintegrasi dan dibuat dengan module Arduino Uno R3 Wifi.</p>
						</header>
					</div>
					<div class="aligncenter">
						<header class="col-xs-12 heading-wrap col-sm-6 col-sm-offset-3 text-center" >
							<h2 style="color:white">Arduino Uno R3 Wifi</h2>
						</header>
						<img src="Mono/images/arduino.png" alt="image description m-top" class="img-responsive" style="max-height:320px">
					</div>
				</div>
			</section>
			<!-- Hero area of the page end -->
			<!-- Features area of the page -->
			<section class="features-area container" data-scroll-index="1">
				<div class="row">
					<header class="col-xs-12 heading-wrap col-sm-6 col-sm-offset-3 text-center">
						<h2>Our Features</h2>
					</header>
				</div>
				<!-- Features of the page -->
				<ul class="features-list">
					<li>
						<div class="icon-holder">
							<img src="Mono/images/speech-bubble.png" width="54" height="52" alt="icon id-card" class="img-responsive">
						</div>
						<h3><a href="#">Chat to Admin</a></h3>
						<p>Chat dengan admin dengan mudah dan cepat ketika membutuhkan bantuan.</p>
					</li>
					<li>
						<div class="icon-holder">
							<img src="Mono/images/time-left.png" width="56" height="50" alt="icon clock" class="img-responsive">
						</div>
						<h3><a href="#">Real-Time</a></h3>
						<p>Dapat melihat data log secara real-time sehingga membuat sistem lebih aman.</p>
					</li>
					<li>
						<div class="icon-holder">
							<img src="Mono/images/download.png" width="51" height="45" alt="icon notes" class="img-responsive">
						</div>
						<h3><a href="#">Download Log</a></h3>
						<p>Terdapat fitur untuk mendownload log yang telah ada di database dengan sekali klik.</p>
					</li>
					<li>
						<div class="icon-holder">
							<img src="Mono/images/lock.png" width="52" height="60" alt="icon lock" class="img-responsive">
						</div>
						<h3><a href="#">Secure Lock</a></h3>
						<p>Terintegrasi dengan sistem keamanan yang instan dan tercatat sehingga keamanan terjamin.</p>
					</li>
					<li>
						<div class="icon-holder">
							<img src="Mono/images/contactless.png" width="52" height="60" alt="icon contactless" class="img-responsive">
						</div>
						<h3><a href="#">Contactless</a></h3>
						<p>Meminimalisir kontak fisik secara langsung dari pengguna sehingga lebih higenis.</p>
					</li>
					<li>
						<div class="icon-holder">
							<img src="Mono/images/timer.png" width="49" height="51" alt="icon quick" class="img-responsive">
						</div>
						<h3><a href="#">Quick Response</a></h3>
						<p>Membutuhkan waktu yang singkat untuk membuka kunci sehingga dapat hemat dalam segi waktu.</p>
					</li>
				</ul>
				<!-- Features of the page end -->
			</section>
			<!-- Features area of the page end -->
			<!-- Demo block of the page -->
			<aside class="demo-block">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-7">
							<h2>NEED A PERFECT PRODUCT FOR YOUR BUSINESS?</h2>
							<p>Nam feugiat enim diam, sed bibendum diam gravida ac. Ut urna urna, blandit viverra luctus et, vulputate vitae ligula. Duis commodo vitae massa quis maximus.</p>
						</div>
						<div class="col-xs-12 col-md-5">
							<ul>
								<li><a href="#" class="btn btn-default btn-white">Purchase now</a></li>
								<li><a href="#">Try our Demo</a></li>
							</ul>
						</div>
					</div>
				</div>
			</aside>
			<!-- Demo block of the page end -->
			<!-- Product Features of the page -->
			<section class="container product-features" data-scroll-index="2">
				<div class="row sameheight-container">
					<!-- Descr of the page -->
					<div class="col-xs-12 col-sm-6 descr sameheight">
						<div class="align">
							<h2>Quisque aliquam felis et sapien vulputate ut imperdiet.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac nisi eget ligula ultricies porta. Integer in sapien non felis scelerisque elementum.
								<br>Aliquam scelerisque eros sit amet eleifend rhoncus. Morbi ut imperdiet mi, a dictum nisl. Nulla facilisi. Pellentesque rhoncus mattis lacus eget efficitur.
								<br>Donec pretium, mauris in auctor posuere, ante ipsum tincidunt urna,
								gravida molestie dolor tellus eget nunc. Nullam vestibulum lorem sit amet quam suscipit mollis a eget enim.
							<br><br> Quisque aliquam felis et sapien vulputate, nec scelerisque neque commodo. Quisque in dui turpis. Aliquam nec luctus orci, eget auctor felis.</p>
							<ul class="facts-list">
								<li>
									<h3><span class="counter">295</span><span class="text-block">Components</span></h3>
								</li>
								<li>
									<h3><span class="counter">323</span>+<span class="text-block">Themes</span></h3>
								</li>
								<li>
									<h3>Unlimited<span class="text-block">users</span></h3>
								</li>
							</ul>
						</div>
					</div>
					<!-- Descr of the page end -->
					<!-- img holder of the page -->
					<div class="img-holder sameheight col-xs-12 col-sm-6">
						<img src="Mono/images/imac.png" alt="image description" class="img-responsive">
					</div>
					<!-- img holder of the page end -->
				</div>
			</section>
			<!-- Product Features of the page end -->
			<!-- Video block of the page -->
			<aside class="video-block" data-scroll-index="3">
				<div class="video overlay">
					<img src="Mono/images/2600-430.jpg" alt="image description" class="img-responsive">
					<a href="https://www.youtube.com/watch?v=XjDh_5ZH9wQ?autoplay=1" class="ico-play lightbox fancybox.iframe"></a>
				</div>
			</aside>
			<!-- Video block of the page end -->


			<!-- Trial block of the page -->
			<section class="trial-block container" data-scroll-index="4">
				<div class="row">
					<div class="alignleft">
						<img src="Mono/images/665.jpg" alt="image description" class="img-responsive">
					</div>
					<div class="col-xs-12 col-sm-6 descr">
						<div class="align">
							<header class="heading-wrap">
								<h2>Nam feugiat enim diam, sed bibendum diam gravida ac!</h2>
							</header>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<a href="#" class="btn btn-info">Try our demo</a>
						</div>
					</div>
				</div>
			</section>
			<!-- Trial block of the page end -->
			<!-- Brands area of the page -->
			<aside class="brands-area container">
				<div class="row">
					<header class="col-xs-12 heading-wrap col-sm-6 col-sm-offset-3 text-center">
						<h2>OUR PARTNERS</h2>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- Logos list of the page -->
						<ul class="list-unstyled line-slider">
							<li><a href="#"><img src="Mono/images/partner06.png" alt="image description" class="img-responsive"></a></li>
							<li><a href="#"><img src="Mono/images/partner04.png" alt="image description" class="img-responsive"></a></li>
							<li><a href="#"><img src="Mono/images/partner05.png" alt="image description" class="img-responsive"></a></li>
							<li><a href="#"><img src="Mono/images/partner06.png" alt="image description" class="img-responsive"></a></li>
							<li><a href="#"><img src="Mono/images/partner04.png" alt="image description" class="img-responsive"></a></li>
							<li><a href="#"><img src="Mono/images/partner05.png" alt="image description" class="img-responsive"></a></li>
							<li><a href="#"><img src="Mono/images/partner06.png" alt="image description" class="img-responsive"></a></li>
							<li><a href="#"><img src="Mono/images/partner04.png" alt="image description" class="img-responsive"></a></li>
						</ul>
						<!-- Logos list of the page end -->
					</div>
				</div>
			</aside>
			<!-- Brands area of the page end -->
		</main>
		<!-- Main of the page end -->
		<!-- Footer of the page -->
		<footer id="footer">
			<!-- Aside of the page -->
			<aside class="aside">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center col-sm-6 col-sm-offset-3">
							<div class="logo"><a href="#"><img src="Mono/images/logo.svg" alt="mono"></a></div>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis imperdiet egestas.</p>
							<!-- Social Networks of the page -->
							<ul class="social-networks">
								<li><a href="#"><span class="icon ico-facebook"></span></a></li>
								<li><a href="#"><span class="icon ico-twitter"></span></a></li>
								<li><a href="#"><span class="icon ico-google-plus"></span></a></li>
								<li><a href="#"><span class="icon ico-pinterest"></span></a></li>
								<li><a href="#"><span class="icon ico-icon1"></span></a></li>
							</ul>
							<!-- Social Networks of the page end -->
						</div>
					</div>
				</div>
			</aside>
			<!-- Aside of the page end -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
						<p>&copy; Copyright 2021, <a class="white" href="https://gridgum.com">GRIDGUM</a>. <br>All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer of the page end -->
		<!-- Back Top of the page -->
    	<span id="back-top" class="fa fa-angle-up"></span>
    	<div id="loader" class="loader-holder">
			<div class="block"><img src="Mono/images/svg/hearts.svg" width="100" alt="loader"></div>
		</div>
	</div>
	<!-- Wrapper of the page end -->
	<!-- include jQuery -->
	<script src="Mono/js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="Mono/js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="Mono/js/jquery.main.js"></script>
	<!-- include jQuery -->
	<script src="Mono/js/particles.js"></script>
	<div id="style-changer" data-src="style-changer.html"></div>
</body>
</html>