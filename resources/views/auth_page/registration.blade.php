<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="{{asset('creative')}}/assets/favicon.ico" />

	<link href="{{asset('log_in')}}/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('log_in')}}/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('log_in')}}/css/style.css">

	</head>
	<body style="background-color:#C67F43;">
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #04</h2>
				</div>
			</div> -->
			<div class="row justify-content-center ">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img order-2" style="background-image: url(scarwash/signup.png);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<!-- <div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div> -->
							<form class="signup-form" action="{{route('registration.store')}}" method="POST">
                                @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="name">Birth Date</label>
			      			<input type="date" class="form-control" id="date" name="date" placeholder="Birth Date" max="2015-01-01" min="1990-01-01" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
		            </div>
                    
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
		            </div>
		          </form>
		          <p class="text-center">Already have account? <a href="{{route('login.index')}}">Sign in</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('log_in')}}/js/jquery.min.js"></script>
  <script src="{{asset('log_in')}}/js/popper.js"></script>
  <script src="{{asset('log_in')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('log_in')}}/js/main.js"></script>

	</body>
</html>

