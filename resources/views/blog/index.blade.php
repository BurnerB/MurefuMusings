@extends('layouts.main')

@section('content')

<!-- Banner -->

  @include('blog.banner')
  <!-- end of banner -->

  <!-- posts -->

<section class="post-area with-sidebar" id="postWarpperLoaded">
		<div class="container container-1250">
			@if (! $posts->count())
                        <p>Nothing Found!!</p>
                @else
                    @include('blog.alert')
				@endif
			<div class="post-area-inner">
			
					<div class="entry-posts two-column masonary-posts row">
        			@foreach($posts as $post)
					<div class="col-lg-6 col-sm-6">
						<div class="entry-post">
							<div class="entry-thumbnail">
              <img src="{{ ($post->image_url) ? $post->image_url : '/img/posts/default_blog.jpg' }}" alt="...">
							</div>
							<div class="entry-content">
								<h4 class="title">
									<a href="{{ route('blog.show', $post->slug) }}">
                  {{ $post->title }}
									</a>
								</h4>
								<ul class="post-meta">
									<li class="date">
										<a href="#">{{ $post->date }}</a>
									</li>
									<li class="categories">
										<a href="#">{!! $post->tags_html !!}</a>
									</li>
								</ul>
								<p>
                {!! $post->exerpt !!}
								</p>
								<a href="{{ route('blog.show', $post->slug) }}" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
          @endforeach
					<div class="col-12">
						<div class="text-center">
							{{ $posts->appends(request()->only(['term', 'month', 'year']))->links() }}
						</div>
					</div>
          
				</div>
				<!-- sidebar -->
        @include('layouts.sidebar')
			</div>
		</div>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ec2033d8045dfc"></script>
	</section>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	

	@include('blog.testimonials')
@endsection
