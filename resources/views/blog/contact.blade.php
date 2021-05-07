@extends('layouts.main')

@section('content')

	<!--====== Comtact Section Start ======-->
	<section class="contact-section">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="contact-maps">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8954.810692863524!2d36.71045850678234!3d-1.2198267399159075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1619905109483!5m2!1sen!2ske"
							allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							
					</div>
				</div>
				<div class="col-lg-6 col-md-10">
					<div class="contact-text">
						<h4 class="title">
							If you would like to join us on our journey , then you can follow
							us on a social media channels
						</h4>
						<div class="infomations">
							<h4 class="title">Have a question ?</h4>
							<p>Contact us at : <span>example@mail.com</span></p>
						</div>
						<div class="contact-form">
						<!-- Success message -->
						@if(Session::has('success'))
							<div class="alert alert-success">
								{{Session::get('success')}}
							</div>
						@endif
						
							<form action="" method="post" action="{{ route('contact.store') }}">
							@csrf
								<div class="row">
									<div class="col-lg-6">
										<input type="text" class="{{ $errors->has('name') ? 'error' : '' }}" placeholder="Name*">
										<!-- Error -->
										@if ($errors->has('name'))
											<div class="error">
												{{ $errors->first('name') }}
											</div>
										@endif

									</div>
									<div class="col-lg-6">
										<input type="email" class="{{ $errors->has('email') ? 'error' : '' }}" placeholder="Email*">
										@if ($errors->has('email'))
											<div class="error">
												{{ $errors->first('email') }}
											</div>
										@endif
									</div>

									<div class="col-12">
										<textarea class="{{ $errors->has('message') ? 'error' : '' }}"  placeholder="Your message"></textarea>
										@if ($errors->has('message'))
											<div class="error">
												{{ $errors->first('message') }}
											</div>
										@endif
									</div>
									<div class="col-12 text-center">
										<button type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Comtact Section End ======-->


</html>

    @include('blog.testimonials')
@endsection