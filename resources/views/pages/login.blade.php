@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('img/register1.jpg')}})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Sign Up</h1>
          <span class="subheading">Have questions? I have answers.</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- login form -->
<section class="w3l-login">
		<div class="overlay">
			<div class="wrapper">
				<div class="logo">
					<a class="brand-logo" href="index.html">Snow login form</a>
				</div>
				<div class="form-section">
					<h3>Login</h3>
					<h6>To continue with Us</h6>
					<form action="#" method="post" class="signin-form">
						<div class="form-input">
							<input type="text" name="Username" placeholder="Username" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" required="">
						</div>
						<label class="check-remaind">
							<input type="checkbox">
							<span class="checkmark"></span>
							<p class="remember">Remember me</p>
						</label>
						<button type="submit" class="btn btn-primary theme-button mt-4">Log in</button>
						<div class="new-signup">
							<a href="#reload" class="signuplink">Forgot username or password?</a>
						</div>
					</form>
					<p class="signup">Don’t have account yet? <a href="{{ url('/register') }}" class="signuplink">Sign Up</a></p>
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>

		<!-- copyright -->
		<div class="copy-right">
			<p>&copy; 2020 Snow Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3Layouts</a></p>
		</div>
		<!-- //copyright -->
	</section>

	<!-- /login form -->
@endsection