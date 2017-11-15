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
										$action_vote_qs = $question->votes->where('user_id', Auth::id())->first();
									@endphp
									<div class="vote-widget">
										<div class="vote-up d-flex justify-content-center">
											<span id="up" onclick="VoteQuestion('up')" 
											class="oi oi-caret-top
											@if(!is_null($action_vote_qs) && $action_vote_qs->vote_action == 'up')
											{{ 'active-vote' }}
											@endif
											" style="display: block;"></span>
										</div>
										<div id="point-question" class="vote-count d-flex justify-content-center">
											{{ $question->point_rating }}
										</div>
										<div class="vote-down d-flex justify-content-center">
											<span id="down" onclick="VoteQuestion('down')" class="oi oi-caret-bottom
											@if(!is_null($action_vote_qs) && $action_vote_qs->vote_action == 'down')
											{{ 'active-vote' }}
											@endif
											" style="display: block;"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-11">
								<div class="detail-right">
									<div class="avatar-name">
										<a href="{{ route('user-information', ['user_id' => $question->user_id]) }}">{{ $question->user->name }}</a> 

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
									@if(Auth::id() == $question->user_id)
									<a href="" style="border-left: solid 1px black; padding-left: 10px; border-right: solid 1px black; padding-right: 10px;">Chỉnh sửa</a>
									<a href="{{ route('delete-question', ['question_id' => $question->id]) }}" style=" padding-left: 5px; border-right: solid 1px black; padding-right: 10px;" onclick="return confirm('Bạn có chắc là muốn xóa không?')">Xóa</a>
										@if (!$question->active)
											<a href="{{ route('restore-question', ['question_id' => $question->id]) }}" style=" padding-left: 5px; border-right: solid 1px black; padding-right: 10px;" onclick="return confirm('Bạn có chắc là muốn khôi phục không?')">Khôi phục</a>
										@endif
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
											@foreach($question->comments->sortBy('created_at')->take(3) as $cmt)
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
																đã bình luận vào {{ date('d-m-Y', strtotime($cmt->created_at)) }}
																@else
																đã chỉnh sửa vào {{ date('d-m-Y', strtotime($cmt->updated_at)) }}
																@endif
															</span>
														</div>
														<div id="{{ $cmt->id }}" class="row">
															<div class="col-lg-11">
																<div class="break-word">
																	<div class="break-word">{{ $cmt->content }}</div>
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
							<a href="">Thêm câu trả lời</a>
						</div>
						<hr>
						<div class="list-answer">
							@foreach($answers->sortByDesc('best_answer') as $answer)
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
													@if(!is_null($action_vote_as) && $action_vote_as->vote_action == 'up')
													{{ 'active-vote' }}
													@endif
													" style="display: block;" onclick="VoteAnswer('up',{{ $answer->id }})"></span>
												</div>
												<div id="point-answer-{{ $answer->id }}" class="vote-count d-flex justify-content-center">
													{{ $answer->point_rating }}
												</div>
												<div class="vote-down d-flex justify-content-center">
													<span id="down-{{ $answer->id }}" class="oi oi-caret-bottom
													@if(!is_null($action_vote_as) && $action_vote_as->vote_action == 'down')
													{{ 'active-vote' }}
													@endif
													" style="display: block;" onclick="VoteAnswer('down',{{ $answer->id }})"></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-11">
										<div class="detail-right">
											<div class="avatar-name">
												<a href="user/info/user_{{ $answer->user_id }}">{{ $answer->user->name }}</a> <span class="text-muted mr-3">đã trả lời vào {{ date('d-m-Y', strtotime($answer->created_at)) }}</span>
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
											<div class="answer-detail-content">
												{!! $answer->content !!}
											</div>
											@if(Auth::id()==$answer->user_id)
											<a href="" style="border-right: solid 1px black; padding-right: 10px;">Chỉnh sửa</a>
											<a href="answer/delete/{{ $answer->id }}" style=" padding-left: 5px" onclick="return confirm('Bạn có chắc là muốn xóa không?')">Xóa</a>
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
																		đã bình luận vào {{ date('d-m-Y', strtotime($cmt->created_at)) }}
																		@else
																		đã chỉnh sửa vào {{ date('d-m-Y', strtotime($cmt->updated_at)) }}
																		@endif
																	</span>
																</div>
																<div id="{{ $cmt->id }}" class="row">
																	<div class="col-lg-11">
																		<div class="break-word">
																			{!! $cmt->content !!}
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
							<form>
								<h2>Câu trả lời của bạn</h2>
								<br>
								<h5>Bạn có thể trả lời câu hỏi này? Hãy chia sẻ nó cho mọi người.</h5>
								<div class="form-group">
									<textarea class="form-control tinymce" name="content" rows="10"></textarea>
								</div>
								<button type="submit" class="btn btn-primary" style="padding: 10px 50px;">Trả lời</button>
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
{{ $question->title }}
@endsection

@section('css')

@endsection

@section('script')
<!-- TinyMCE -->
<script type="text/javascript" src="admin_asset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="admin_asset/tinymce/init_tinymce.js"></script> 
<script type="text/javascript ">
    function Edit(id_cmt, content){
    	if(localStorage.getItem('id_cmt')){
    		var id_cmt_storage = localStorage.getItem('id_cmt');
    		var content_storage = localStorage.getItem('content');
    		$('#'+id_cmt_storage).html('<div class="col-lg-11">'+
											'<div class="break-word">'+
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
										'<div class="break-word">'+
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
												'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt_storage+');">xóa</a>'+
											'</div>'+
										'</div>'+
									'</div>');

		localStorage.removeItem('id_cmt');
		localStorage.removeItem('content');
    }

    function unhide(type, id_view_more, id_target){
    	var more_less = document.getElementById(id_view_more).innerHTML;
    	var url = '{{ route('detail-question', ['question_id' => $question->id]) }}';
    	
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
    			alert('comment could not be loaded.');
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
						'<div class="break-word">'+
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
						'<a class="dropdown-item" href="javascript:DeleteComment('+id_cmt+');">xóa</a>'+
						'</div>'+
						'</div>'+
						'</div>');

					localStorage.removeItem('id_cmt');
					localStorage.removeItem('content');
				}
				else{
					alert('phát hiện nghi vấn hack!');
				}

			}).fail(function () {
				alert('comment could not be updated.');
			});
		}
		else{
			alert('Bạn chưa nhập nội dung!');
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
		var url = '{{ route('add-comment') }}';
		var id_qs = {!! $question->id !!};
		var type = 1;	// type 1: Question, type 2: Answer, type 3: Documentation
		var comment = $('#new-comment-qs').val();
		if(comment){
			$.ajax({
				type: "POST",
				url : url,
				data: {"_token":"{{ csrf_token() }}", content: comment, commentable_id: id_qs, type: type},
				cache: false
			}).done(function (data) {
				$("#list-comments-qs").html(data);
				$('#new-comment-qs').val('');
				document.getElementById('start_button_qs').disabled = true;
			}).fail(function () {
				alert('Bạn phải đăng nhập trước khi bình luận');
			});
		}
		else{
			alert('Bạn chưa nhập nội dung');
		}
	}

	function PostAddCommentAnswer(id_answer){
		var url = '{{ route('add-comment') }}';
		var id_answer = id_answer;
		var type = 2;
		var comment = $('#new-comment-as-'+id_answer).val();
		if (comment) {
			$.ajax({
				type: "POST",
				url : url,
				data: {"_token":"{{ csrf_token() }}", content: comment, commentable_id: id_answer, type: type},
				cache: false
			}).done(function (data) {
				$("#list-comments-as-"+id_answer).html(data);
				$('#new-comment-as-'+id_answer).val('');
				document.getElementById('start_button_as_'+id_answer).disabled = true;
			}).fail(function () {
				alert('Bạn phải đăng nhập trước khi bình luận');
			});
		}
		else{
			alert('Bạn chưa nhập nội dung!');
		}
	}

	function DeleteComment(cmt_id){
		if (confirm("Bạn muốn xóa comment này?")) {
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
					alert('Bạn không có quyền xóa bình luận này!');
				}

			}).fail(function () {
				alert('Error 500');
			});
    	}	
	}

	function VoteQuestion(up_down){
		var point = parseInt(document.getElementById('point-question').innerHTML);
		var url = '{{ route('vote-question', ['question_id' => $question->id]) }}';
		var isPressedUp = $('#up').hasClass('active-vote');
		var isPressedDown = $('#down').hasClass('active-vote');
		switch(up_down){
			case 'up':
				if (isPressedUp) {
					point = point - 1;
				}
				else {
					if (isPressedDown) {
						point = point + 2;
					}
					else {
						point = point + 1;
					}
				}
				break;

			case 'down':
				if (isPressedUp) {
					point = point - 2;
				}
				else {
					if (isPressedDown) {
						point = point + 1;
					}
					else {
						point = point - 1;
					}
				}
				break;
		}
		$.ajax({
			type: "POST",
			url : url,
			data: {"_token":"{{ csrf_token() }}", up_down: up_down, isPressedUp: isPressedUp, isPressedDown: isPressedDown},
			cache: false
		}).done(function (data) {
			if(data['success']){
				$('#point-question').html(point);
				$('#up').removeClass('active-vote');
				$('#down').removeClass('active-vote');
				if (data['isAddClass']) {	
					$('#'+up_down).addClass('active-vote');	
				}
			}
			else{
				alert(data['message']);
			}
			
		})
		.fail(function () {
			alert('Error 500');
		});
	}

	function VoteAnswer(up_down, answer_id){
		var point = parseInt(document.getElementById('point-answer-'+answer_id).innerHTML);
		var url = '{{ route('vote-answer') }}' + '/' + answer_id;
		var isPressedUp = $('#up-'+answer_id).hasClass('active-vote');
		var isPressedDown = $('#down-'+answer_id).hasClass('active-vote');
		switch(up_down){
			case 'up':
				if (isPressedUp) {
					point = point - 1;
				}
				else {
					if (isPressedDown) {
						point = point + 2;
					}
					else {
						point = point + 1;
					}
				}
				break;

			case 'down':
				if (isPressedUp) {
					point = point - 2;
				}
				else {
					if (isPressedDown) {
						point = point + 1;
					}
					else {
						point = point - 1;
					}
				}
				break;
		}
		$.ajax({
			type: "POST",
			url : url,
			data: {"_token":"{{ csrf_token() }}", up_down: up_down, isPressedUp: isPressedUp, isPressedDown: isPressedDown},
			cache: false
		}).done(function (data) {
			if(data['success']){
				$('#point-answer-'+answer_id).html(point);
				$('#up-'+answer_id).removeClass('active-vote');
				$('#down-'+answer_id).removeClass('active-vote');
				if (data['isAddClass']) {	
					$('#'+up_down+'-'+answer_id).addClass('active-vote');
				}
			}
			else{
				alert(data['message']);
			}
			
		})
		.fail(function () {
			alert('Error 500');
		});
	}

	function BestAnswer(answer_id){
		var url = '{{ route('vote-best-answer') }}' + '/' + answer_id;
		$.ajax({
			type: "POST",
			url : url,
			data: {"_token":"{{ csrf_token() }}", question_id: {!! $question->id !!} },
			cache: false
		}).done(function (data) {
			if(data['exist']){
				if(data['same']){
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
			alert('Error 500');
		});
	}

	 $(document).ready(function(){
        var confirm = '{{ session('thongbao') }}';
        if(confirm){
            alert('{!! session('thongbao') !!}');
        }
    });
	$(document).ready(function(){
        var confirm = '{{ session('action') }}';
        if(confirm){
            alert('{!! session('action') !!}');
        }
    });
</script>
@endsection
