<div id="img_loading" style="position: relative;">

</div>
<br>
<div class="row" id="load">
	@foreach($list_paginate as $list)
	<div class="col-lg-3 break-word" id="one-tag">
		<div class="card-deck">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<div class="tag-item ToolTip">
							<a href="{{ route('search-question') }}?list_tag={{ $list->id }}">
								<button class="btn btn-tag">
									{{ $list->name }} <span class="badge badge-pill badge-primary">x{{ count($list->questions)+ count($list->documentations) }}</span>
								</button>
							</a>
							<div class="show-hide">
								<div class="head-popup">
									<p><span class="oi oi-eye"></span></span></p>
									<p>{{ count($list->questions) }}</p>
									<p class="header-popup-question mr-2">Questions</p>
									<p>{{ count($list->documentations) }}</p>
									<p class="header-popup-question mr-2">Documents</p>
									{{-- <p class="header-popup-info float-right">
										<span class="oi oi-star"></span>
										<span class="oi oi-star" style="color: yellow;"></span>
										<span class="oi oi-star" style="color: yellow;"></span>
										<span class="oi oi-star" style="color: yellow;"></span>
										<span class="oi oi-star" style="color: yellow;"></span>
									</p> --}}
								</div>
								<div class="body-popup">
									<p>{{ $list->description }}</p>
								</div>
							</div>
						</div>
					</div>
					<div class="card-text">
						<p class="tag-description line-clamp">{{ $list->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
{{ $list_paginate->links('pagination.custom') }}