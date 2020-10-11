@extends('layouts.app')

@section('content')
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
					<form action="/login" method="post" class="signin-form">
					@csrf
						<div class="form-input">
							<input type="text" name="name" id="name" placeholder="Username" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" id="password" placeholder="Password" required="">
						</div>
						<label class="check-remaind">
							<input type="checkbox">
							<span class="checkmark"></span>
							<p class="remember">Remember me</p>
						</label>
						<button type="submit" name="submit" class="btn btn-primary theme-button mt-4">Log in</button>
						<div class="new-signup">
							<a href="#reload" class="signuplink">Forgot username or password?</a>
						</div>
						@if(count($errors))
							<div class="form-group">
								<div class="alert alert-danger">
									<ul>
										@foreach($errors->all() as $error)
											<li>{{$error}}</li>
										@endforeach
									</ul>
								</div>
							</div>
						@endif
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