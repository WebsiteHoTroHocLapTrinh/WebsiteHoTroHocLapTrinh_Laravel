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
							<h1 style="text-align: center;">Chia sẻ tài liệu</h1>
							<br>
							<form>
								<div class="form-group">
									<label>Chủ Đề</label>
									<select class="form-control">
										<option value="0">Chủ đề</option>
										<option>Lập trình</option>
										<option>Microsoft Office</option>
										<option>IT & Phần mềm</option>
										<option>Đồ họa</option>
										<option>Thương mại điện tử</option>
										<option>Ngoại ngữ</option>
										<option>Kỹ năng mềm</option>
									</select>
								</div>
								<div class="form-group">
									<label>Tiêu Đề</label>
									<input type="text" class="form-control" placeholder="Nhập tiêu đề câu hỏi">
								</div>
								<div class="form-group">
									<label>Nội Dung</label>
									<textarea class="form-control ckeditor" name="content" rows="10"></textarea>
								</div>
								<div class="form-group">
									<label>Link</label>
									<input type="text" class="form-control" placeholder="Dán đường link để tải tài liệu">
								</div>
								<div class="form-group">
									<label>Thẻ</label>
									<input type="text" class="form-control" placeholder="Nhập các thẻ liên quan" data-role="tagsinput">
									<input type="text" name="" id="list-tag" hidden="">
								</div>
								<button type="submit" class="btn btn-primary btn-lg"> <span class="oi oi-task"></span> Gửi bài và đợi xác nhận</button>
							</form>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end Content -->
@endsection

<!--button login sign in-->
@section('login-signin')
@include('master.btnlogin')
@endsection
<!--end button login sign in-->