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
							<ul class="nav nav-tabs d-flex justify-content-end" id="UsersTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="diem-tab" data-toggle="tab" href="#diem" role="tab" aria-controls="diem" aria-expanded="true">Điểm</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="ten-tab" data-toggle="tab" href="#ten" role="tab" aria-controls="ten">Tên</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="moi-tab" data-toggle="tab" href="#moi" role="tab" aria-controls="moi">Mới</a>
								</li>
							</ul>
							<div class="tab-content" id="UsersTabContent">
								<div class="tab-pane fade show active" id="diem" role="tabpanel" aria-labelledby="diem-tab">
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<nav aria-label="Page navigation question">
										<ul class="pagination justify-content-center" style="margin-top: 20px;">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
													<span class="sr-only">Previous</span>
												</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item"><a class="page-link" href="#">6</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
													<span class="sr-only">Next</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="tab-pane fade show" id="ten" role="tabpanel" aria-labelledby="teb-tab">
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<nav aria-label="Page navigation question">
										<ul class="pagination justify-content-center" style="margin-top: 20px;">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
													<span class="sr-only">Previous</span>
												</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item"><a class="page-link" href="#">6</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
													<span class="sr-only">Next</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="tab-pane fade show" id="moi" role="tabpanel" aria-labelledby="moi-tab">
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
										<div class="card">
											<img class="card-img-top rounded-circle img-card" src="image/k17.jpg">
											<div class="card-body">
												<div class="card-title">
													<h4 class="card-title-text-center">Thanh Tùng</h4>
												</div>
												<div class="card-text">
													<p>TP.HCM</p>
													<p>6969 điểm</p>
												</div>
												<div class="list-tag">
													<p class="tag">C#</p>
													<p class="tag">Android</p>
													<p class="tag">PHP</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<nav aria-label="Page navigation question">
										<ul class="pagination justify-content-center" style="margin-top: 20px;">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
													<span class="sr-only">Previous</span>
												</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item"><a class="page-link" href="#">6</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
													<span class="sr-only">Next</span>
												</a>
											</li>
										</ul>
									</nav>
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
    {{-- expr --}}
@endsection

@section('script')
    {{-- expr --}}
@endsection