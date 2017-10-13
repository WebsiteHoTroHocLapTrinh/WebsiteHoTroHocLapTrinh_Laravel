@extends('master.master')

@section('body')
<!--sign up-->
<div class="container" style="background-color: #FFFFFF;">
	<div class="form-login-signup" >
		<h3 id="text-login">Sign up E-Learning</h3>
		<div class="border-login">
			<!--sign up gg fb-->
			<div id="border-gg-fb">
				<a href="#"><img src="image/googlelg.png" alt=""></a>
				<a href="#"><img src="image/fblg.png" alt=""></a>
			</div>
			<!--/sign up gg fb-->
			<br>
			<!--sign up main-->
			<form action="Login_SignUp_submit" method="get" accept-charset="utf-8">
				<div class="form-group">
					<label class="form-login">Display Name</label>
					<input class="form-login form-control" type="text" name="" placeholder="Jonh">
				</div>
				<div class="form-group">
					<label class="form-login">Email</label>
					<input class="form-login form-control" type="text" name="" placeholder="you@example.com">
				</div>
				<div class="form-group ">
					<label class="form-login">Password</label>
					<input class="form-login form-control" type="text" name="" placeholder="*****">
				</div>
				<div class="form-group">
					<label class="form-login">Confirm Password</label>
					<input class="form-login form-control" type="text" name="" placeholder="*****">
				</div>
				<div id="btn-Signup">
					<button class="btn colr policy" type="sybmit">Sign Up</button>
					<span class="policy">By registering, you agree to the privacy policy and terms of service.</span>
				</div>
			</form>
			<!--/sign up main-->
		</div>
		<!--have acc-->
		<div class="border-login">
			<div id="dont-acc">
				<span>Already have an account?</span>
				<a href="#"email me">Log in</a>
			</div>
		</div>
	</div>
</div>
<!--end sign up-->
@endsection

@section('title')
    {{ "Đăng Ký" }}
@endsection

@section('css')
    {{-- expr --}}
@endsection

@section('script')
    {{-- expr --}}
@endsection