@extends('layout.master')

@section('body')
<!--body-->
<div class="container content-card" style="background-color: #FFFFFF;">
	<!--profile-->
	<div id="profile">
		<div class="row">
			<div class="col-lg-3 avatar">
				<div class="card">
					<img class="rounded-circle" src="image/avatar_users/{{ $user->avatar }}" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">{{ $user->name }}</h4>
						<div class="point">
							<span class="oi oi-star"></span>
							<span class="card-text">Point: {{ $user->point_reputation }}</span>
						</div>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<span class="oi oi-map-marker mr-2"></span>
							<span>{{ $user->location }}</span>
						</li>
						<li class="list-group-item">
							<span class="oi oi-briefcase mr-2"></span>
							<span>{{ $user->job }}</span>
						</li>
						<li class="list-group-item">
							<span class="oi oi-timer mr-2"></span>
							<span>{{ $last_online }}</span>
						</li>
					</ul>
					@if(Auth::id()== $user->id)
					<div class="card-body">
						<a href="user/edit-user" class="card-link">Edit Profile</a>
					</div>
					@endif
				</div>
			</div>
			<div class="col-lg-9">
				<div class="about-text">
					<div class="heder-about">
						<div class="name">
							<span>Hey, I'm</span>
							<span>{{ $user->name }}</span>
						</div>
						<div class="join float-right">
							<span>Tham gia vào</span>
							<span>{{ date('d-m-Y', strtotime($user->created_at)) }}</span>
						</div>
					</div>
					<div class="body-about">
						<div class="title-about">
							{!! $user->status !!}
						</div>
						<div class="about">
							{!!$user->about!!}
							
						</div>
					</div>
					<div class="contact-user">
						<div>
							<img src="image/fb_user.png" alt="...">
						</div>
						<div>
							<img src="image/google_user.png" alt="...">
						</div>
						<div>
							<img src="image/twitter_user.png" alt="...">
						</div>
						<div>
							<img src="image/inlinked_user.png" alt="...">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/profile-->
	<!--active-->
	<div id="active_user">
		<div class="Hoat-Dong">
			<span class="text-muted">hoạt động</span>
		</div>
		<div class="bieu_do">
			<canvas id="buyers" width="800" height="200"></canvas>
		</div>
		<div class="row margin-top-hoat-dong">
			<!--col 1-->
			<div class="col-lg-5 break-word" style="margin-right: 20px;">
				<!--question-->
				<div calss="a">
					<div class="border_active">
						<a href=""><strong>Câu hỏi</strong></a>
						<span>({{ count($user->questions) }})</span>
						<div class="float-right">
							<a href="#">Thời gian tạo</a>
						</div>
					</div>
					@foreach($user->questions->take(3) as $qs)
					<div class="user_active">
						<p class="point">{{ $qs->point_rating }}</p>
						<p><a href="question/detail/qs_{{ $qs->id }}">{{ $qs->title }}</a></p>
						<p class=" date float-right text-muted">{{ date('d-m-Y h:i:s', strtotime($qs->created_at ))}}</p>
					</div>
					@endforeach
					<div id="question" class="hidden">
						{{-- #code --}}
					</div>
					<div class="view_more_user">
						<a id="more_qs" href="javascript:unhide('question','more_qs');" >@if(count($user->questions)>3){{ 'View more →' }}@endif</a>
					</div>
				</div>
				<!--end queston-->
				
				<!--answers-->
				<div>
					<div class="border_active">
						<a href=""><strong>Trả lời</strong></a>
						<span>({{ count($user->answers) }})</span>
						<div class="float-right">
							<a href="#">Số answer(s)</a>
						</div>
					</div>
					@foreach($answers->take(3) as $answer)
					@php
						$count = count($user->answers->where('question_id', $answer->question_id));
					@endphp
					<div class="user_active">
						<p class="point">{{ $answer->question->point_rating }}</p>
						<p><a href="question/detail/qs_{{ $answer->question->id }}">{{ $answer->question->title }}</a></p>
						<p class=" date float-right text-muted">{{ $count }}</p>
					</div>
					@endforeach
					<div id="answers" class="hidden">
						{{-- #code --}}
					</div>
					<div class="view_more_user">
						<a id="more_ans" href="javascript:unhide('answers','more_ans');">@if(count($user->answers->groupBy('question_id'))>3){{ 'View more →' }}@endif</a>
					</div>
				</div>
				<!--end answers-->
			</div>
			<!--end col 1-->

			<!--col 2-->
			<div class="col-lg-6 break-word" style="margin-left: 20px;">
				<!--documentation-->
				<div>
					<div class="border_active">
						<a href=""><strong>Tài liệu</strong></a>
						<span>({{ count($user->documentations) }})</span>
						<div class="float-right">
							<a href="">Thời gian đăng</a>
						</div>
					</div>
					@foreach($user->documentations->sortByDesc('id')->take(3) as $documentation )
					<div class="user_active">
						<p class="point">{{ $documentation->point_rating }}</p>
						<p><a href="">{{ $documentation->title }}</a></p>
						<p class=" date float-right text-muted">{{ date('d-m-Y h:i:s',strtotime($documentation->created_at)) }}</p>
					</div>
					@endforeach
					<div id="documentations" class="hidden">
						{{-- #code --}}
					</div>
					<div class="view_more_user">
						<a id="more_documents" href="javascript:unhide('documentations','more_documents');">@if(count($user->documentations)>3){{ 'View more' }} →@endif</a>
					</div>
				</div>
				<!--end documentation-->

				<!--tags-->
				<div>
					<div class="border_active">
						<a href=""><strong>Tags</strong></a>
						<span>({{ count($rs_gr) }})</span>
						<div class="float-right">
							<a href="" style="font-size: 13px;"></a>
						</div>
					</div>
					@foreach($rs_gr->take(3) as $rs)
					@php
						$count_tag = count($rs_all->where('id', $rs->id));
					@endphp
					<div class="user_active">
						<p class="tags">{{ $rs->name }}</p>
						<p class="count_tag">x{{ $count_tag }}</p>
					</div>
					@endforeach
					<div id="tag_user" class="hidden">
						{{-- #code --}}
					</div>
					<div class="view_more_user">
						<a id="more_tags" href="javascript:unhide('tag_user','more_tags');">@if(count($rs_gr)>3){{ 'View more' }} →@endif</a>
					</div>
				</div>
				<!--end tags-->
			</div>
			<!--end col 2-->
		</div>
	</div>
	<!--end active-->
</div>
<!--end body-->
@endsection

@section('title')
{{ "Thông Tin Người Dùng" }}
@endsection

@section('css')
{{-- expr --}}
@endsection

@section('script')
<script type="text/javascript" src="js/Chart.min.js"></script>
<!--script biểu đồ-->
<script type="text/javascript">
	var buyerData = {
		labels: ["January", "February", "March", "April", "May", "June"],
		datasets: [{
			fillColor: "rgba(172,194,132,0.4)",
			strokeColor: "#ACC26D",
			pointColor: "#fff",
			pointStrokeColor: "#9DB86D",
			data: [203, 156, 99, 251, 305, 247]
		}]
	}

    // get line chart canvas
    var buyers = document.getElementById('buyers').getContext('2d');

    // draw line chart
    new Chart(buyers).Line(buyerData);
</script>
<!--end script biểu đồ-->

<script type="text/javascript">
	
	function unhide(type, id){
		$.get("ajax/getMoreActive/"+type+"/"+{!! $user->id !!}, function(data) {           
             $("#"+type).html(data).toggle("slide");
         });
		var item = document.getElementById(id);
		item.innerHTML = item.innerHTML === 'View more →' ? 'View less →' : 'View more →';
	}

</script>

@endsection