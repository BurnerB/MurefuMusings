@extends ('layouts.main')


@section('content')
        

	<!--====== Post Details Start ======-->
	<section class="post-details-area">
		<div class="container container-1000">
			<div class="post-details">
				<div class="entry-header">
					<h2 class="title">{{$post-> title}}</h2>
					<ul class="post-meta">
						<li>{{$post-> date}}</li>
						<li><i class="fa fa-folder"></i><a href="{{ route('category', $post-> category->slug)}}"> {{$post-> category->title}}</a>
              <i class="fa fa-tag"></i>{!! $post->tags_html !!}
            </li>
          </ul>
				</div>
				<div class="entry-media text-center">
        <img src="{{ ($post->image_url) ? $post->image_url : '/img/posts/default_blog.jpg' }}" alt="...">
				</div>
        <div class="entry-content">
					<p class="has-dropcap">
            {!! $post->body_html !!}
					</p>
				</div>
          
				<div class="entry-footer">
					
					<div class="post-author">
						<div class="author-img">
              <img alt="{{ $post->author->name }}" width="100" height="100" src="{{ $post->author->gravatar() }}" class="media-object">
						</div>
						<h5><a href="{{route('author', $post->author->slug)}}">{{$post->author->name}}</a></h5>
						<p>{!! $post->author->bio !!}</p>
					</div>
				</div>
				<div class="post-nav">
					<div class="prev-post">
						<a href="#"><i class="far fa-angle-left"></i></a><span class="title">Previous Post</span>
					</div>
					<div class="next-post">
						<span class="title">Next Post</span><a href="#"><i class="far fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			@include('blog.comments')
		</div>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ec2033d8045dfc"></script>
	</section>
	@include('blog.testimonials')
@endsection


