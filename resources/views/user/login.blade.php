@extends('master.master')

@section('body')
<!--login-->
<div class="container" style="background-color: #FFFFFF;">
	<div class="form-login-signup" >
		<h3 id="text-login">Login E-Learning</h3>
		<div class="border-login">
			<!--login gg fb-->
			<div id="border-gg-fb">
				<a href="#"><img src="source/image/googlelg.png" alt=""></a>
				<a href="#"><img src="source/image/fblg.png" alt=""></a>
			</div>
			<!--/login gg fb-->
			<br>
			<!--login main-->
			<form action="Login_SignUp_submit" method="get" accept-charset="utf-8">
				<div class="form-group">
					<label class="form-login">Email</label>
					<input class="form-login form-control" type="text" name="" placeholder="you@example.com">
				</div>
				<div class="form-group ">
					<label class="form-login">Password</label>
					<input class="form-login form-control" type="text" name="" placeholder="*****">
				</div>
				<div id="btnlogin">
					<button class="btn colr" type="sybmit">Log in</button>
					<a href="#">forgot password?</a>
				</div>
			</form>
			<!--/login main-->
		</div>
		<!--dont acc-->
		<div class="border-login">
			<div id="dont-acc">
				<span>Don't have account?</span>
				<a href="#"email me">Sign Up</a>
			</div>
		</div>
	</div>
</div>
<!--end login-->
@endsection

@section('login-signin')
    @include('master.btnlogin')
@endsection