
<section class="banner-section">
		<div class="banner-slider">
			<div class="sinlge-banner">
				<div class="banner-wrapper">
					@if ($banner)
					
					<div class="banner-bg" style="background-image: url({{ ($banner->image) ? $banner->image_url :'/img/banner/default_blog.jpg' }});"></div>
							<div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
								<h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
									<a href="{{ route('blog.show', $banner->slug) }}">
                  						{{ $banner->title }}
									</a>
								</h3>
								<ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
									<li><a href="{{route('author', $banner->author->slug)}}">By - {{$banner->author->name}}</a></li>
								</ul>
								<p data-animation="fadeInUp" data-delay="1s">
								{!! $banner->exerpt !!}
								</p>
								<a href="{{ route('blog.show', $banner->slug) }}" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>


									
								</a>
							</div>
							
						</div>
					@endif
			</div>
		</div>
		<div class="banner-nav"></div>
</section>

