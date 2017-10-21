@extends('layout.master')

@section('body')
<!--body-->
<div class="container content-card" style="background-color: #FFFFFF;">
	<!--profile-->
	<div id="profile">
		<div class="row">
			<div class="col-lg-3 avatar">
				<div class="card">
					<img class="card-img-top" src="image/avata.png" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">Dinh Sa</h4>
						<div class="point">
							<span class="oi oi-star"></span>
							<span class="card-text">Point: 3012</span>
						</div>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<span class="oi oi-map-marker mr-2"></span>
							<span>HCM</span>
						</li>
						<li class="list-group-item">
							<span class="oi oi-briefcase mr-2"></span>
							<span>Sinh viên</span>
						</li>
						<li class="list-group-item">
							<span class="oi oi-timer mr-2"></span>
							<span>1m</span>
						</li>
					</ul>
					<div class="card-body">
						<a href="#" class="card-link">Edit Profile</a>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="about-text">
					<div class="heder-about">
						<div class="name">
							<span>Hey, I'm</span>
							<span>Đinh Sa</span>
						</div>
						<div class="join float-right">
							<span>Tham gia vào</span>
							<span>2016</span>
						</div>
					</div>
					<div class="body-about">
						<div class="title-about">
							awesome!
						</div>
						<div class="about">
							BY NIGHT: I write code and code rights for penalcoders.example.org, an awesome non-profit that will totally take your money at that link. My kids are cuter than yours. FOR FUN: C+ Jokes, Segway Roller Derby, NYT Sat. Crosswords (in Sharpie!), Ostrich Grooming.
							
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
			<div class="col">
				<div>
					<div class="border_active">
						<a href=""><strong>Câu hỏi</strong></a>
						<span>(3)</span>
						<div class="float-right">
							<a href="" style="font-size: 13px;">View</a>
						</div>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="view_more_user">
						<a href="">View more →</a>
					</div>
				</div>
				<div>
					<div class="border_active">
						<a href=""><strong>Trả lời</strong></a>
						<span>(3)</span>
						<div class="float-right">
							<a href="" style="font-size: 13px;">View</a>
						</div>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="view_more_user">
						<a href="">View more →</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div>
					<div class="border_active">
						<a href=""><strong>Reputation</strong></a>
						<span>(3012)</span>
						<div class="float-right">
							<a href="" style="font-size: 13px;">View</a>
						</div>
					</div>
					<div class="user_active">
						<p class="point">1150</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="user_active">
						<p class="point">100</p>
						<p><a href="">How do I remove a Git submodule?</a></p>
					</div>
					<div class="view_more_user">
						<a href="">View more →</a>
					</div>
				</div>
				<div>
					<div class="border_active">
						<a href=""><strong>Tags</strong></a>
						<span>(3)</span>
						<div class="float-right">
							<a href="" style="font-size: 13px;">View</a>
						</div>
					</div>
					<div class="user_active">
						<p class="tags">C#</p>
					</div>
					<div class="user_active">
						<p class="tags">Java</p>
					</div>
					<div class="user_active">
						<a href="">
							<p class="tags">Javascript</p>
						</a>
					</div>
					<div class="view_more_user">
						<a href="">View more →</a>
					</div>
				</div>
			</div>
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
@endsection