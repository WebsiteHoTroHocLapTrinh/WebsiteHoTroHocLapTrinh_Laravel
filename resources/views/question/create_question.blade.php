@extends('master.master')

@section('body')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="content-card">
						<div class="note-content">
							<h1 style="text-align: center;">Tạo câu hỏi mới</h1>
							<br>
							<form>
								<div class="form-group">
									<label>Tiêu Đề</label>
									<input type="text" class="form-control" placeholder="Nhập tiêu đề câu hỏi">
									<small class="form-text text-muted">Tiêu đề phải dễ hình dung về vấn đề cần giải quết</small>
								</div>
								<div class="form-group">
									<label>Nội Dung</label>
									<textarea class="form-control ckeditor" name="content" rows="10"></textarea>
								</div>
								<div class="form-group">
									<label>Thẻ</label>
									<input type="text" class="form-control" placeholder="Nhập các thẻ liên quan" data-role="tagsinput">
									<small class="form-text text-muted">Thẻ liên quan giúp mọi người quan tâm đến lĩnh vực đó hỗ trợ bạn tốt hơn</small>
									<input type="text" name="" id="list-tag" hidden="">
								</div>
								<button type="submit" class="btn btn-primary btn-lg">Tạo câu hỏi mới</button>
							</form>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- end Content -->
@endsection

@section('login-signin')
    @include('master.btnlogin')
@endsection