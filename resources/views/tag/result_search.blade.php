@extends('layout.master')
@section('body')
@include('layout.imageHeader')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<div class="main-content">
					<div class="content-card">
						<div class="tabs">
							@if(count($list_paginate)<=0)
								<h4 class="topquestion d-inline-block">Không tìm thấy kết quả cho từ khóa: "{{ $key }}"</h4>
								@else
								<h4 class="topquestion d-inline-block">Kết quả cho từ khóa: "{{ $key }}"</h4>
							@endif
							<br>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<form id="form-search" action="{{ route('search-tag') }}" method="POST">
										{{ csrf_field() }}
										<div class="input-group">
											<input id="key_search" type="text" class="form-control" name="key_search" placeholder="Nhập từ khóa cần tìm" >
											<span class="input-group-btn" >
												<button id="btn-search" type="button" class="btn btn-success">Tìm kiếm</button>
											</span>
										</div>
									</form>
								</div>
							</div>
							<br>
							<hr>
							<br>
							<div>
								@php
								function changeColor($str, $key){
									return str_replace($key, "<span style='background-color:yellow;'>$key</span>", $str);
								}
								@endphp
								<div class="row">
									@foreach($list_paginate as $list)
									<div class="col-lg-3 break-word" id="one-tag">
										<div class="card-deck">
											<div class="card">
												<div class="card-body">
													<div class="card-title">
														<div class="tag-item ToolTip">
															<button class="btn btn-tag">
																{!! changeColor($list->name, $key) !!} <span class="badge badge-pill badge-primary">x{{ count($list->questions)+ count($list->documentations) }}</span>
															</button>
															<div class="show-hide">
																<div class="head-popup">
																	<p><span class="oi oi-eye"></span></span></p>
																	<p>{{ count($list->questions) }}</p>
																	<p class="header-popup-question mr-2">Questions</p>
																	<p>{{ count($list->documentations) }}</p>
																	<p class="header-popup-question mr-2">Documents</p>

																</div>
																<div class="body-popup">
																	<p>{{ $list->description }}</p>
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<p class="tag-description line-clamp">{!! changeColor($list->description, $key) !!}</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
								
							</div>
							{{-- {{ $list_paginate->links('pagination.custom') }} --}}
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
{{ "Kết quả tìm kiếm" }}
@endsection

@section('css')
<link rel="stylesheet" href="css/jquery.sweet-modal.min.css" />
@endsection

@section('script')
<script src="js/jquery.sweet-modal.min.js"></script>
<script>
	$(function(){
		$('#btn-search').click(function(){
			var content = $('#key_search').val();
    			//alert(content)
    			if(content.length<=0){
    				$('#form-search').submit(function(e){
    					e.preventDefault();
    				});

    				$.sweetModal({
    					content: 'Bạn chưa nhập từ khóa tìm kiếm',
    					icon: $.sweetModal.ICON_WARNING
    				});
    			}
    			else{
    				document.getElementById('form-search').submit();
    			}
    		});
	})
</script>
@endsection