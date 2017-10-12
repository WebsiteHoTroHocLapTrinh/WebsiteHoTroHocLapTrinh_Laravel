@extends('master.master')

@section('body')
@include('master.imageHeader')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="main-content">
					<div class="content-card  tool-parent">
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
										Làm sao để hết đẹp trai ???? Làm sao để hết đẹp trai ???? Làm sao để hết đẹp trai ???? Làm sao để hết đẹp trai ????
									</div>
									<div class="question-detail-content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
									<a href="" style="border-right: solid 1px black; padding-right: 10px;">Chỉnh sửa</a>
									<a href="" style=" padding-left: 5px" onclick="return confirm('Bạn có chắc là muốn xóa không?')">Xóa</a>
									<br>
									<br>
									<div class="comments-container"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="content-card">
						<div class="action-answer">
							<strong>3</strong> câu trả lời -
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
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
											<a href="" style="border-right: solid 1px black; padding-right: 10px;">Chỉnh sửa</a>
											<a href="" style=" padding-left: 5px" onclick="return confirm('Bạn có chắc là muốn xóa không?')">Xóa</a>
											<br>
											<br>
											<div class="comments-container"></div>
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
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
											<br>
											<br>
											<div class="comments-container"></div>
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
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
											<br>
											<br>
											<div class="comments-container"></div>
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
								<button type="submit" class="btn btn-primary" style="padding: 10px 50px;">Trả lời</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="sub-content">
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
										<div class="col-lg-9" ">
											<a href=" ">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question ">
									<div class="row ">
										<div class="col-lg-3 non-answered-accepted related-question-left ">
											696
										</div>
										<div class="col-lg-9 ">
											<a href=" ">Bài viết liên quan</a>
										</div>
									</div>
								</div>
								<div class="related-question ">
									<div class="row ">
										<div class="col-lg-3 non-answered-accepted related-question-left ">
											696
										</div>
										<div class="col-lg-9 ">
											<a href=" ">Bài viết liên quan</a>
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

@section('css')
<link rel="stylesheet" type="text/css" href="source/css/jquery-comments.css">
@endsection

@section('script')
<script type="text/javascript" src="source/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="source/js/jquery-comments.js"></script>
<script type="text/javascript" src="source/js/jquery.textcomplete.js"></script>
<script type="text/javascript ">
	var usersArray = [
	{
		id: 1,
		fullname: "Thanh Tùng ",
                // email: "https://www.google.com/ ",
                profile_picture_url: "source/image/k17.jpg "
            },
            {
            	id: 2,
            	fullname: "Đinh Sa ",
                // email: "https://www.facebook.com/ ",
                profile_picture_url: "source/image/avata.png "
            },
            {
            	id: 3,
            	fullname: "Nobody ",
                // email: "https://www.youtube.com/ ",
                profile_picture_url: "source/image/boss1.jpg "
            },
            ];
            var commentsArray = [
            {
            	"id": 1,
            	"parent": null,
            	"created": "2017-10-7 ",
            	"modified": "2017-10-7 ",
            	"content": "@Thanh Tùng Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",
            	"pings": [1],
            	"creator": 2,
            	"created_by_current_user": false,
            	"fullname": "Đinh Sa ",
            	"profile_picture_url": "source/image/avata.png ",
            	"profile_url": "https://www.facebook.com/ "
            },
            {
            	"id": 2,
            	"parent": null,
            	"created": "2017-10-7 ",
            	"modified": "2017-10-7 ",
            	"content": "@Đinh Sa Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",
            	"pings": [2],
            	"creator": 1,
            	"created_by_current_user ": true,
            	"fullname": "Thanh Tùng ",
            	"profile_picture_url": "source/image/k17.jpg ",
            	"profile_url": "https://www.google.com/ "
            },
            {
            	"id": 3,
            	"parent": null,
            	"created": "2017-10-7 ",
            	"modified": "2017-10-7 ",
            	"content": "@Đinh Sa @Thanh Tùng Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",
            	"pings": [2, 1],
            	"creator": 3,
            	"created_by_current_user": false,
            	"fullname": "Nobody ",
            	"profile_picture_url": "source/image/boss1.jpg ",
            	"profile_url": "https://www.youtube.com/ "
            },
            ];
        </script>
        <script type="text/javascript ">
        	$(function() {
        		var saveComment = function(data) {

            // Convert pings to human readable format
            $(data.pings).each(function(index, id) {
            	var user = usersArray.filter(function(user) { return user.id == id })[0];
            	data.content = data.content.replace('@' + id, '@' + user.fullname);
            });

            return data;
        }
        $('.comments-container').comments({
        	profilePictureURL: 'source/image/k17.jpg',
        	textareaPlaceholderText: 'Viết bình luận',
        	newestText: 'Mới nhất',
        	oldestText: 'Cũ nhất',
        	popularText: 'Phổ biến',
        	attachmentsText: 'Đính kèm',
        	sendText: 'Bình luận',
        	replyText: 'Trả lời',
        	editText: 'Chỉnh sửa',
        	editedText: 'Đã chỉnh sửa',
        	youText: 'Thanh Tùng',
        	profile_url: "https://www.facebook.com/ ",
        	saveText: 'Lưu',
        	deleteText: 'Xóa',
        	viewAllRepliesText: 'Xem thêm __replyCount__ bình luận',
        	hideRepliesText: 'Ẩn bớt bình luận',
        	noCommentsText: 'Không có bình luận nào',
        	noAttachmentsText: 'Không có tệp nào',
        	attachmentDropText: 'Kéo và thả tệp vào đây',
            enableDeletingCommentWithReplies: true,//   
            postCommentOnEnter: true,
            // readOnly: true, //chưa đăng nhập
            enableReplying: false,
            enableUpvoting: false,
            enableNavigation: false,
            currentUserId: 1,
            roundProfilePictures: true,
            textareaRows: 3,
            textareaMaxRows: false,
            textareaRowsOnFocus: 3,
            enableAttachments: false,
            enableHashtags: true,
            enablePinging: true,
            getUsers: function(success, error) {
            	success(usersArray);
            },
            getComments: function(success, error) {

            	success(commentsArray);
            },
            postComment: function(data, success, error) {

            	success(saveComment(data));
            },
            putComment: function(data, success, error) {
            	success(saveComment(data));
            },
            deleteComment: function(data, success, error) {

            	success();
            },
            upvoteComment: function(data, success, error) {

            	success(data);
            },
            uploadAttachments: function(dataArray, success, error) {

            	success(dataArray);
            },
        });
    });
</script>
@endsection
