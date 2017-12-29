<div id="img_loading" style="position: relative;">

</div>
<br>
<div class="row" id="load">
	@if (count($documentations) <= 0)
	{!! '<p style="font-size: 50px; margin: auto;">Không có tài liệu nào</p>' !!}
	@else
	<div class="list-documentation">
		@foreach ($documentations as $doc)
		<div class="documentation-summary">
			<div class="row">
				<div class="col-lg-2">
					<div class="statistic">
						<div class="documentation-favorite">
							<span class="oi oi-heart"></span> {{ $doc->point_rating }}
						</div>
						<div class="documentation-count-views">
							<span>{{ $doc->view }}</span>
							<div>lượt xem</div>
						</div>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="summary">
						<div class="summary-title">
							<h6><a href="{{ route('detail-documentation', ['documentation_id' => $doc->id]) }}">{{ $doc->title }}</a></h6>
						</div>
						<div class="summary-description">
							{{ strip_tags($doc->content) }}
						</div>
						<div class="list-tag">
							@foreach ($doc->tags as $tag)
							<a href="{{ route('search-documentation') }}?list_tag={{ $tag->id }}">
								<p class="tag">{{ $tag->name }}</p>
							</a>
							@endforeach
						</div>
						<div class="started">
							@php
							$date1 = $doc->created_at;
							$date2 = Carbon\Carbon::now();
							$interval = $date1->diff($date2);
							if($interval->y!=0) 
								$time= $interval->y . " năm trước"; 
							elseif ($interval->m!=0)
								$time= $interval->m . " tháng trước";
							elseif ($interval->d!=0)
								$time= $interval->d . " ngày trước";
							elseif($interval->h!=0)
								$time= $interval->h . " giờ trước";
							elseif($interval->i!=0)
								$time= $interval->i . " phút trước";
							else
								$time="Vừa xong";
							@endphp
							<p class="user"><a href="{{ route('user-information', ['user_id' => $doc->user_id]) }}">{{ $doc->user->name }}</a></p>
							<p class="action">đã chia sẽ</p>
							<p class="time">{{ $time }}</p>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
		@endforeach
	</div>
	@endif
</div>
{{ $documentations->links('pagination.custom') }}


