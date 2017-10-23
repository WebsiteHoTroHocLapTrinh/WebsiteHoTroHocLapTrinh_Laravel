@extends('layout.master')

@section('body')
<!--login-->
<div class="container" style="background-color: #FFFFFF;">
	<div class="form-login-signup" >
		<h3 id="text-login">Login E-Learning</h3>
		<div class="border-login">
			<!--login gg fb-->
			<div id="border-gg-fb">
				<a href="#"><img src="image/googlelg.png" alt=""></a>
				<a href="#"><img src="image/fblg.png" alt=""></a>
			</div>
			<!--/login gg fb-->
			<br>
			@if (count($errors) > 0)
	            <div class="alert alert-warning">
	                @foreach ($errors->all() as $err)
	                {{ $err }} <br>
	                @endforeach
	            </div>
	       	@endif
	       	@if (session('thongbao'))
	            <div class="alert alert-danger">
	                {{ session('thongbao') }}
	            </div>
	      	@endif
			<!--login main-->
			<form action="login" method="POST" accept-charset="utf-8">
				{{ csrf_field() }}
				<div class="form-group">
					<label class="form-login">Email</label>
					<input class="form-login form-control" type="email" name="email" placeholder="you@example.com" value="{{ old('email') }}">
				</div>
				<div class="form-group ">
					<label class="form-login">Password</label>
					<input class="form-login form-control" type="password" name="password" placeholder="*****">
				</div>
				<input style="display: none;" type="text" name="previousURL" value="{{ $previousURL }}">
				<div id="btnlogin">
					<button class="btn colr" type="submit">Log in</button>
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

@section('title')
    {{ "Đăng Nhập" }}
@endsection

@section('css')
    {{-- expr --}}
@endsection

@section('script')
    {{-- expr --}}
@endsection