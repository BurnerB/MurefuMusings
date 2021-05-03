<div class="primary-sidebar clearfix">
					<div class="sidebar-masonary row justify-content-center">
						<div class="col-lg-12 col-md-6 col-sm-8 widget author-widget">
							<div class="author-img">
								<img src="/img/sidebar/author.jpg" alt="Post-Author">
							</div>
							<h5 class="widget-title">I am a Writer</h5>
							<p>
								When it comes to creating is a website for your business, an attractive design will only
								get you far,...
							</p>
							<div class="author-signature">
								<img src="/img/sidebar/author-signature.png" alt="Signature">
							</div>
						</div>

                        <div class="col-lg-12 col-md-6 col-sm-8 widget popular-articles">
							<h5 class="widget-title">Popular Articles</h5>
							<div class="articles">

                            @foreach ($popularPosts as $post)
								<div class="article">
									<div class="thumb">
                                        <img src="{{ ($post->image_url) ? $post->image_url : '/img/posts/default_blog.jpg' }}" alt="...">
									</div>
									<div class="desc">
                                    <h6><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h6>
										<span class="post-date">{{ $post->date }}</span>
									</div>
								</div>
                            @endforeach					
							</div>
						</div>


						<div class="col-lg-12 col-md-6 col-sm-8 widget categories-widget">
							<h5 class="widget-title">Categories</h5>
							<div class="categories">
                            @foreach ($categories as $category)
                                    <a href="{{ route('category', $category->slug) }}"><i class="fa fa-angle-right"></i> {{ $category->title }}</a>
                                    <span class="badge pull-right">{{ $category->posts->count() }}</span>
                            @endforeach	
							</div>
						</div>
						<div class="col-lg-12 col-md-6 col-sm-8 widget social-widget">
							<h5 class="widget-title">Follow Me</h5>
							<div class="social-links">
								<a href="#">
									<i class="fab fa-facebook-f"></i>Facebook
								</a>
								<a href="#">
									<i class="fab fa-twitter"></i>Twitter
								</a>
								<a href="#">
									<i class="fab fa-medium"></i>Medium
								</a>
								<a href="#">
									<i class="fab fa-linkedin"></i>Linkedin
								</a>
							</div>
						</div>
						
						<div class="col-lg-12 col-md-6 col-sm-8 widget categories-widget">
							<h5 class="widget-title">Archives</h5>
							<div class="categories">
                            @foreach($archives as $archive)
                            <a href="{{ route('blog', ['month' => $archive->month, 'year' => $archive->year]) }}">{{ month_name($archive->month) . " " . $archive->year }}</a>
                            <span class="badge pull-right">{{ $archive->post_count }}</span>
                            @endforeach	
							</div>
						</div>
					</div>
				</div>