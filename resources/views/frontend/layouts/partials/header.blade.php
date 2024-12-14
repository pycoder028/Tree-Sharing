		<!-- Header -->

		<!-- Navbar -->
		<div class="header-nav">
			<div class="top-nav">
				<div class="float-right">
					<a href="" class="social-icon"><i class="fa fa-facebook"></i></a>
					<a href="" class="social-icon"><i class="fa fa-twitter"></i></a>
					<a href="" class="text-white mr-3"><i class="fa fa-info-circle"></i> About Us</a>

					<a href="{{ route('signup') }}" class="text-white mr-3"><i class="fa fa-user"></i> Sign Up</a>
					<a href="{{ route('signin') }}" class="text-white mr-3"><i class="fa fa-sign-in"></i> Sign In</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar ">
				<div class="container">
					<a class="navbar-brand" href="{{ route('index') }}">
						<img src="{{ asset('public/assets/images/logo.png') }}" class="logo-image">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">

							<li class="nav-item active">
								<a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#">Recent Uploads</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Tree Categories
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Category 1</a>
									<a class="dropdown-item" href="#">Category 2</a>
									<a class="dropdown-item" href="#">Category 3</a>
									<a class="dropdown-item" href="#">Category 4</a>
								</div>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Filter By
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Most Viewed</a>
									<a class="dropdown-item" href="#">Most Liked</a>
								</div>
							</li>
							
						</ul>
						<ul class="navbar-nav navbar-right mr-right">
							<li class="nav-item">
								<a href="{{ route('trees.upload') }}" class="btn btn-warning btn-upload"><i class="fa fa-upload"></i> Upload Your Tree</a>
							</li>

							<li class="nav-item">
								<a href="profile.html" class="">
									<img src="{{ asset('public/assets/images/users/default.png') }}" class="user-icon">
								</a>
							</li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Navbar -->

		<!-- End Header -->