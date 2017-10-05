@extends('master.master')

@section('body')
<!--profile-->
<div class="container content-card" style="background-color: #FFFFFF;">
	<!--edit profile-->
	<div class="row">
		<div class="col-lg-4">
			<div class="edit-avatar">
				<div class="edit-body">
					<div class="edit-title">
						Edit Photo
					</div>
					<div class="photo">
						<img src="source/image/avata.png" alt="" class="rounded-circle">
					</div>
					<div class="text">
						<span class="text-muted">Profile photo will be changed automatically</span>
					</div>
					<div class="btn-upload">
						<button class="btn btn-primary button-upload">
							<label for="upload-photo">Upload new photo</label>
							<input type="file" name="photo" id="upload-photo" />
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="edit-info">
				<div class="head-title">
					Edit Account
				</div>
				<div class="title-info">
					Personal Information
				</div>
				<div class="info">
					<form action="edit_user_submit" method="get" accept-charset="utf-8">
						<div class="form-group">
							<label for="Displayname">Tên hiển thị:</label>
							<input type="text" class="form-control" id="Displayname" placeholder="">
						</div>
						<div class="form-group">
							<label for="title">Title:</label>
							<input type="text" class="form-control" id="title" placeholder="">
						</div>
						<div class="form-group">
							<label for="local">Vị trí:</label>
							<input type="text" class="form-control" id="local" placeholder="">
						</div>
						<div class="form-group">
							<label for="job">Nghề nghiệp:</label>
							<input type="text" class="form-control" id="job" placeholder="">
						</div>
						<div class="form-group">
							<label for="about">About:</label>
							<textarea id="about" class="form-control ckeditor"></textarea>
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
					<form action="edit_user_submit" method="get" accept-charset="utf-8">
						<div class="form-group">
							<label for="old">Old PassWord:</label>
							<input type="passwprd" class="form-control" id="old" placeholder="*****">
						</div>
						<div class="form-group">
							<label for="new">New PassWord:</label>
							<input type="passwprd" class="form-control" id="new" placeholder="*****">
						</div>
						<div class="form-group">
							<label for="confirm">Confirm PassWord:</label>
							<input type="passwprd" class="form-control" id="confirm" placeholder="*****">
						</div>
						<div class="btn-save-pass">
							<button class="btn btn-primary" type="">save</button>
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

@section('login-signin')
    @include('master.btnlogin')
@endsection