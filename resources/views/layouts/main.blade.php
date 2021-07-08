
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title> MUREFUS' WRITES </title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="/img/icoooon.png" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="/css/animate.min.css">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="/css/font-awesome.min.css" />
	<!--====== Magnific Popup css ======-->
	<link rel="stylesheet" href="/css/magnific-popup.css" />
	<!--====== Slick  css ======-->
	<link rel="stylesheet" href="/css/slick.css" />
	<!--====== Nice Select ======-->
	<link rel="stylesheet" href="/css/jquery-nice-select.min.css" />
	<!--====== Style css ======-->
	<link rel="stylesheet" href="/css/style.css" />
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== Header part start ======-->
	<header class="sticky-header">
		<div class="container-fluid">
			<div class="d-flex align-items-center justify-content-between">
				<div class="site-logo">
					<a href="{{ route('blog') }}"><h4>MUREFU WRITES</h4></a>
				</div>
				<div class="header-right">

					<div class="search-area">
						<a href="javascript:void(0)" class="search-btn"><i class="fas fa-search"></i></a>
						<div class="search-form">
							<a href="#" class="search-close"><i class="fal fa-times"></i></a>
							<form action="{{ route('blog') }}">
              <input type="text" class="form-control input-lg" value="{{ request('term') }}" name="term" placeholder="Search for post...">
							</form>
							<div class="search-overly"></div>
						</div>
					</div>


					<div class="offcanvas-panel">
						<a href="javascript:void(0)" class="panel-btn">
							<span>
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<div class="panel-overly"></div>
						<div class="offcanvas-items">
							<!-- Navbar Toggler -->
							<a href="javascript:void(0)" class="panel-close">
								Back <i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>

							<ul class="offcanvas-menu">
								<li>
									<a href="{{ route('blog') }}">Home</a>
								</li>
								<li><a href="{{ route('about') }}">About</a></li>
								<li><a href="{{ route('contact') }}">Contact</a></li>
							</ul>

							<div class="social-icons">
								<ul>
							
                                    <li><a href="{{ $settings->medium }}" target="_blank"><i class="fab fa-medium"></i></a></li>
                                    <li><a href="{{ $settings->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="{{ $settings->twitter }}" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a></li>
                                    <li><a href="{{ $settings->facebook }}" target="_blank"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--====== Header part end ======-->

	<!--====== Banner Area Start ======-->
	<!--====== Banner Area End ======-->
	<!--====== Post Area Start ======-->
  @yield('content')
	<!--====== Post Area End ======-->



	<!--====== Footer Area Start ======-->
	<footer>
		<div class="footer-widgets-area">
			<div class="container container-1360">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="widget address-widget">
							<h4 class="widget-title">Our Address</h4>
							<p>{{ $settings->address }}</p>
							<p>{{ $settings->mobile }} <br> {{ $settings->email }}</p>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="widget nav-widget">
							<h4 class="widget-title">Quick Links</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 ml-auto">
						<div class="widget newsletter-widget">
							<h4 class="widget-title">Our Monthly Newsletter </h4>
							<p>
								Sign Up TO Get Updates On Articles news And Events.
							</p>
							<form action="#">
								<input type="email" placeholder="your email">
								<button type="submit">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright-area">
			<div class="container container-1360">
				<div class="row align-items-center">
					<div class="col-lg-6 col-12">
						<div class="social-links">
							<ul>
								<li class="title">Follow Me</li>
								<li><a href="{{ $settings->twitter }}">Twitter</a></li>
								<li><a href="{{ $settings->facebook }}">Facebook</a></li>
								<li><a href="{{ $settings->medium }}">Medium</a></li>
								<li><a href="{{ $settings->linkedin }}">Linkedin</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="copyright-text text-lg-right">
							<p><span>Copyright</span> - 2021 Murefus' Musings</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== Footer Area End ======-->

	<!--====== jquery js ======-->
	<script src="/js/jquery/modernizr-3.6.0.min.js"></script>
	<script src="/js/jquery/jquery-1.12.4.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<!--====== Slick js ======-->
	<script src="/js/slick.min.js"></script>
	<!--====== Images Loaded ======-->
	<script src="/js/imagesloaded.pkgd.min.js"></script>
	<!--====== Isotope js ======-->
	<script src="/js/isotope.pkgd.min.js"></script>
	<!--====== Magnific Popup js ======-->
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<!--====== Nice Select js ======-->
	<script src="/js/jquery.nice-select.min.js"></script>
	<!--====== Main js ======-->
	<script src="/js/main.js"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="DeW69KYH"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>


</body>

</html>
