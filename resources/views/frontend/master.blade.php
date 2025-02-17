<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ebooks</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('/frontend/assets/images/favicon.ico')}}"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('/frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{asset('/frontend/assets/css/slick.css')}}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('/frontend/assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('/frontend/assets/style.css')}}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
 
 
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   	
     <!-- Start Header -->
     
     @include('frontend.partials.header')
     
	<!-- End Header -->

 
	<!-- Start Featured Slider -->

  @include('frontend.partials.slider')
	
	<!-- Start Featured Slider -->
  
	
	<!-- Start main content -->
		
	<main role="main">

   @yield ('main')

	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
   @include('frontend.partials.footer')
	<!-- End footer -->

	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    
    <script src="{{asset('/frontend/assets/js/bootstrap.min.js')}}"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{asset('/frontend/assets/js/slick.min.js')}}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{asset('/frontend/assets/js/counter.js')}}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{asset('/frontend/assets/js/app.js')}}"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{asset('/frontend/assets/js/custom.js')}}"></script>
	
    
  </body>
</html>