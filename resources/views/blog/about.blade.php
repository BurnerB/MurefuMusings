@extends('layouts.main')

@section('content')
    <!--====== About Section Start ======-->
	<section class="about-section">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 col-md-8">
					<div class="about-img">
					<!-- /img/posts/unnamed.jpg -->
						<img src="/backend/{{$settings->about_image}}" alt="Image">
						
					</div>
				</div>
				<div class="col-lg-6 col-md-10">
					<div class="about-text">
						<h1 class="title">Why Choose Me</h1>
						<p class="subtitle">Best Article Service enjoy your life</p>
						<p>
							{{ $settings->about_text }}
						</p>
						<ul class="social-links">
							<li><span>Follow Me :</span></li>
							<li><a href="{{ $settings->medium }}" target="_blank"><i class="fab fa-medium"></i></a></li>
							<li><a href="{{ $settings->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="{{ $settings->twitter }}" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a></li>
							<li><a href="{{ $settings->facebook }}" target="_blank"><i class="fab fa-facebook-f" target="_blank"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== About Section End ======-->

    @include('blog.testimonials')
@endsection
