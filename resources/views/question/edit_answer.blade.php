
@extends('layout.master')

@section('body')
<!-- Content -->
<div class="content">
	<div class="container content-card">
		<div class="detail-right">
			<div class="question-detail-title">
				{{ $question->title }}
			</div>
			<div class="question-detail-content">
				{!! $question->content !!}
			</div>
			<div class="list-tag">
				@foreach($question->tags as $tag)
				<div class="tag">
					{{ $tag->name }}
				</div>
				@endforeach
			</div>
			<br>
			<br>
		</div>
		<div class="content-edit-answer">
			<p style="color: #14B1E4; font-size: 15px;">Câu trả lời:</p>
			<form id="form-edit-answer" action="answer/edit/{{ $answer->id }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea id="edit-answer" class="form-control tinymce" name="content_edit_answer" rows="15">{{ $answer->content }}</textarea>
				</div>
				<div class="float-right">
					<button id="btn-submit-edit-answer" class="btn btn-primary btn-sm mr-2">Update</button>
					<a href="{{ session('previousURLEditAnswer') }}"><button type="button"  class="btn btn-danger btn-sm">Hủy</button></a>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- end Content -->
@endsection

@section('title')
	{{ "Chỉnh sửa câu trả lời" }}
@endsection

@section('css')
<link rel="stylesheet" href="css/jquery.sweet-modal.min.css" />
@endsection

@section('script')
<!-- TinyMCE -->
<script type="text/javascript" src="admin_asset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="admin_asset/tinymce/init_tinymce.js"></script> 
<script src="js/jquery.sweet-modal.min.js"></script>
<script type="text/javascript ">
	
	$(document).ready(function(){

		$('#btn-submit-edit-answer').click(function(){
			var content = tinymce.get('edit-answer').getContent();
       		// $('#' + 'your_editor_id').html( tinymce.get('your_editor_id').getContent() );
       		if((content.length <= 0)){
       			$('#form-edit-answer').submit(function(e){
       				e.preventDefault();
       			});
       			$.sweetModal({
       				content: 'Bạn chưa nhập nội dung',
       				icon: $.sweetModal.ICON_WARNING
       			});
       		}
       		else{
       			document.getElementById("form-edit-answer").submit();
       		}
       	})

	});
</script>
@endsection

