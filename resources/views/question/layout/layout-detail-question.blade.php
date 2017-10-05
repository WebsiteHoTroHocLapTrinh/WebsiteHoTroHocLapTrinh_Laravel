@extends('master.master')

@section('body')
@include('master.imageHeader')
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
									<div class="avatar-circle d-flex justify-content-center">
										<img src="source/image/k17.jpg" class="rounded-circle" width="40" height="40">
									</div>
									<div class="vote-widget">
										<div class="vote-up d-flex justify-content-center">
											<span class="oi oi-caret-top" style="display: block;"></span>
										</div>
										<div class="vote-count d-flex justify-content-center">
											696
										</div>
										<div class="vote-down d-flex justify-content-center">
											<span class="oi oi-caret-bottom" style="display: block;"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-11">
								<div class="detail-right">
									<div class="avatar-name">
										<a href="">Nguyễn Hoàng Thanh Tùng</a>
									</div>
									<div class="question-detail-title">
										Làm sao để hết đẹp trai ????
										Làm sao để hết đẹp trai ????
										Làm sao để hết đẹp trai ????
										Làm sao để hết đẹp trai ????
									</div>
									<div class="question-detail-content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
									<div class="list-tag">
										<div class="tag">
											C#
										</div>
										<div class="tag">
											PHP
										</div>
										<div class="tag">
											Android
										</div>
									</div>
									<br>
									<br>
									<div class="add-comment">
										<a href="" id="addComment"><p>Thêm bình luận</p></a>
									</div>
									<hr>
									<div class="list-comment">
										<div class="comment">
											<div class="row">
												<div class="col-lg-1">
													<div class="comment-detail-left">
														<div class="commet-avatar-circle d-flex justify-content-center">
															<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
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
															<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
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
															<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
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
									<div class="form-comment">
										<form>
											<div class="form-group">
												<textarea class="form-control" name="content" placeholder="Viết bình luận của bạn ..." rows="3"></textarea>
											</div>
											<button type="submit" class="btn btn-primary float-right">Bình luận</button>
											<br>
											<br>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content-card">
						<div class="action-answer">
							<strong>3</strong> câu trả lời
							-
							<a href="">Thêm câu trả lời</a>
						</div>
						<hr>
						<div class="list-answer">
							<div class="answer">
								<div class="row">
									<div class="col-lg-1">
										<div class="detail-left">
											<div class="avatar-circle d-flex justify-content-center">
												<img src="source/image/k17.jpg" class="rounded-circle" width="40" height="40">
											</div>
											<div class="vote-widget">
												<div class="vote-up d-flex justify-content-center">
													<span class="oi oi-caret-top" style="display: block;"></span>
												</div>
												<div class="vote-count d-flex justify-content-center">
													696
												</div>
												<div class="vote-down d-flex justify-content-center">
													<span class="oi oi-caret-bottom" style="display: block;"></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-11">
										<div class="detail-right">
											<div class="avatar-name">
												<a href="">Nguyễn Hoàng Thanh Tùng</a> đã trả lời <strong>6 giờ trước</strong>
											</div>
											<div class="answer-detail-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
											<br>
											<br>
											<div class="add-comment">

												<a href="" id="addComment"><p>Thêm bình luận</p></a>
											</div>
											<hr>
											<div class="list-comment">
												<div class="comment">
													<div class="row">
														<div class="col-lg-1">
															<div class="comment-detail-left">
																<div class="commet-avatar-circle d-flex justify-content-center">
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
											<div class="form-comment">
												<form>
													<div class="form-group">
														<textarea class="form-control" name="content" placeholder="Viết bình luận của bạn ..." rows="3"></textarea>
													</div>
													<button type="submit" class="btn btn-primary float-right">Bình luận</button>
													<br>
													<br>
												</form>
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>
							<div class="answer">
								<div class="row">
									<div class="col-lg-1">
										<div class="detail-left">
											<div class="avatar-circle d-flex justify-content-center">
												<img src="source/image/k17.jpg" class="rounded-circle" width="40" height="40">
											</div>
											<div class="vote-widget">
												<div class="vote-up d-flex justify-content-center">
													<span class="oi oi-caret-top" style="display: block;"></span>
												</div>
												<div class="vote-count d-flex justify-content-center">
													696
												</div>
												<div class="vote-down d-flex justify-content-center">
													<span class="oi oi-caret-bottom" style="display: block;"></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-11">
										<div class="detail-right">
											<div class="avatar-name">
												<a href="">Nguyễn Hoàng Thanh Tùng</a> đã trả lời <strong>6 giờ trước</strong>
											</div>
											<div class="answer-detail-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
											<br>
											<br>
											<div class="add-comment">

												<a href="" id="addComment"><p>Thêm bình luận</p></a>
											</div>
											<hr>
											<div class="list-comment">
												<div class="comment">
													<div class="row">
														<div class="col-lg-1">
															<div class="comment-detail-left">
																<div class="commet-avatar-circle d-flex justify-content-center">
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
											<div class="form-comment">
												<form>
													<div class="form-group">
														<textarea class="form-control" name="content" placeholder="Viết bình luận của bạn ..." rows="3"></textarea>
													</div>
													<button type="submit" class="btn btn-primary float-right">Bình luận</button>
													<br>
													<br>
												</form>
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>
							<div class="answer">
								<div class="row">
									<div class="col-lg-1">
										<div class="detail-left">
											<div class="avatar-circle d-flex justify-content-center">
												<img src="source/image/k17.jpg" class="rounded-circle" width="40" height="40">
											</div>
											<div class="vote-widget">
												<div class="vote-up d-flex justify-content-center">
													<span class="oi oi-caret-top" style="display: block;"></span>
												</div>
												<div class="vote-count d-flex justify-content-center">
													696
												</div>
												<div class="vote-down d-flex justify-content-center">
													<span class="oi oi-caret-bottom" style="display: block;"></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-11">
										<div class="detail-right">
											<div class="avatar-name">
												<a href="">Nguyễn Hoàng Thanh Tùng</a> đã trả lời <strong>6 giờ trước</strong>
											</div>
											<div class="answer-detail-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
											<br>
											<br>
											<div class="add-comment">

												<a href="" id="addComment"><p>Thêm bình luận</p></a>
											</div>
											<hr>
											<div class="list-comment">
												<div class="comment">
													<div class="row">
														<div class="col-lg-1">
															<div class="comment-detail-left">
																<div class="commet-avatar-circle d-flex justify-content-center">
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
																	<img src="source/image/k17.jpg" class="rounded-circle" width="30" height="30">
																</div>
															</div>
														</div>
														<div class="col-lg-11">
															<div class="comment-detail-right">
																<div class="comment-avatar-name">
																	<a href="">Đinh Sa</a> đã bình luận <strong>1 tháng trước</strong>
																</div>
																<div class="comment-detail-contetn">
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
											<div class="form-comment">
												<form>
													<div class="form-group">
														<textarea class="form-control" name="content" placeholder="Viết bình luận của bạn ..." rows="3"></textarea>
													</div>
													<button type="submit" class="btn btn-primary float-right">Bình luận</button>
													<br>
													<br>
												</form>
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>
						</div>
						<div class="add-answer">
							<form>
								<h2>Câu trả lời của bạn</h2>
								<br>
								<h5>Bạn có thể trả lời câu hỏi này? Hãy chia sẻ nó cho mọi người.</h5>
								<div class="form-group">
									<textarea class="form-control ckeditor" name="content" rows="10"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Trả lời</button>
							</form>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-3">
				<div class="sub-content" >
					<div class="btn-question">
						<button type="button" class="btn btn-success btn-block btn-lg">Đặt câu hỏi ngay !!!</button>
					</div>
					<div class="content-card">
						<div class="question-info">
							<div class="info-header">
								<p>Thông tin</p>
							</div>
							<hr>
							<div class="info-content">
								<div class="info-content-asked">
									<div class="row">
										<div class="col-lg-4 info-content-left">
											<p>Đã hỏi</p>
										</div>
										<div class="col-lg-8 .info-content-right">
											<p>khoảng 69 tháng trước</p>
										</div>
									</div>
								</div>
								<div class="info-content-viewed">
									<div class="row">
										<div class="col-lg-4 info-content-left">
											<p>Đã xem</p>
										</div>
										<div class="col-lg-8 .info-content-right">
											<p>96 lần</p>
										</div>
									</div>
								</div>
								<div class="info-content-activity">
									<div class="row">
										<div class="col-lg-4 info-content-left">
											<p>Hoạt động</p>
										</div>
										<div class="col-lg-8 .info-content-right">
											<p>khoảng 1 tháng trước</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content-card">
						<div class="question-related">
							<div class="related-header">
								<p>Câu hỏi liên quan</p>
							</div>
							<hr>
							<div class="related-content">
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9"">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question">
									<div class="row">
										<div class="col-lg-3 non-answered-accepted related-question-left">
											696
										</div>
										<div class="col-lg-9">
											<a href="">Bài viết liên quan</a>
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
</div>
<!-- end Content -->
@endsection
