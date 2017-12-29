@extends('layout.master')

@section('body')
@include('layout.imageHeader')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="content-card">
						<div class="tabs">
							<h4 class="topquestion d-inline-block">Người Dùng</h4>
							<br>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<form id="form-search" action="{{ route('search-user') }}" method="GET">
										<div class="input-group">
											<input id="key_search" type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa cần tìm" >
											<span class="input-group-btn" >
												<button id="btn-search" type="button" class="btn btn-success">Tìm kiếm</button>
											</span>
										</div>
									</form>
								</div>
							</div>
							<br>
							<ul class="nav nav-tabs d-flex justify-content-end" id="UsersTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="point" href="javascript:ChangeTab('point')" role="tab">Điểm</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="name" href="javascript:ChangeTab('name')" role="tab">Tên</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="new" href="javascript:ChangeTab('new')" role="tab">Mới</a>
								</li>
							</ul>
							<div class="tab-content" id="">
								<div class="tab-pane fade show active" id="load_list" role="tabpanel">
									@include('user.items_user')
									
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
    {{ "Danh Sách Người Dùng" }}
@endsection

@section('css')
    <link rel="stylesheet" href="css/jquery.sweet-modal.min.css" />
@endsection

@section('script')
<script src="js/jquery.sweet-modal.min.js"></script>
<script>
	function ChangeTab(id_tab) {
		document.getElementById("point").className = "nav-link";
		document.getElementById("name").className = "nav-link";
		document.getElementById("new").className = "nav-link";
		document.getElementById(id_tab).className = "nav-link active";
		$('#load a').css('color', '#dfecf6');
		$('#img_loading').append('<img style="position: absolute; z-index: 100000; width: 100%; height:2px;" src="/image/loading.gif"/>');
		var url = '{{ route('list-user') }}'+ '/' + id_tab;
		getListTag(url);
		window.history.pushState("", "", url);
	};

	function getListTag(url) {
		$.ajax({
			url : url,
			cache: false
		}).done(function (data) {
			$('#load_list').html(data);
		}).fail(function () {
			$.sweetModal({
				content: 'Tab could not be loaded.',
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
	};

	$(function(){
		document.getElementById("point").className = "nav-link";
		document.getElementById("name").className = "nav-link";
		document.getElementById("new").className = "nav-link";
		document.getElementById("{!! $tab !!}").className = "nav-link active";

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
	});
</script>
@endsection