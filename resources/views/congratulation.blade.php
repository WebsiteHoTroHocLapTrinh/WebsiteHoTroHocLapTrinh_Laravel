@extends('layout.master')

@section('body')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="content-card">
						<div class="congratulation-content">
							@if (session('thongbao'))
				                {!! session('thongbao') !!}
				            @endif
				            <p id="count-down" style="text-align: center; font-size: 50px;">5</p>
							<a href="/"><p>Chuyển tới trang chủ</p></a>
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
		var time_count_down = 5;
		var x = setInterval(function() {
			var distance = time_count_down--;
			document.getElementById("count-down").innerHTML = distance;
			if (distance === 0) {
			    clearInterval(x);
			    window.location.href = "/";
			}
		}, 1000);
	</script>
@endsection