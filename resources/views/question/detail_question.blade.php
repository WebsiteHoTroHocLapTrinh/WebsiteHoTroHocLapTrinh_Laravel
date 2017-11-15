@extends('layout.master')

@section('body')
@include('layout.imageHeader')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="main-content">
					<div class="content-card  tool-parent">
						<div class="row">
							<div class="col-lg-1">
								<div class="detail-left">
									<div class="avatar-circle d-flex justify-content-center">
										<img src="image/avatar_users/{{ $question->user->avatar }}" class="rounded-circle" width="40" height="40">
									</div>
									@php
										$action_vote_qs =$question->votes->where('user_id', Auth::id())->first();
									@endphp
									<div class="vote-widget">
										<div class="vote-up d-flex justify-content-center">
											<span id="up" onclick="VoteQuestion('up')" 
											class="oi oi-caret-top
											@if(!is_null($action_vote_qs) && $action_vote_qs->vote_action=='up')
											{{ 'active_vote' }}
											@endif
											" style="display: block;"></span>
										</div>
										<div id="point-question" class="vote-count d-flex justify-content-center">
											{{ $question->point_rating }}
										</div>
										<div class="vote-down d-flex justify-content-center">
											<span id="down" onclick="VoteQuestion('down')" class="oi oi-caret-bottom
											@if(!is_null($action_vote_qs) && $action_vote_qs->vote_action=='down')
											{{ 'active_vote' }}
											@endif
											" style="display: block;"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-11 break-word">
								<div class="detail-right">
									<div class="avatar-name">
										<a href="user/info/user_{{ $question->user_id }}">{{ $question->user->name }}</a> 

									</div>
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
									{{-- <div class="text-muted date-time-qs">
										<div>
											<span class="oi oi-calendar"></span>
											<span class="text-muted" style="font-size: 12px; ">{{ date('M d Y , h:i A', strtotime($question->created_at)) }}</span>
										</div>
										<div class="float-right" style="font-size: 12px;">
											<div class="count-view-question">
												<span class="oi oi-eye"></span>
												<span class="mr-3">{{ $question->view }}</span>
												<span class="tooltiptext-view">views</span>
											</div>
											<div class="count-answer-question">
												<span class="oi oi-comment-square"></span>
												<span>{{ count($answers) }}</span>
												<span class="tooltiptext-answer">answers</span>
											</div>
										</div>
									</div> --}}
									@if(Auth::id()==$question->user_id)
									<a href="" style="border-right: solid 1px black; padding-right: 10px;">Chỉnh sửa</a>
									<a href="question/delete/{{ $question->id }}" style=" padding-left: 5px" onclick="return confirm('Bạn có chắc là muốn xóa không?')">Xóa</a>
									@endif
									<br><br><br>
									<a href="" style="pointer-events: none;">({{ count($question->comments) }}) bình luận cho câu hỏi này</a>
									<br>
									<br>
									<div class="comments-container">
										<!--create comment-->
										<div class="form-comment">
											<div>
												<div class="form-group">
													<textarea id="new-comment-qs" class="form-control" placeholder="Viết bình luận của bạn..." rows="2" onkeyup="stoppedTyping_Qs()"></textarea>
												</div>
												<button id="start_button_qs" onclick="PostAddCommentQuestion()" class="btn btn-primary btn-sm float-right" disabled >Bình luận</button>
												<br>
												<br>
											</div>
										</div>
										<!--list comments-->
										<div id="list-comments-qs">
											@foreach($question->comments->sortByDesc('id')->take(3) as $cmt)
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
																		<a class="dropdown-item" href="javascript:Edit({{ $cmt->id }},`{{ $cmt->content }}`);">sửa</a>
																		<a class="dropdown-item" href="javascript:DeleteComment({{ $cmt->id }});">xóa</a>
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
											<div id="img_loading_cmt_qs">
												{{-- #code --}}
											</div>
											<!--view more-->
											<div id="comments-question" class="hidden">
												{{-- #code --}}
											</div>

											<div class="">
												<a id="more_cmt_qs" href="javascript:unhide('comments-question','more_cmt_qs',{{ $question->id }})" >@if(count($question->comments)>3){{ 'View more →' }}@endif</a>
											</div>
											<!--end view more-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content-card">
						<div class="action-answer">
							(<strong>{{ count($answers) }}</strong>) câu trả lời -
							<a href="javascript:LinkToTop();">Thêm câu trả lời</a>
						</div>
						<hr>
						<div class="list-answer">
							@foreach($answers->sortByDesc('id') as $answer)
							<div class="answer">
								<div class="row">
									<div class="col-lg-1">
										<div class="detail-left">
											<div class="avatar-circle d-flex justify-content-center">
												<img src="image/avatar_users/{{ $answer->user->avatar }}" class="rounded-circle" width="40" height="40">
											</div>
											@php
											$action_vote_as =$answer->votes->where('user_id', Auth::id())->first();
											@endphp
											<div class="vote-widget">
												<div class="vote-up d-flex justify-content-center">
													<span id="up-{{ $answer->id }}" class="oi oi-caret-top
													@if(!is_null($action_vote_as) && $action_vote_as->vote_action=='up')
													{{ 'active_vote' }}
													@endif
													" style="display: block;" onclick="VoteAnswer('up',{{ $answer->id }})"></span>
												</div>
												<div id="point-answer-{{ $answer->id }}" class="vote-count d-flex justify-content-center">
													{{ $answer->point_rating }}
												</div>
												<div class="vote-down d-flex justify-content-center">
													<span id="down-{{ $answer->id }}" class="oi oi-caret-bottom
													@if(!is_null($action_vote_as) && $action_vote_as->vote_action=='down')
													{{ 'active_vote' }}
													@endif
													" style="display: block;" onclick="VoteAnswer('down',{{ $answer->id }})"></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-11 break-word">
										<div class="detail-right">
											<div class="avatar-name">
												<a href="user/info/user_{{ $answer->user_id }}">{{ $answer->user->name }}</a> <span class="text-muted mr-3">
													@if($answer->created_at==$answer->updated_at)
													đã trả lời vào {{ date('d-m-Y, h:i A', strtotime($answer->created_at)) }}
													@else
													đã chỉnh sửa vào {{ date('d-m-Y, h:i A', strtotime($answer->updated_at)) }}
													@endif
												</span>
												@if(Auth::id()==$question->user_id)
													<span onclick="BestAnswer({{ $answer->id }})" id="best-answer-{{ $answer->id }}" class="oi oi-check best-answer
													@if($answer->best_answer)
													{{ 'active-best' }}
													@endif
													"></span>
												@elseif($answer->best_answer)
													<span class="oi oi-check best-answer-normal"></span>
												@endif
											</div>
											<div id="answer-{{ $answer->id }}" class="answer-detail-content">
												<div>
													{!! $answer->content !!}
												</div>
												</div>
												@if(Auth::id()==$answer->user_id)
												<div>
													<a href="answer/edit/{{ $answer->id }}" style="border-right: solid 1px black; padding-right: 10px;">Chỉnh sửa</a>
													<a href="answer/delete/{{ $answer->id }}" style=" padding-left: 5px" onclick="return confirm('Bạn có chắc là muốn xóa không?')">Xóa</a>
												</div>
												@endif
											
											<br>
											<br>
											<br>
											<a href="" style="pointer-events: none;">({{ count($answer->comments) }}) bình luận cho câu trả lời này</a>
											<br><br>
											<div class="comments-container">
												<!--create comment-->
												<div class="form-comment">
													<div>
														<div class="form-group">
															<textarea id="new-comment-as-{{ $answer->id }}" class="form-control" name="content" placeholder="Viết bình luận của bạn..." rows="2" onkeyup="stoppedTyping_As({{ $answer->id }})"></textarea>
														</div>
														<button id="start_button_as_{{ $answer->id }}" onclick="PostAddCommentAnswer({{ $answer->id }})" class="btn btn-primary btn-sm float-right" disabled >Bình luận</button>
														<br>
														<br>
													</div>
												</div>
												<!--list comments-->
												<div id="list-comments-as-{{ $answer->id }}">
													@foreach($answer->comments->sortByDesc('id')->take(3) as $cmt)
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
																		<div class="">
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
																				<a class="dropdown-item" href="javascript:Edit({{ $cmt->id }},`{{ $cmt->content }}`);">sửa</a>
																				<a class="dropdown-item" href="javascript:DeleteComment({{ $cmt->id }});">xóa</a>
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
													<div id="img_loading_cmt_as_{{ $answer->id }}">
														{{-- #code --}}
													</div>
													<!--view more-->
													<div id="comments-answer-{{ $answer->id }}" class="hidden">
														{{-- #code --}}
													</div>

													<div class="">
														<a id="more_cmt_ans-{{ $answer->id }}" href="javascript:unhide('comments-answer-{{ $answer->id }}','more_cmt_ans-{{ $answer->id }}',{{ $answer->id }})" >@if(count($answer->comments)>3){{ 'View more →' }}@endif</a>
													</div>
													<!--end view more-->
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>
							@endforeach
						</div>
						<div class="add-answer">
							<form id="form-new-answer" action="answer/add/{{ $question->id }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<h2>Câu trả lời của bạn</h2>
								<br>
								<h5>Bạn có thể trả lời câu hỏi này? Hãy chia sẻ nó cho mọi người.</h5>
								<div class="form-group">
									<textarea id="new-answer" class="form-control tinymce" name="content_new_answer" rows="10"></textarea>
								</div>
								<button id="btn-submit-new-answer" type="submit" class="btn btn-primary" style="padding: 10px 50px;" >Trả lời</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="sub-content">
					<div class="btn-question">
						<button type="button" class="btn btn-success btn-block btn-lg">Đặt câu hỏi ngay !!!</button>
					</div>
					<div class="content-card">
						<div class="question-info">
							<div class="info-header">
								<p>Thông tin</p>
							</div>
							<hr>
							<div class="info-content">
								<div class="info-content-asked">
									<div class="row">
										<div class="col-lg-4 info-content-left">
											<p>Đã hỏi</p>
										</div>
										<div class="col-lg-8 info-content-right">
											<p>{{ date('M d Y , h:i A', strtotime($question->created_at)) }}</p>
										</div>
									</div>
								</div>
								<div class="info-content-viewed">
									<div class="row">
										<div class="col-lg-4 info-content-left">
											<p>Đã xem</p>
										</div>
										<div class="col-lg-8 info-content-right">
											<p>{{ $question->view }}</p>
										</div>
									</div>
								</div>
								<div class="info-content-activity">
									<div class="row">
										<div class="col-lg-4 info-content-left">
											<p>Trả lời</p>
										</div>
										<div class="col-lg-8 .info-content-right">
											<p>{{ count($answers) }}</p>
										</div>
									</div>
								</div>
								<div class="info-content-bestanswer">
									<div class="row">
										<div class="col-lg-4 info-content-left">
											<p>Best Ans</p>
										</div>
										<div class="col-lg-8 .info-content-right">
											@if($answers->where('best_answer',1)->first())
											<span class="oi oi-check best-answer-normal"></span>
											@else
											<span class="oi oi-x" style="font-size: 10px; color: red;"></span>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content-card">
						<div class="question-related">
							<div class="related-header">
								<p>Câu hỏi liên quan</p>
							</div>
							<hr>
							<div class="related-content">
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9" ">
											<a href=" ">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question ">
									<div class="row ">
										<div class="col-lg-3 non-answered-accepted related-question-left ">
											696
										</div>
										<div class="col-lg-9 ">
											<a href=" ">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question ">
									<div class="row ">
										<div class="col-lg-3 non-answered-accepted related-question-left ">
											696
										</div>
										<div class="col-lg-9 ">
											<a href=" ">Bài viết liên quan</a>
										</div>
									</div>
								</div>
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

@section('title')
	{{ "Chi Tiết Câu Hỏi" }}
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
													'<a class="dropdown-item" href="javascript:Edit('+id_cmt_storage+','+'`'+content_storage+'`'+');">sửa</a>'+
													'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt_storage+');">xóa</a>'+
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
												'<a class="dropdown-item" href="javascript:Edit('+id_cmt_storage+','+'`'+content_storage+'`'+');">sửa</a>'+
												'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt_storage+');">xóa</a>'+
											'</div>'+
										'</div>'+
									'</div>');

		localStorage.removeItem('id_cmt');
		localStorage.removeItem('content');
    }

    function unhide(type, id_view_more, id_target){
    	var more_less = document.getElementById(id_view_more).innerHTML;
    	var url = 'question/detail/qs_'+ {!! $question->id !!};
    	
    	if(more_less=='View more →'){
    		if(type=='comments-question'){
    			$('#img_loading_cmt_qs').html('<img style="position: absolute; z-index: 100000; width: 100%; height:2px;" src="/image/loading.gif"/>');
    		}
    		else{
    			$('#img_loading_cmt_as_'+id_target).html('<img style="position: absolute; z-index: 100000; width: 100%; height:2px;" src="/image/loading.gif"/>');
    		}

    		$.ajax({
    			url : url,
    			data: {id_target:id_target, type:type},
    			cache: false
    		}).done(function (data) {
    			$("#"+type).html(data).toggle("slide");
    			if(type=='comments-question'){
    				$('#img_loading_cmt_qs').html('')
    			}
    			else{
    				$('#img_loading_cmt_as_'+id_target).html('');
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

	function PostEditComment(){
		var id_cmt = localStorage.getItem('id_cmt');
		var url = 'comment/edit/'+id_cmt;
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
						'<a class="dropdown-item" href="javascript:Edit('+id_cmt+','+'`'+ content_new +'`'+');">sửa</a>'+
						'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt+');">xóa</a>'+
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

	function stoppedTyping_Qs(){
        if($('#new-comment-qs').val().length>0) { 
            document.getElementById('start_button_qs').disabled = false; 
        } else { 
            document.getElementById('start_button_qs').disabled = true;
        }
    }
    
   	function stoppedTyping_As(id){
   		if($('#new-comment-as-'+id).val().length>0) { 
            document.getElementById('start_button_as_'+id).disabled = false; 
        } else { 
            document.getElementById('start_button_as_'+id).disabled = true;
        }
   	}	

	function PostAddCommentQuestion(){
		var url = 'comment/add';
		var id_qs = {!! $question->id !!};
		var type = 1;
		var comment = $('#new-comment-qs').val();
		if(comment){
			$.ajax({
				type: "POST",
				url : url,
				data: {"_token":"{{ csrf_token() }}",content:comment, commentable_id:id_qs, type:type},
				cache: false
			}).done(function (data) {
				$("#list-comments-qs").html(data);
				$('#new-comment-qs').val('');
				document.getElementById('start_button_qs').disabled = true;
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

	function PostAddCommentAnswer(id_answer){
		var url = 'comment/add';
		var id_answer = id_answer;
		var type = 2;
		var comment = $('#new-comment-as-'+id_answer).val();
		if(comment){
			$.ajax({
				type: "POST",
				url : url,
				data: {"_token":"{{ csrf_token() }}",content:comment, commentable_id:id_answer, type:type},
				cache: false
			}).done(function (data) {
				$("#list-comments-as-"+id_answer).html(data);
				$('#new-comment-as-'+id_answer).val('');
				document.getElementById('start_button_as_'+id_answer).disabled = true;
			}).fail(function () {
				$.sweetModal({
					content: 'Bạn phải đăng nhập trước khi bình luận',
					icon: $.sweetModal.ICON_WARNING
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

	function VoteQuestion(up_down){
		var point = document.getElementById('point-question').innerHTML;
		var url = 'question/vote/{!! $question->id !!}';
		switch(up_down){
			case 'up':
				point = +point + +1;
			break;

			case 'down':
				point = point -1;
			break;
		}
		$.ajax({
			type: "POST",
			url : url,
			data: {"_token":"{{ csrf_token() }}",up_down:up_down},
			cache: false
		}).done(function (data) {
			if(data['success']){
				$('#point-question').html(point);
				$('#up').removeClass('active_vote');
				$('#down').removeClass('active_vote');
				$('#'+up_down).addClass('active_vote');
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

	function VoteAnswer(up_down, answer_id){
		var point = document.getElementById('point-answer-'+answer_id).innerHTML;
		var url = 'answer/vote/'+answer_id;
		switch(up_down){
			case 'up':
				point = +point + +1;
			break;

			case 'down':
				point = point -1;
			break;
		}
		$.ajax({
			type: "POST",
			url : url,
			data: {"_token":"{{ csrf_token() }}",up_down:up_down},
			cache: false
		}).done(function (data) {
			if(data['success']){
				$('#point-answer-'+answer_id).html(point);
				$('#up-'+answer_id).removeClass('active_vote');
				$('#down-'+answer_id).removeClass('active_vote');
				$('#'+up_down+'-'+answer_id).addClass('active_vote');
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

	function DeleteComment(cmt_id){
		$.sweetModal.confirm('Bạn muốn xóa comment này?', function() {
			var url = 'comment/delete/'+cmt_id;
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

	function BestAnswer(answer_id){
		var url = 'answer/bestanswer/'+answer_id;
		$.ajax({
			type: "POST",
			url : url,
			data: {"_token":"{{ csrf_token() }}",question_id:{!! $question->id !!} },
			cache: false
		}).done(function (data) {
			if(data['exist']){
				if(data['trung']){
					$('#best-answer-'+answer_id).removeClass('active-best');
				}
				else{
					$('#best-answer-'+answer_id).addClass('active-best');
					$('#best-answer-'+ data['best_answer_old']).removeClass('active-best');
				}
			}
			else{
				$('#best-answer-'+answer_id).addClass('active-best');
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

	function LinkToTop(){
		$('html, body').animate({scrollTop:$(document).height()}, 'slow');
		return false;
	}


	 $(document).ready(function(){

	 	//xóa answer
        var confirm = '{{ session('thongbao') }}';
        if(confirm){
            $.sweetModal({
            	content: '{{ session('thongbao') }}',
            	icon: $.sweetModal.ICON_SUCCESS
            });
        }

        //câu trả lời đã được đăng
        var confirm_answer_success='{{ session('AnswerSuccess') }}';
        if(confirm_answer_success){
             $.sweetModal({
            	content: '{!! session('AnswerSuccess') !!}',
            	icon: $.sweetModal.ICON_SUCCESS
            });

        }

        //đăng nhập để trả lời câu hỏi
        var confirm_answer_unsuccess='{{ session('AnswerUnsuccess') }}';
        if(confirm_answer_unsuccess){
            $.sweetModal({
            	content: '{!! session('AnswerUnsuccess') !!}',
            	icon: $.sweetModal.ICON_WARNING
            });

        }

        //edit Answer
        var confirm_Edit_Answer = '{{ session('successEditAnswer') }}';
        if(confirm_Edit_Answer){
        	$.sweetModal({
            	content: 'Update thành công!',
            	icon: $.sweetModal.ICON_SUCCESS
            });
        }

       //check add answer
       	$('#btn-submit-new-answer').click(function(){
       		var content = tinymce.get('new-answer').getContent();
       		// $('#' + 'your_editor_id').html( tinymce.get('your_editor_id').getContent() );
       		if((content.length <= 0)){
       			$('#form-new-answer').submit(function(e){
       				e.preventDefault();
       			});
       			$.sweetModal({
            	content: 'Bạn chưa nhập nội dung!',
            	icon: $.sweetModal.ICON_WARNING
            });
       		}
       		else{
       			document.getElementById("form-new-answer").submit();
       		}
       	})
     
    });
</script>
@endsection
