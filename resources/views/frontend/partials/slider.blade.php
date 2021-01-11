	<!-- Start Featured Slider -->

	<section id="mu-hero">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="{{asset('/frontend/assets/images/book1.jpg')}}" alt="Ebook img">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>eBook </h1>
			
						<p>you can find here latest ebooks.</p>
						<a href="#" class="mu-primary-btn">Download Now!</a>
						<span>*Avaliable in PDF .</span>
						@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $er)
                <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif
					</div>
				</div>	

			</div>
		</div>
	</section>
	
	<!-- Start Featured Slider -->