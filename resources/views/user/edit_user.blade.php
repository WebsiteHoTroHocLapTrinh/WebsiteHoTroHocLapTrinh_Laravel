@extends('layout.master')

@section('body')
<!--profile-->
<div class="container content-card" style="background-color: #FFFFFF;">
	<!--edit profile-->
	<div class="row">
		<div class="col-lg-4">
			<form id="form_update_avatar" action="user/edit-avatar" method="POST" enctype="multipart/form-data"  accept-charset="utf-8">
				{{ csrf_field() }}
				<div class="edit-avatar">
					<div class="edit-body">
						<div class="edit-title">
							Edit Photo
						</div>
						<div class="photo">
							<img id="img_avatar" src="image/avatar_users/{{ $user->avatar }}" alt="" class="rounded-circle">
						</div>
						<div class="text">
							<span class="text-muted">Profile photo will be changed automatically</span>
						</div>
						<div class="btn-upload">
							<button type="button" class="btn btn-primary button-upload">
								<label for="upload-photo">Upload new photo</label>
								<input type="file" name="avatar" id="upload-photo" onchange="readURL(this);"/>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-8">
			@if (count($errors) > 0)
				<div class="alert alert-warning">
					@foreach ($errors->all() as $err)
					{{ $err }} <br>
					@endforeach
				</div>
			@endif
			@if (session('thongbao'))
			<div class="alert alert-success">
				{{ session('thongbao') }}
			</div>
			@endif
			<div class="edit-info">
				<div class="head-title">
					Edit Account
				</div>
				<div class="title-info">
					Personal Information
				</div>
				<div class="info">
					<form action="user/edit-info" method="POST" accept-charset="utf-8">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="Displayname">Tên hiển thị:</label>
							<input type="text" class="form-control" name="name" id="Displayname" value="{{ $user->name }}">
						</div>
						<div class="form-group">
							<label for="title">Title:</label>
							<input type="text" class="form-control" name="status" id="title"  value="{{ $user->status }}">
						</div>
						<div class="form-group">
							<label for="local">Vị trí:</label>
							<input type="text" class="form-control" name="location" id="local" value="{{ $user->location }}" >
						</div>
						<div class="form-group">
							<label for="job">Nghề nghiệp:</label>
							<input type="text" class="form-control" name="job" id="job" value="{{ $user->job }}">
						</div>
						<div class="form-group">
							<label for="about">About:</label>
							<textarea id="about" class="form-control tinymce" name="about" value="">{{ $user->about }}</textarea>
						</div>
						<div class="btn-save-info">
							<button class="btn btn-primary" type="">save</button>
						</div>
					</form>
				</div>
				<div class="title-change-password">
					Change Password
				</div>
				<div class="change-password">
					<form action="user/edit-changepass" method="POST" accept-charset="utf-8">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="old">Old PassWord:</label>
							<input name="oldpass" type="password" class="form-control" id="old" placeholder="*****">
						</div>
						<div class="form-group">
							<label for="new">New PassWord:</label>
							<input name="newpass" type="password" class="form-control" id="new" placeholder="*****">
						</div>
						<div class="form-group">
							<label for="confirm">Confirm PassWord:</label>
							<input name="confirm" type="password" class="form-control" id="confirm" placeholder="*****">
						</div>
						<div class="btn-save-pass">
							<button class="btn btn-primary" type="submit">save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--/edit profile-->
</div>
<!--end frofile-->
@endsection

@section('title')
	{{ "Chỉnh Sửa Người Dùng" }}
@endsection

@section('css')
	{{-- expr --}}
@endsection

@section('script')
<!-- TinyMCE -->
<script type="text/javascript" src="admin_asset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="admin_asset/tinymce/init_tinymce.js"></script> 
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#img_avatar')
				.attr('src', e.target.result)
			};

			reader.readAsDataURL(input.files[0]);
			document.getElementById("form_update_avatar").submit();
		}
	}
</script>	
@endsection