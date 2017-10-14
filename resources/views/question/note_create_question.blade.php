@extends('layout.master')

@section('body')
<!-- Content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="content-card">
						<div class="note-content">
							<h1 style="text-align: center;"><u>Một số lưu ý khi đặt câu hỏi</u></h1>
							<br>
							<p>Chào mừng bạn đến với <strong>E-Learning</strong></p>
							<p>Mọi người rất muốn giúp bạn, nhưng thực tế là không phải mọi câu hỏi đều được trả lời. Để <strong>cải thiện cơ hội</strong> của bạn , đây là một số lời khuyên:</p>
							<h2>Tìm kiếm, và nghiên cứu trước khi hỏi</h2>
							<p>Bạn đã tra cứu kỹ lưỡng câu trả lời trước khi đặt câu hỏi? Chia sẻ nghiên cứu của bạn giúp mọi người. Cho mọi người biết những gì bạn tìm thấy (trên trang này hoặc ở nơi khác) và tại sao nó không đáp ứng được nhu cầu của bạn. Điều này chứng tỏ rằng bạn đã dành thời gian để cố gắng giúp đỡ chính mình, nó giúp bạn không lặp lại câu hỏi, và trên hết, nó giúp bạn có được câu trả lời cụ thể và phù hợp hơn!</p>
							<div class="row">
								<div class="col">
									<form>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm" >
											<span class="input-group-btn" >
												<button type="submit" class="btn btn-success">Tìm kiếm</button>
											</span>
										</div>
									</form>
								</div>
							</div>
							<br>
							<h2>Hãy đặt câu hỏi cụ thể</h2>
							<p>Nếu bạn hỏi một <strong>câu hỏi mơ hồ</strong>, bạn sẽ nhận được một <strong>câu trả lời mơ hồ</strong>. Nhưng nếu bạn cung cấp cho mọi người <strong>chi tiết và bối cảnh cụ thể</strong>, mọi người có thể cung cấp một câu trả lời <strong>hữu ích</strong>, và <strong>có liên quan</strong>.</p>
							<h2>Hãy làm câu hỏi liên quan đến nhiều người</h2>
							<p><strong>E-Learning</strong> muốn giúp đỡ càng nhiều người càng tốt. Hãy làm rõ câu hỏi của bạn có liên quan đến nhiều người hơn bạn, và nhiều người trong chúng ta sẽ quan tâm đến câu hỏi của bạn và sẵn sàng giải quyết nó.</p>
							<h2>Hãy nghĩ thoáng hơn</h2>
							<p>Câu trả lời cho câu hỏi của bạn có thể không phải lúc nào cũng là kết quả mà bạn muốn, nhưng điều đó không có nghĩa là sai. Khi có nghi ngờ, hãy yêu cầu mọi người trích dẫn nguồn của họ. Ngay cả khi mọi người không đồng ý với bạn, hoặc không cho bạn biết chính xác những gì bạn muốn nghe, hãy nhớ: mọi người chỉ cố gắng để giúp đỡ bạn.</p>
							<br>
							<div class="row">
								<div class="col">
									<form>
										<input type="checkbox" name="">  <strong>Cảm ơn, tôi sẽ lưu ý những lời khuyên trên khi đặt câu hỏi.</strong>
										<button type="submit" class="btn btn-primary float-right">Tiếp tục</button>
									</form>
								</div>
							</div>
							<br>
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
	{{ "Lưu Ý" }}
@endsection

@section('css')
	{{-- expr --}}
@endsection

@section('script')
	{{-- expr --}}
@endsection