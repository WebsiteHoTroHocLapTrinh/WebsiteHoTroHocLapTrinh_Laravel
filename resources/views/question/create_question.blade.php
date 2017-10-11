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
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTagModal">
										<i class="fa fa-plus fa-fw"></i>
									</button>
									<small class="form-text text-muted">Nếu không thấy thẻ thích hợp, hãy giúp chúng tôi thêm chúng</small>
									<input type="text" name="" id="list-tag" hidden="">
								</div>
								<button type="submit" class="btn btn-primary btn-lg">Tạo câu hỏi mới</button>
							</form>
							<!-- Modal -->
							<div class="modal fade" id="addTagModal" tabindex="-1" role="dialog" aria-labelledby="addTagModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<form>
											<div class="modal-header">
												<h1 class="modal-title">Thêm Thẻ Mới</h1>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<label>Tên Thẻ</label>
													<input type="text" class="form-control" placeholder="Nhập tên thẻ">
													<small class="form-text text-muted">Hãy nhập tên thẻ ngắn gọn, xúc tích</small>
												</div>
												<div class="form-group">
													<label>Mô Tả</label>
													<textarea class="form-control" rows="5" placeholder="Nhập mô tả cho thẻ"></textarea>
												</div>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
												<button type="button" class="btn btn-primary">Lưu</button>
											</div>
										</form>
									</div>
								</div>
							</div>
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

@section('css')
<link rel="stylesheet" type="text/css" href="source/bootstrap-tagsinput/bootstrap-tagsinput.css">
@endsection

@section('script')
<script type="text/javascript" src="source/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="source/bootstrap-tagsinput/custom-bootstrap-tagsinput.js"></script>
<script type="text/javascript" src="source/js/typeahead.bundle.js"></script>
<script type="text/javascript">
	var tags = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		local: [{ "id": 1, "name": "PHP" },
		{ "id": 2, "name": "C#" },
		{ "id": 3, "name": "AngularJS" },
		{ "id": 4, "name": "Android" },
		{ "id": 5, "name": "Java" },
		{ "id": 6, "name": "C++" },
		{ "id": 7, "name": "Python" },
		{ "id": 8, "name": "MongoDB" },
		{ "id": 9, "name": "SQL" },
		{ "id": 10, "name": "MySQL" },
		{ "id": 11, "name": "Laravel" },
		{ "id": 12, "name": "NodeJS" },
		{ "id": 13, "name": "Reactive" },
		{ "id": 14, "name": "ExpressJS" },
		{ "id": 15, "name": "iOS" },
		{ "id": 16, "name": "CSS" },
		{ "id": 17, "name": "JavaScript" },
		{ "id": 18, "name": "ASP.NET" },
		{ "id": 19, "name": "R" },
		{ "id": 20, "name": "HTML" },
		]
	});
	tags.initialize();

	var elt = $('input[data-role="tagsinput"]');
	elt.tagsinput({
		itemValue: 'id',
		itemText: 'name',
		typeaheadjs: {
			name: 'tags',
			displayKey: 'name',
			source: tags.ttAdapter()
		}
	});
</script>
@endsection