<div class="row" id="img_loading" style="position: relative;">

</div>
<br>
<div class="row" id="load">
	
	@foreach($list_paginate as $list)
	<div class="col-lg-3 break-word" id="one-tag">
		<div class="media">
			<a href="{{ route('user-information', ['user_id' => $list->id, 'user_url' => $list->name_url]) }}" ><img class="rounded-circle mr-3" src="image/avatar_users/{{ $list->avatar }}" width="50" height="50"></a>
			<div class="media-body">
				<a class="name-list-user" href="{{ route('user-information', ['user_id' => $list->id, 'user_url' => $list->name_url]) }}" >{{ $list->name }}</a>
				<div class="text-muted info-list-user">
					<span>{{ $list->location }}</span>
					<span>Điểm: {{ $list->point_reputation }}</span>
					<span>Tham gia: {{ date('d-m-Y', strtotime($list->created_at)) }}</span>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
{{ $list_paginate->links('pagination.custom') }}