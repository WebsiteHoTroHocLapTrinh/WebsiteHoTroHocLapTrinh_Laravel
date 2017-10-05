@extends('master.master')

@section('body')
<!--image header-->
@include('master.imageHeader')
<!--end image header-->

<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="main-content">
					<div class="content-card">
						<div class="row">
							<div class="col-lg-1">
								<div class="detail-left">
									<div class="documentation-favorite-point">
										<p>696</p>
										<span class="oi oi-heart"></span>
									</div>
								</div>
							</div>
							<div class="col-lg-11">
								<div class="detail-right">
									<div class="documentation-title">
										<p>Ebook 50 sắc thái hay toẹt zời !!!</p>
									</div>
									<div class="list-tag">
										<p class="tag">C#</p>
										<p class="tag">Android</p>
										<p class="tag">PHP</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="documentation-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<img src="source/image/pubg.png" width="100%">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div style="border-left: solid orange 10px;" class="alert alert-warning" role="alert">
								<strong>Link:</strong> <a href="">Ebook50SacThai</a>
							</div>
						</div>

						<br>
						<br>
						<br>

					</div>
					<div class="content-card">
						<br>
						<br>
						<div class="form-comment">
							<form>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-1">
											<img src="source/image/k17.jpg" width="50" height="50" class="rounded-circle">
										</div>
										<div class="col-lg-11">
											<textarea class="form-control" name="content" placeholder="Viết bình luận của bạn ..." rows="3"></textarea>
										</div>

									</div>
								</div>
								<button type="submit" class="btn btn-primary float-right">Bình luận</button>
								<br>
								<br>
							</form>
							<hr>
						</div>
						<div class="list-comment">
							<div class="comment">
								<div class="row">
									<div class="col-lg-1">
										<div class="comment-detail-left">
											<div class="commet-avatar-circle d-flex justify-content-center">
												<img src="source/image/k17.jpg" class="rounded-circle" width="50" height="50">
											</div>
										</div>
									</div>
									<div class="col-lg-11">
										<div class="comment-detail-right">
											<div class="comment-avatar-name">
												<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
											</div>
											<div class="comment-detail-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>
							<div class="comment">
								<div class="row">
									<div class="col-lg-1">
										<div class="comment-detail-left">
											<div class="commet-avatar-circle d-flex justify-content-center">
												<img src="source/image/k17.jpg" class="rounded-circle" width="50" height="50">
											</div>
										</div>
									</div>
									<div class="col-lg-11">
										<div class="comment-detail-right">
											<div class="comment-avatar-name">
												<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
											</div>
											<div class="comment-detail-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>
							<div class="comment">
								<div class="row">
									<div class="col-lg-1">
										<div class="comment-detail-left">
											<div class="commet-avatar-circle d-flex justify-content-center">
												<img src="source/image/k17.jpg" class="rounded-circle" width="50" height="50">
											</div>
										</div>
									</div>
									<div class="col-lg-11">
										<div class="comment-detail-right">
											<div class="comment-avatar-name">
												<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
											</div>
											<div class="comment-detail-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="col-lg-3">
				<div class="sub-content" >
					<div class="btn-documentation">
						<button type="button" class="btn btn-success btn-block btn-lg">Chia sẽ tài liệu ngay !!!</button>
					</div>
					<div class="content-card">
						<div class="documentation-author">
							<div class="profile-card">
								<div class="profile-card-header">
									<div class="profile-card-title">
										Thanh Tùng
									</div>
									<div class="profile-card-separator">

									</div>
									<div class="profile-card-description">
										Sinh viên
									</div>
								</div>

								<div class="profile-card-footer">
									696
									<span class="oi oi-star"></span>
								</div>
								<div class="profile-card-avatar">
									<img src="source/image/k17.jpg" class="rounded-circle" width="80" height="80">
								</div>
							</div>

							<div class="legend-hr-text">
								<hr class="legend-hr">

							</hr>
							<div class="legend-text">
								THÔNG TIN TÀI LIỆU
							</div>
						</div>
						<div class="info-content">
							<div class="info-content-release">
								<div class="row">
									<div class="col-lg-5 info-content-left">
										<p>Đã đăng</p>
									</div>
									<div class="col-lg-7 .info-content-right" style="text-align: right;">
										<p>khoảng 69 tháng trước</p>
									</div>
								</div>
							</div>
							<div class="info-content-viewed">
								<div class="row">
									<div class="col-lg-5 info-content-left">
										<p>Đã xem</p>
									</div>
									<div class="col-lg-7 .info-content-right" style="text-align: right;">
										<p>69 lần</p>
									</div>
								</div>
							</div>
							<div class="info-content-comment">
								<div class="row">
									<div class="col-lg-5 info-content-left">
										<p>Bình luận</p>
									</div>
									<div class="col-lg-7 .info-content-right" style="text-align: right;">
										<p>5 lượt</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="content-card">
					<div class="documentation-related">
						<div class="related-header">
							<p>Tài liệu liên quan</p>
						</div>
						<hr>
						<div class="related-content">
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="content-card">
					<div class="documentation-related">
						<div class="related-header">
							<p>Chủ đề Lập Trình</p>
						</div>
						<hr>
						<div class="related-content">
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
								</div>
							</div>
							<div class="related-documentation">
								<div class="row">
									<div class="col-lg-3 non-answered-accepted related-documentation-left">
										6
										<span class="oi oi-heart"></span>
									</div>
									<div class="col-lg-9">
										<a href="">Tài liệu liên quan</a>
									</div>
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
