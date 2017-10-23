@extends('layout.master')

@section('body')
<!-- Content -->
<div class="content" style="height:100vh;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="content-card">
						<div class="congratulation-content">
							@if (session('thongbao'))
				                {!! session('thongbao') !!}
				            @endif
				            <p id="count-down" style="text-align: center; font-size: 50px;">3</p>
				            <div style="text-align: center; font-size: 25px;">
				            	<a style="margin-right: 20px;" href="{{ session('previousURL') }}">Chuyển tới trang trước</a><a style="margin-left: 20px;" href="/">Chuyển tới trang chủ</a>
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
	{{ "Chúc Mừng" }}
@endsection

@section('css')
	{{-- expr --}}
@endsection

@section('script')
	<script type="text/javascript">
		var time_count_down = 3;
		var x = setInterval(function() {
			var distance = time_count_down--;
			document.getElementById("count-down").innerHTML = distance;
			if (distance === 0) {
			    clearInterval(x);
			    window.location.href = "{{ session('previousURL') }}";
			}
		}, 1000);
	</script>
@endsection