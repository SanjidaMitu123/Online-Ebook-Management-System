@extends('frontend.master')
@section('main')


		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-files-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="650">0</div>
											<h5 class="mu-counter-name">Total Pages</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="422">0</div>
											<h5 class="mu-counter-name">Chapters</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="1055">0</div>
											<h5 class="mu-counter-name">Active Readers</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-trophy" aria-hidden="true"></i>
											<div class="counter-value" data-count="03">0</div>
											<h5 class="mu-counter-name">Got Awards</h5>
										</div>
									</div>
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->
 


      
		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Book Overview</h2>
								<span class="mu-header-dot"></span>
								<p>Read all the latest books free by register now!!!</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">
								@foreach($pbook as $key=>$data)
									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i aria-hidden="true"></i>
												<img style=" padding:1px;" src="{{url('/uploads/book_picture/'.$data->book_image)}}" class="img-radius" alt="book-Image">
											</span>
											<h4>{{$data->book_name}}</h4>
											<p>
											{{$data->addition}}<br>
											{{$data->author_name}}<br>
											{{$data->year}}<br>
											{{$data->book}}<br>
																		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Read
</button>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 dawnload
</button>
											</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									@endforeach

								

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->

     
   @guest
		<!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Check Out Our Video Review</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Video Review Content -->
							<div class="mu-video-review-content">
								<iframe class="mu-video-iframe" width="100%" height="480" src="https://www.youtube.com/embed/T4ySAlBt2Ug" frameborder="0" allowfullscreen></iframe>
							</div>
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review -->

		<!-- Start Author -->
		<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">About The Author</h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Author Content -->
							<div class="mu-author-content">
								<div class="row">
									<div class="col-md-6">
										<div class="mu-author-image">
											<img style=" height: 400px;width=600px;" src="{{asset('/frontend/assets/images/Rabindranath_Tagore.jpg')}}" alt="Author Image">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mu-author-info">
											<h3>Rabindranath Tagore</h3>
											<p>Rabindranath Tagore, Bengali Rabīndranāth Ṭhākur, (born May 7, 1861, Calcutta [now Kolkata], India—died August 7, 1941, Calcutta), Bengali poet, short-story writer, song composer, playwright, essayist, and painter who introduced new prose and verse forms and the use of colloquial language into Bengali literature, thereby freeing it from traditional models based on classical Sanskrit. He was highly influential in introducing Indian culture to the West and vice versa, and he is generally regarded as the outstanding creative artist of early 20th-century India. In 1913 he became the first non-European to receive the Nobel Prize for Literature.</p>

										
											<img class="mu-author-sign" src="{{asset('/frontend/assets/images/singofrobi.png')}}" alt="Author Signature">

											<div class="mu-author-social">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- End Author Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Author -->

		<!-- Start Pricing -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Subscription </h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>
						
							<!-- Start Pricing Content -->
							<div class="mu-pricing-content">
								<div class="row">
								@foreach($sub as $key=>$data)
									<!-- Pricing Single Content -->
									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single">

											<div class="mu-pricing-single-head">
												<h4>{{$data->name}}</h4>
												<p class="mu-price-tag">
													<span>৳</span> {{$data->price}}
												</p>
											</div>

											<ul class="mu-price-feature">
												<li> you can download {{$data->number_of_download}} </li>
												<li> duration is {{$data->duration}} month </li>
												<li> {{$data->description}} </li>
												<li> Lorem ipsum dolor sit amet. </li>
											</ul>

											<div class="mu-pricing-single-footer">
												<a href="#" class="mu-order-btn">Register Now!</a>
											</div>

										</div>
									</div>
									<!-- / Pricing Single Content -->
									@endforeach
									
								


								</div>
							</div>
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->
		@endguest
		@auth
		<!-- Start Pricing -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Subscription </h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>
						
							<!-- Start Pricing Content -->
							<div class="mu-pricing-content">
								<div class="row">
								@foreach($sub as $key=>$data)
									<!-- Pricing Single Content -->
									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single">

											<div class="mu-pricing-single-head">
												<h4>{{$data->name}}</h4>
												<p class="mu-price-tag">
													<span>৳</span> {{$data->price}}
												</p>
											</div>

											<ul class="mu-price-feature">
												<li> you can download {{$data->number_of_download}} </li>
												<li> duration is {{$data->duration}} month </li>
												<li> {{$data->description}} </li>
												<li> Lorem ipsum dolor sit amet. </li>
											</ul>

											<div class="mu-pricing-single-footer">
												<a href="#" class="mu-order-btn">Subscribe Now!</a>
											</div>

										</div>
									</div>
									<!-- / Pricing Single Content -->
									@endforeach
									
								


								</div>
							</div>
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->
		<!-- Start my library -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<div class="mu-heading-area">
							<h1><a class="mu-heading-title" href="{{route('reader.mylibrary')}}">My Library</a></h1>
								<h2 class="mu-heading-title">Some Latest Topic </h2>
								
								<span class="mu-header-dot"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">
                                @foreach($book as $data)    
									<li>
										<p>{{$data->description}}"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="{{asset('/frontend/assets/images/reader-1.jpg')}}" alt="img">
										<h5 class="mu-rt-name"> Author Name:</h5>
										<span class="mu-rt-title">Topic Name:{{$data->topic_name}}</span>
									</li>
									@endforeach
								
									
								</ul>
							</div>

                                  
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End my library -->
		@endauth
        @guest
		<!-- Start Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">What Our Readers Says</h2>
								<span class="mu-header-dot"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="{{asset('/frontend/assets/images/reader-1.jpg')}}" alt="img">
										<h5 class="mu-rt-name"> - Alice Boga</h5>
										<span class="mu-rt-title">CEO, Apple Inc.</span>
									</li>

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="{{asset('/frontend/assets/images/reader-2.jpg')}}" alt="img">
										<h5 class="mu-rt-name"> - Jhon Doe</h5>
										<span class="mu-rt-title">Director, Google Inc.</span>
									</li>

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="{{asset('/frontend/assets/images/reader-3.jpg')}}" alt="img">
										<h5 class="mu-rt-name"> - Jessica Doe</h5>
										<span class="mu-rt-title">Web Developer</span>
									</li>

								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials -->
		@endguest
		@auth
	
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Drop Us A Review </h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">

								<div ></div>
								<form  method="post" action="{{route('message.create')}}" enctype="multipart/form-data"  class="mu-contact-form">
									@csrf
									<div class="form-group">                
										<input type="text" value="{{auth()->user()->name}}"class="form-control"  id="name" name="name" required>
									</div>
									<div class="form-group">                
										<input type="email" value="{{auth()->user()->email}}"class="form-control" placeholder="Enter Email" id="email" name="email" required>
									</div>              
									<div class="form-group">
										<textarea class="form-control" placeholder="Write Message" id="message" name="message" required></textarea>
									</div>
									<button type="submit" class="mu-send-msg-btn"> <span>Send</span> </button>
						        </form>

							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->
		@endauth
@guest
		<!-- Start Google Map -->
		<section id="mu-google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589888.4396405783!2d-82.41588603632052!3d32.866951223053896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f9f727a4ed30eb%3A0xf2139b0c5c7ae1ec!2sDooley+Branch+Rd%2C+Millen%2C+GA+30442%2C+USA!5e0!3m2!1sen!2sbd!4v1497376364225" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
		<!-- End Google Map -->





        @endguest




    
    @stop