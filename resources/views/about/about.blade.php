@extends('master.master')

@section('body')
<!--about-->
<div class="">
	<!--about-->
	<div class="about-body">
		<div class="title-about">
			<span>Come help us build the education </span>
			<span>the world deserves</span>
			<div id="want-join">
				<span>Want to join us?</span>
				<span><a href="Login" style="color: red;">Longin</a></span>
			</div>
		</div>
		<div class="main-about">
			<div class="row">
				<div class="col first">
					<span class="head">About E-Learning</span>
					<span >
						E-Learning is an education company. But not one in the way you might think. We're committed to building the best learning experience inside and out, making Codecademy the best place for our team to learn, teach, and create the online learning experience of the future.
					</span>
					<span>
						Education is old. The current public school system in the US dates back to the 19th century and wasn't designed to scale the way it has. Lots of companies are working to "disrupt" education by changing the way things work in the classroom and by bringing the classroom online.
					</span>
				</div>
				<div class="col second">
					<span class="head">Our Mission</span>
					<span>
						We're not one of those companies. We are rethinking education from the bottom up. The web has rethought nearly everything - commerce, social networking, healthcare, and more. We are building the education the world needs - the first truly net native education. We take more cues from Facebook and Zynga in creating an engaging educational experience than we do from the classroom.
					</span>
					<span>
						Education is broken. Come help us build the education the world deserves.
					</span>
				</div>
			</div>
		</div>
		<div class="our-team">
			<div class="title-our-team">
				<span>Our team</span>
			</div>
			<div class="row">
				<div class="col">
					<div class="image-avt">
						<img src="source/image/avata.png" alt="" class="rounded-circle">
					</div>
					<div id="name">
						Dinh Sa
					</div>
					<div id="job">
						Developers
					</div>
				</div>
				<div class="col">
					<div class="image-avt">
						<img src="source/image/k17.jpg" alt="" class="rounded-circle">
					</div>
					<div id="name">
						Thanh Tung
					</div>
					<div id="job">
						Developers
					</div>
				</div>
				<div class="col">
					<div class="image-avt">
						<img src="source/image/boss2.jpg" alt="" class="rounded-circle">
					</div>
					<div id="name">
						Kim Giao
					</div>
					<div id="job">
						Boss
					</div>
				</div>
				<div class="col">
					<div class="image-avt">
						<img src="source/image/boss1.jpg" alt="" class="rounded-circle">
					</div>
					<div id="name">
						Thanh Dung
					</div>
					<div id="job">
						Boss
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end about-->
</div>
<!--end about-->
@endsection

<!--button login sign in-->
@section('login-signin')
@include('master.btnlogin')
@endsection