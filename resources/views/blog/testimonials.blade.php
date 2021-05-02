<!--====== Instagram Area Start ======-->
<section class="instagram-section">
		<div class="container-fluid p-0">
			<h5 class="instagram-title">
				Client Testimonials
                
			</h5>
			<div class="wrapper">
                <div class="carousel slide" id="mySlider" data-ride="carousel" data-interval="4000" data-pause="hover">
                    
                    <div class="carousel-inner text-white">
                        @foreach($testimony as $testimony)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="content">
                                <div class="employee">
                                    <div class="h3 text-uppercase">{{$testimony->Person}}</div>
                                    <div class="h6 text-mute">{{$testimony->Occupation}}</div>
                                </div>
                                <div class="testimonial bg-white text-dark"> <span class="fas fa-quote-left"></span>
                                    <div class="text-justify">{{$testimony->Testimony}}</div> <span class="fas fa-quote-right"></span>
                                </div>
                            </div>
                        
                        </div>
                        @endforeach 
                    </div>
                    
                </div>
            </div>
		</div>
	</section>