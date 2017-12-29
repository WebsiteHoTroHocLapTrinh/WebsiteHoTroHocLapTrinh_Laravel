@extends('layout.master')

@section('body')
<!--sign up-->
<div class="container" style="background-color: #FFFFFF;">
	<div class="form-login-signup" >
		<h3 id="text-login">Đăng Ký <br> E-Learning</h3>
		<div class="border-login">
			<!--sign up gg fb-->
			<div id="border-gg-fb">
				<a href="#"><img src="image/googlelg.png" alt=""></a>
				<a href="#"><img src="image/fblg.png" alt=""></a>
			</div>
			<!--/sign up gg fb-->
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
			<!--sign up main-->
			<form action="register" method="POST" accept-charset="utf-8">
				{{ csrf_field() }}
				<div class="form-group">
					<label class="form-login">Tên Hiển Thị</label>
					<input class="form-login form-control" type="text" name="name" placeholder="Jonh" value="{{ old('name') }}">
				</div>
				<div class="form-group">
					<label class="form-login">Email</label>
					<input class="form-login form-control" type="email" name="email" placeholder="you@example.com" value="{{ old('email') }}">
				</div>
				<div class="form-group ">
					<label class="form-login">Mật Khẩu</label>
					<input class="form-login form-control" type="password" name="password" placeholder="*****">
				</div>
				<div class="form-group">
					<label class="form-login">Nhập Lại Mật Khẩu</label>
					<input class="form-login form-control" type="password" name="confirm_password" placeholder="*****">
				</div>
				<div id="btn-Signup">
					<button class="btn colr policy" type="submit">Đăng Ký</button>
					<span class="policy">Bằng cách đăng ký, bạn đồng ý với chính sách bảo mật và điều khoản dịch vụ của chúng tôi.</span>
				</div>
			</form>
			<!--/sign up main-->
		</div>
		<!--have acc-->
		<div class="border-login">
			<div id="dont-acc">
				<span>Bạn đã có tài khoản ?</span>
				<a href="{{ route('login') }}" >Đăng nhập ngay</a>
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