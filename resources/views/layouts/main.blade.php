
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title> Genial Blog Html Template || Home One </title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="/img/favicon.ico" type="img/png" />
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
					<a href="{{ route('blog') }}"><img src="/img/logo.png" alt="Genial"></a>
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
									<ul class="submenu">
										<li><a href="index.html">Home One</a></li>
										<li><a href="index-2.html">Home Two</a></li>
										<li><a href="index-3.html">Home Three</a></li>
										<li><a href="index-4.html">Home Four</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="404.html">404</a></li>
							</ul>

							<div class="social-icons">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
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

	<!--====== Instagram Area Start ======-->
	<section class="instagram-section">
		<div class="container-fluid p-0">
			<h5 class="instagram-title">
				Follow Us <span class="instagram-icon"><i class="fab fa-instagram"></i></span> Instagram
			</h5>
			<div class="instagram-images">
				<div class="image">
					<img src="/img/instagram/01.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/02.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/03.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/04.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/05.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/06.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/07.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/01.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/02.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/03.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/04.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/05.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/06.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="image">
					<img src="/img/instagram/07.jpg" alt="Instagram-image">
					<a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!--====== Instagram Area End ======-->

	<!--====== Footer Area Start ======-->
	<footer>
		<div class="footer-widgets-area">
			<div class="container container-1360">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="widget address-widget">
							<h4 class="widget-title">Our Address</h4>
							<p>Sydney, Australia Sheen Darus Salam. <br> 112/B, Road 8A, Dhanmondi.</p>
							<p>+880-036987458765521 <br> example@yourmail.com</p>
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
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Youtube</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">Linkedin</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="copyright-text text-lg-right">
							<p><span>Copyright</span> - 2020 EasyArt theme by Easygoods</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== Footer Area End ======-->

	<!--====== jquery js ======-->
	<script src="/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="/js/vendor/jquery-1.12.4.min.js"></script>
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
    
</body>

</html>