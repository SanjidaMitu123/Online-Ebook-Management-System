	<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> EBOOKS</a>

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">HOME</a></li>
							
					        <li><a href="#mu-book-overview">OVERVIEW</a></li>
                  @guest
					        <li><a href="#mu-author">AUTHOR</a></li>
                  @endguest
				            <li><a href="#mu-pricing">SUBSCRIPTION</a></li>
                    @guest
                            <li><a href="#mu-testimonials">TESTIMONIALS</a></li>
                            <li><a href="#mu-contact">CONTACT</a></li>
                            @endguest
						   
							
              @guest
              
              
              <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">LOGIN</a>
    <div class="dropdown-menu">
    <a style="color:#ff3300;"class="dropdown-item" href="{{route('dashboard.admin')}}">Admin LOGIN</a>
      <a style="color:#ff3300;"class="dropdown-item" href="{{route('dashboard.admin')}}">Author LOGIN </a>
      
      <div class="dropdown-divider">
      </div>
      <a style="color:#ff3300;"class="dropdown-item" href="{{route('loginshow')}}">Reader LOGIN</a>
      
    </div>
  </li>
							<li>
							<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  REGISTRATION
</button>
							
							</li>
							@endguest
              @auth
              <li><a href="#mu-testimonials">MY LIBRARY</a></li>
               
              <li><a href="{{route('reader.profile')}}">PROFILE</a></li>
							<li>
            <a href="{{route('userlogout')}}" class="btn btn-primary">
                LOGOUT
            </a>
							
							</li>
							@endauth


				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->




@guest

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



	  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="LOGIN" aria-selected="true">Reader</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="resgistration" aria-selected="false">Author</a>
  </li>
</ul>


<div class="tab-content" id="myTabContent">


  <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
                       <form action="{{route('reader.registration')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="phone_no">phone number:</label>
                                <input name="phone_no" type="number" class="form-control" id="phone_no" placeholder="Enter your valide phone number" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Upload User Image:</label>
                                <input name="image" type="file" class="form-control" id="file" required>
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
						</div>


  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <form method="post" action="{{route('author.registration')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required>
                            </div>
                            
                           
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input name="address" type="text" class="form-control" id="address" placeholder="Enter your address" required>
                            </div>
                            <div class="form-group">
                                <label for="qualification">Qualification:</label>
                                <input name="qualification" type="text" class="form-control" id="qualification" placeholder="Enter your qualification" required>
                            </div>
                            <div class="form-group">
                                <label for="no_of_books_published">Number of Book you published</label>
                                <input name="no_of_books_published" type="text" class="form-control" id="no_of_books_published" placeholder="Enter number of books you have published" required>
                            </div>
                            <div class="form-group">
                                <label for="about_books">Write Something About Your Books</label>
                                <input name="about_books" type="text" class="form-control" id="about_books" placeholder="Write Something About Your Books" required>
                            </div>
                            <div class="form-group">
                                <label for="add_book">Add your published  books:</label>
                                <input name="add_book" type="file" class="form-control" id="add_book" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>


                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_on">Phone Number:</label>
                                <input name="phone_on" type="number" class="form-control" id="phone_on" placeholder="Enter name" required>
                            </div>

                            <div class="form-group">
                                <label for="file">Upload your Image:</label>
                                <input name="image" type="file" class="form-control" id="file" required>
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
  
  </div>
 
</div>

      </div>
      <div class="modal-footer">
        Thankyou for Registration
      </div>
    </div>
  </div>
</div>

@endguest