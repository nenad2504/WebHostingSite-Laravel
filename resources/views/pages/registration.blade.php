@extends('layouts.app')

@section('content')
 <!-- Signup form -->
 <section class="w3l-signup">
		<div class="overlay">
			<div class="wrapper">
				<div class="logo">
					<a class="brand-logo" href="index.html">Snow signup form</a>
				</div>
				<div class="form-section">
					<h3>Sign up</h3>
					<form action="/register" method="post" class="signin-form">
					@csrf
						<div class="form-input">
							<input type="text" name="name" placeholder="Username" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="email" name="email" placeholder="Email" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" required="">
						</div>
						<button type="submit" name="submit" class="btn btn-primary theme-button mt-4">Sign Up</button>
					</form><p class="signup">Already a customer? <a href="{{ url('/login') }}" class="signuplink">Login now</a></p>
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>

		<!-- copyright -->
		<div class="copy-right">
			<p>&copy; 2020 Snow Signup Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3Layouts</a></p>
		</div>
		<!-- //copyright -->
	</section>

	<!-- /Signup form -->
@endsection