@foreach($comments as $cmt)
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
						{!! $cmt->content !!}
					</div>
				</div>
				<!--col edit-->
				<div class="col-lg-1">
					@if(Auth::id() == $cmt->user_id)
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