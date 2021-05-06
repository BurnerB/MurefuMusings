<!--====== Instagram Area Start ======-->



<div class="container mt-5">
    <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
        <!-- Header of Slider -->
        <div class="testimonial_095_header">
            <h5>what people<span>say</span></h5>
        </div> <!-- /Header of Slider -->
        <!-- Indicators -->
        <div class="carousel-inner" role="listbox">
        @foreach($testimony as $testimony)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="testimonial_095_slide">
                    <p>{{$testimony->Testimony}}</p>
                    <h5><a href="#">{{$testimony->Person}} - {{$testimony->Occupation}}</a></h5>
                </div>
            </div> 
        @endforeach
        </div> 
        <ol class="carousel-indicators">
            
        @foreach($testimony as $testimony)
            <li data-target="#testimonial_095" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
        </ol> 

        
        <a class="carousel-control-prev" href="#testimonial_095" data-slide="prev"> <span class="fa fa-chevron-left"></span> </a> <!-- Right Control --> <a class="carousel-control-next" href="#testimonial_095" data-slide="next"> <span class="fa fa-chevron-right"></span> </a>
    </div> <!-- End Paradise Slider -->
</div>

@include('blog.script')