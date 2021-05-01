
<section class="banner-section">
		<div class="banner-slider">
			<div class="sinlge-banner">
				<div class="banner-wrapper">
				@foreach($posts as $post)
					@if ($post->isBanner)
						<img src="{{ ($post->image_url) ? $post->image_url : '/img/posts/default_blog.jpg' }}" alt="...">
							<div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
								<h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
									<a href="{{ route('blog.show', $post->slug) }}">
                  						{{ $post->title }}
									</a>
								</h3>
								<ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
									<li><a href="{{route('author', $post->author->slug)}}">By - {{$post->author->name}}</a></li>
								</ul>
								<p data-animation="fadeInUp" data-delay="1s">
								{!! $post->exerpt !!}
								</p>
								<a href="{{ route('blog.show', $post->slug) }}" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					@endif
			@endforeach
			</div>
		</div>
		<div class="banner-nav"></div>
	</section>