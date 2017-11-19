@extends('layout.master')

@section('body')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="content-card">
						<div class="note-content">
							<h1 style="text-align: center;">Chỉnh sửa tài liệu <small>{{ $documentation->title }}</small></h1>
							<br>
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
							<form action="{{ route('edit-documentation', ['documentation_id' => $documentation->id]) }}" method="POST">
								{{ csrf_field() }}
								<div class="form-group">
									<label>Chủ Đề</label>
									<select class="form-control" name="subject">
										@foreach ($subjects as $sj)
											<option value="{{ $sj->id }}" 
												@if ($documentation->subject_id == $sj->id)
													{{ "selected" }}
												@endif
											>{{ $sj->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Tiêu Đề</label>
									<input type="text" class="form-control" placeholder="Nhập tiêu đề câu hỏi" name="title" value="{{ $documentation->title }}">
								</div>
								<div class="form-group">
									<label>Nội Dung</label>
									<textarea class="form-control tinymce" rows="10" name="content">{!! $documentation->content !!}</textarea>
								</div>
								<div class="form-group">
									<label>Link</label>
									<input type="url" class="form-control" placeholder="Dán đường link để tải tài liệu" name="link" value="{{ $documentation->link }}">
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
									<input type="text" id="list-tag" hidden="" name="list_tag">
								</div>
								<button type="submit" class="btn btn-primary btn-lg"> <span class="oi oi-task"></span> Chỉnh sửa tài liệu</button>
							</form>
							<!-- Modal -->
							<form action="{{ route('create-tag') }}" method="POST">
								{{ csrf_field() }}
								<div class="modal fade" id="addTagModal" tabindex="-1" role="dialog" aria-labelledby="addTagModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title">Thêm Thẻ Mới</h1>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<label>Tên Thẻ</label>
													<input type="text" class="form-control" placeholder="Nhập tên thẻ" name="name">
													<small class="form-text text-muted">Hãy nhập tên thẻ ngắn gọn, xúc tích</small>
												</div>
												<div class="form-group">
													<label>Mô Tả</label>
													<textarea class="form-control" rows="5" placeholder="Nhập mô tả cho thẻ" name="description"></textarea>
												</div>
											</div>
											<div class="modal-footer">
												<button type="reset" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
												<button type="submit" class="btn btn-primary">Lưu</button>
											</div>
										</div>
									</div>
								</div>
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

@section('title')
	{{ $documentation->title }}
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="bootstrap-tagsinput/bootstrap-tagsinput.css">
@endsection

@section('script')
<!-- TinyMCE -->
<script type="text/javascript" src="admin_asset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="admin_asset/tinymce/init_tinymce.js"></script> 
<script type="text/javascript" src="bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="bootstrap-tagsinput/custom-bootstrap-tagsinput.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.js"></script>
<script type="text/javascript">
	var tags = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		local: {!! $tags !!}
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

    var stringTags = {!! $documentation->tags !!}
    stringTags.forEach(function(item) {
        elt.tagsinput('add', item);
    });
</script>
@endsection