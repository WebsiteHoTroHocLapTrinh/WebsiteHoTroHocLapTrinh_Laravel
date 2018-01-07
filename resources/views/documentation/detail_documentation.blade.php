@extends('layout.master')

@section('body')
<!--image header-->
@include('layout.imageHeader')
<!--end image header-->

<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="main-content">
					<div class="content-card">
						<div class="row">
							<div class="col-lg-1">
								<div class="detail-left">
									<div class="documentation-favorite-point">
										<p id="point-documentation">{{ $documentation->point_rating }}</p>
										@php
											$action_vote_doc = $documentation->votes->where('user_id', Auth::id())->first();
										@endphp
										<span id="favorite" onclick="VoteDocumentation()" class="oi oi-heart 
										@if (!is_null($action_vote_doc))
											{{ 'active-vote' }}
										@endif
										" style="display: block;"></span>
									</div>
								</div>
							</div>
							<div class="col-lg-11">
								<div class="detail-right">
									<div class="documentation-title">
										<p>{{ $documentation->title }}</p>
									</div>
									<div class="list-tag">
										@foreach($documentation->tags as $tag)
										<a href="{{ route('search-documentation') }}?list_tag={{ $tag->id }}">
											<div class="tag">
												{{ $tag->name }}
											</div>
										</a>
										@endforeach
									</div>
									<br>
									<br>
									@if(Auth::id() == $documentation->user_id)
									<a href="{{ route('edit-documentation', ['documentation_id' => $documentation->id]) }}" style="border-left: solid 1px black; padding-left: 10px; border-right: solid 1px black; padding-right: 10px;">Chỉnh sửa</a>
									<a href="{{ route('delete-documentation', ['documentation_id' => $documentation->id]) }}" style=" padding-left: 5px; border-right: solid 1px black; padding-right: 10px;" onclick="return confirm('Bạn có chắc là muốn xóa không?')">Xóa</a>
										@if (!$documentation->active)
											<a href="{{ route('restore-documentation', ['documentation_id' => $documentation->id]) }}" style=" padding-left: 5px; border-right: solid 1px black; padding-right: 10px;" onclick="return confirm('Bạn có chắc là muốn khôi phục không?')">Khôi phục</a>
										@endif
									@endif
								</div>
							</div>
						</div>
						<hr>
						<div class="documentation-content">
							{!! $documentation->content !!}
							<br>
							<br>
							<br>
							<div style="border-left: solid orange 10px;" class="alert alert-warning" role="alert">
								<strong>Link:</strong> <a href="{{ $documentation->link }}" target="_blank">{{ $documentation->title }}</a>
							</div>
						</div>

						<br>
						<br>
						<br>

					</div>
					<div class="content-card">
						<br>
						<div class="comments-container">
							@if (Auth::check())
								<!--create comment-->
								<div class="form-comment">
									<div>
										<div class="form-group">
											<textarea id="new-comment-doc" class="form-control" placeholder="Viết bình luận của bạn..." rows="2" onkeyup="stoppedTyping_Doc()"></textarea>
										</div>
										<button id="start_button_doc" onclick="PostAddCommentDocumentation()" class="btn btn-primary btn-sm float-right" disabled >Bình luận</button>
										<br>
										<br>
									</div>
								</div>
							@endif
							
							<!--list comments-->
							<div id="list-comments-doc">
								@foreach($documentation->comments->where('active', true)->sortBy('created_at')->take(3) as $cmt)
								<div id="delete-cmt-{{ $cmt->id }}">
									<div class="media">
										<!--img media-->
										<div class="mr-3">
											<img src="image/avatar_users/{{ $cmt->user->avatar }}" class="rounded-circle" width="30" height="30">
										</div>
										<!--body media-->
										<div class="media-body" style="font-size: 13px;">
											<div class="name-user-cmt">
												<a href="user/info/user_{{ $cmt->user_id }}">{{ $cmt->user->name }}</a> 
												<span class="text-muted">
													@if($cmt->created_at==$cmt->updated_at)
													đã bình luận vào {{ date('d-m-Y, h:i A', strtotime($cmt->created_at)) }}
													@else
													đã chỉnh sửa vào {{ date('d-m-Y, h:i A', strtotime($cmt->updated_at)) }}
													@endif
												</span>
											</div>
											<div id="{{ $cmt->id }}" class="row">
												<div class="col-lg-11">
													<div class="break-word">
														{{ $cmt->content }}
													</div>
												</div>
												<!--col edit-->
												<div class="col-lg-1">
													@if(Auth::id()==$cmt->user_id)
													<div class="dropdown-cmt">
														<div id="dropdownMenuLink" data-toggle="dropdown">
															<img src="image/three_dots.png" height="10" width="20">
														</div>

														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
															<a class="dropdown-item" href="javascript:Edit({{ $cmt->id }},'{{ $cmt->content }}');">Chỉnh sửa...</a>
															<a class="dropdown-item" href="javascript:DeleteComment({{ $cmt->id }});">Xóa...</a>
														</div>
													</div>
													@endif
												</div>
											</div>
										</div>
									</div>
									<hr>
								</div>
								@endforeach
								<!--img loading-->
								<div id="img_loading_cmt_doc">
									{{-- #code --}}
								</div>
								<!--view more-->
								<div id="comments-documentation" class="hidden">
									{{-- #code --}}
								</div>

								<div class="">
									<a id="more_cmt_doc" href="javascript:unhide('comments-documentation','more_cmt_doc', {{ $documentation->id }})" >@if(count($documentation->comments->where('active', true)) > 3){{ 'View more →' }}@endif</a>
								</div>
								<!--end view more-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="sub-content" >
					<div class="btn-documentation">
						<a style="text-decoration: none;" href="{{ route('create-documentation') }}"><button type="button" class="btn btn-success btn-block btn-lg">Chia sẽ tài liệu ngay !!!</button></a>
					</div>
					<div class="content-card">
						<div class="documentation-author">
							<div class="profile-card">
								<div class="profile-card-header">
									<div class="profile-card-title">
										{{ $documentation->user->name }}
									</div>
									<div class="profile-card-separator">

									</div>
									<div class="profile-card-description">
										{{ $documentation->user->job }}
									</div>
								</div>

								<div class="profile-card-footer">
									{{ $documentation->user->point_reputation }}
									<span class="oi oi-star"></span>
								</div>
								<div class="profile-card-avatar">
									<img src="image/avatar_users/{{ $documentation->user->avatar }}" class="rounded-circle" width="80" height="80">
								</div>
							</div>

							<div class="legend-hr-text">
								<hr class="legend-hr">

							</hr>
							<div class="legend-text">
								THÔNG TIN TÀI LIỆU
							</div>
						</div>
						<div class="info-content">
							<div class="info-content-release">
								<div class="row">
									<div class="col-lg-5 info-content-left">
										<p>Đã đăng</p>
									</div>
									<div class="col-lg-7 .info-content-right" style="text-align: right;">
										<p>{{ date('M d Y , h:i A', strtotime($documentation->created_at)) }}</p>
									</div>
								</div>
							</div>
							<div class="info-content-viewed">
								<div class="row">
									<div class="col-lg-5 info-content-left">
										<p>Đã xem</p>
									</div>
									<div class="col-lg-7 .info-content-right" style="text-align: right;">
										<p>{{ $documentation->view }} lần</p>
									</div>
								</div>
							</div>
							<div class="info-content-comment">
								<div class="row">
									<div class="col-lg-5 info-content-left">
										<p>Bình luận</p>
									</div>
									<div class="col-lg-7 .info-content-right" style="text-align: right;">
										<p>{{ count($documentation->comments) }} lượt</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="content-card">
					<div class="documentation-related">
						<div class="related-header">
							<p>Tài liệu liên quan</p>
						</div>
						<hr>
						<div class="related-content">
							@foreach ($top10_documentation_related as $doc_rl)
								<div class="related-documentation">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-documentation-left">
											{{ $doc_rl->point_rating }}
											{{-- <span class="oi oi-heart"></span> --}}
										</div>
										<div class="col-lg-9">
											<a href="{{ route('detail-documentation', ['documentation_id' => $doc_rl->id, 'documentation_url' => $doc_rl->title_url]) }}">{{ $doc_rl->title }}</a>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="content-card">
					<div class="documentation-related">
						<div class="related-header">
							<p>Chủ đề <br> {{ $documentation->subject->name }}</p>
						</div>
						<hr>
						<div class="related-content">
							@foreach ($documentation->subject->documentations->take(10)->sortByDesc('point_rating') as $doc_sj)
								<div class="related-documentation">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-documentation-left">
											{{ $doc_sj->point_rating }}
											{{-- <span class="oi oi-heart"></span> --}}
										</div>
										<div class="col-lg-9">
											<a href="{{ route('detail-documentation', ['documentation_id' => $doc_sj->id, 'documentation_url' => $doc_sj->title_url]) }}">{{ $doc_sj->title }}</a>
										</div>
									</div>
								</div>
							@endforeach
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
<link rel="stylesheet" href="css/jquery.sweet-modal.min.css" />
@endsection

@section('script')
<script src="js/jquery.sweet-modal.min.js"></script>
<script type="text/javascript">

    function Edit(id_cmt, content){
    	if(localStorage.getItem('id_cmt')){
    		var id_cmt_storage = localStorage.getItem('id_cmt');
    		var content_storage = localStorage.getItem('content');
    		$('#'+id_cmt_storage).html('<div class="col-lg-11">'+
											'<div class="">'+
												content_storage+
											'</div>'+
										'</div>'+
										
										'<div class="col-lg-1">'+
											'<div class="dropdown-cmt">'+
												'<div id="dropdownMenuLink" data-toggle="dropdown">'+
													'<img src="image/three_dots.png" height="10" width="20">'+
												'</div>'+

												'<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">'+
													'<a class="dropdown-item" href="javascript:Edit('+id_cmt_storage+','+'`'+content_storage+'`'+');">Chỉnh sửa...</a>'+
													'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt_storage+');">Xóa...</a>'+
												'</div>'+
											'</div>'+
										'</div>');
    	}

    	$('#'+id_cmt).html('<div class="col-lg-12">'+
	    						'<form accept-charset="utf-8">'+
									'<textarea id="content_new" class="form-control input-size">'+content+'</textarea>'+
									'<div class="float-right">'+
										'<a href="javascript:CancelEdit();"><span style="color: red; font-size: 15px;" class="oi oi-circle-x mr-2"></span></a>'+
										'<a href="javascript:PostEditComment()"><span style="color: green; font-size: 15px;" class="oi oi-circle-check"></span></a>'+
									'</div>'+
								'</form>'+
							'</div>');

        localStorage.setItem('id_cmt', id_cmt);
        localStorage.setItem('content', content);
    }

    function CancelEdit(){
    	var id_cmt_storage = localStorage.getItem('id_cmt');
		var content_storage = localStorage.getItem('content');
		$('#'+id_cmt_storage).html('<div class="col-lg-11">'+
										'<div class="">'+
											content_storage+
										'</div>'+
									'</div>'+
									
									'<div class="col-lg-1">'+
										'<div class="dropdown-cmt">'+
											'<div id="dropdownMenuLink" data-toggle="dropdown">'+
												'<img src="image/three_dots.png" height="10" width="20">'+
											'</div>'+

											'<div class="dropdown-menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">'+
												'<a class="dropdown-item" href="javascript:Edit('+id_cmt_storage+','+'`'+content_storage+'`'+');">Chỉnh sửa...</a>'+
												'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt_storage+');">Xóa...</a>'+
											'</div>'+
										'</div>'+
									'</div>');

		localStorage.removeItem('id_cmt');
		localStorage.removeItem('content');
    }

    function unhide(type, id_view_more, id_target){
    	var more_less = document.getElementById(id_view_more).innerHTML;
    	var url = '{{ route('detail-documentation', ['documentation_id' => $documentation->id, 'documentation_url' => $documentation->title_url]) }}';
    	
    	if(more_less=='View more →'){
    		if(type=='comments-documentation'){
    			$('#img_loading_cmt_doc').html('<img style="position: absolute; z-index: 100000; width: 100%; height:2px;" src="/image/loading.gif"/>');
    		}

    		$.ajax({
    			url : url,
    			data: {id_target: id_target, type: type},
    			cache: false
    		}).done(function (data) {
    			$("#"+type).html(data).toggle("slide");
    			if(type=='comments-documentation'){
    				$('#img_loading_cmt_doc').html('')
    			}
    		}).fail(function () {
    			$.sweetModal({
    				content: 'comment could not be loaded.',
    				title: 'Oh noes…',
    				icon: $.sweetModal.ICON_ERROR,

    				buttons: [
    				{
    					label: 'OK',
    					classes: 'redB'
    				}
    				]
    			});
    		});
    	}
    	else{
    		$('#'+type).slideToggle( "slow" );
    	}
    	 

		var item = document.getElementById(id_view_more);
		item.innerHTML = item.innerHTML === 'View more →' ? 'View less →' : 'View more →';
	}

	function PostEditComment() {
		var id_cmt = localStorage.getItem('id_cmt');
		var url = '{{ route('edit-comment') }}'+ '/' + id_cmt;
		var content_new = $('#content_new').val();
		if(content_new){
			$.ajax({
				type: "POST",
				url : url,
				data: {"_token":"{{ csrf_token() }}",content:content_new},
				cache: false
			}).done(function (data) {
				if(data['success']){
					$("#"+id_cmt).html('<div class="col-lg-11">'+
						'<div class="">'+
						content_new+
						'</div>'+
						'</div>'+

						'<div class="col-lg-1">'+
						'<div class="dropdown-cmt">'+
						'<div id="dropdownMenuLink" data-toggle="dropdown">'+
						'<img src="image/three_dots.png" height="10" width="20">'+
						'</div>'+

						'<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">'+
						'<a class="dropdown-item" href="javascript:Edit('+id_cmt+','+'`'+ content_new +'`'+');">Chỉnh sửa...</a>'+
						'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt+');">Xóa...</a>'+
						'</div>'+
						'</div>'+
						'</div>');

					localStorage.removeItem('id_cmt');
					localStorage.removeItem('content');
				}
				else{
					$.sweetModal({
						content: 'Phát hiện nghi vấn hack :))',
						icon: $.sweetModal.ICON_WARNING
					});
				}

			}).fail(function () {
				$.sweetModal({
					content: 'comment could not be updated',
					title: 'Oh noes…',
					icon: $.sweetModal.ICON_ERROR,

					buttons: [
					{
						label: 'Ok',
						classes: 'redB'
					}
					]
				});
			});
		}
		else{
			$.sweetModal({
				content: 'Bạn chưa nhập nội dung!',
				icon: $.sweetModal.ICON_WARNING
			});
		}
	}

	function stoppedTyping_Doc(){
        if($('#new-comment-doc').val().length>0) { 
            document.getElementById('start_button_doc').disabled = false; 
        } else { 
            document.getElementById('start_button_doc').disabled = true;
        }
    }	

	function PostAddCommentDocumentation(){
		var url = '{{ route('add-comment') }}';
		var id_doc = {!! $documentation->id !!};
		var type = 3;	// type 1: Question, type 2: Answer, type 3: Documentation
		var comment = $('#new-comment-doc').val();
		if(comment){
			$.ajax({
				type: "POST",
				url : url,
				data: {"_token":"{{ csrf_token() }}", content: comment, commentable_id: id_doc, type: type},
				cache: false
			}).done(function (data) {
				$("#list-comments-doc").html(data);
				$('#new-comment-doc').val('');
				document.getElementById('start_button_doc').disabled = true;
			}).fail(function () {
				$.sweetModal({
					content: 'Bạn phải đăng nhập trước khi bình luận',
					icon: $.sweetModal.ICON_WARNING
				});
			});
		}
		else{
			$.sweetModal({
				content: 'Bạn chưa nhập nội dung',
				icon: $.sweetModal.ICON_WARNING
			});
		}
	}

	function DeleteComment(cmt_id){
		$.sweetModal.confirm('Bạn muốn xóa comment này?', function() {
			var url = '{{ route('delete-comment') }}'+ '/' + cmt_id;
			$.ajax({
				type: "GET",
				url : url,
				cache: false
			}).done(function (data) {
				if(data['success']){
					$('#delete-cmt-'+cmt_id).html('');
				}
				else{
					$.sweetModal({
						content: 'Bạn không có quyền xóa bình luận này!',
						icon: $.sweetModal.ICON_WARNING
					});
				}

			}).fail(function () {
				$.sweetModal({
					content: 'Error 500',
					title: 'Oh noes…',
					icon: $.sweetModal.ICON_ERROR,

					buttons: [
					{
						label: 'OK',
						classes: 'redB'
					}
					]
				});
			});
    	});	
	}

	function VoteDocumentation(){
		var point = parseInt(document.getElementById('point-documentation').innerHTML);
		var url = '{{ route('vote-documentation', ['documentation_id' => $documentation->id]) }}';
		var isPressedUp = $('#favorite').hasClass('active-vote');
		if (isPressedUp) {
			point = point - 1;
		}
		else {
			point = point + 1;
		}

		$.ajax({
			type: "POST",
			url : url,
			data: {"_token":"{{ csrf_token() }}", isPressedUp: isPressedUp},
			cache: false
		}).done(function (data) {
			if(data['success']){
				$('#point-documentation').html(point);
				$('#favorite').removeClass('active-vote');
				if (data['isAddClass']) {	
					$('#favorite').addClass('active-vote');	
				}
			}
			else{
				$.sweetModal({
					content: data['message'],
					icon: $.sweetModal.ICON_WARNING
				});
			}
		}).fail(function () {
			$.sweetModal({
				content: 'Error 500',
				title: 'Oh noes…',
				icon: $.sweetModal.ICON_ERROR,

				buttons: [
				{
					label: 'OK',
					classes: 'redB'
				}
				]
			});
		});
	}


	$(document).ready(function(){

		//edit Answer
        var confirm_Edit_Documentation = '{{ session('successEditDocumentation') }}';
        if(confirm_Edit_Documentation){
        	$.sweetModal({
            	content: 'Update thành công!',
            	icon: $.sweetModal.ICON_SUCCESS
            });
        }

        var confirm = '{{ session('action') }}';
        if(confirm){
            $.sweetModal({
            	content: '{{ session('action') }}',
            	icon: $.sweetModal.ICON_SUCCESS
            });
        }
    });
</script>
@endsection
