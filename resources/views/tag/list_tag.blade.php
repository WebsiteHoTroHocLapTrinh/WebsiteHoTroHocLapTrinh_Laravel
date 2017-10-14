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
							<h4 class="topquestion d-inline-block">Thẻ</h4>
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
							<ul class="nav nav-tabs d-flex justify-content-end" id="TagsTabContent" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="phobien-tab" data-toggle="tab" href="#phobien" role="tab" aria-controls="phobien" aria-expanded="true">Phổ Biến</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="ten-tab" data-toggle="tab" href="#ten" role="tab" aria-controls="ten">Tên</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="moi-tab" data-toggle="tab" href="#moi" role="tab" aria-controls="moi">Mới</a>
								</li>
							</ul>
							<div class="tab-content" id="TagsTabContent">
								<div class="tab-pane fade show active" id="phobien" role="tabpanel" aria-labelledby="phobien-tab">
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
								<div class="tab-pane fade show" id="ten" role="tabpanel" aria-labelledby="ten-tab">
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="card-deck">
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-title">
													<div class="tag-item ToolTip">
														<button class="btn btn-tag">
															C# <span class="badge badge-pill badge-primary">x696</span>
														</button>
														<div class="show-hide">
															<div class="head-popup">
																<p><span class="oi oi-eye"></span></span></p>
																<p> 500</p>
																<p class="header-popup-question mr-2">Questions</p>
																<p class="header-popup-info float-right">
																	<span class="oi oi-star"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																	<span class="oi oi-star" style="color: yellow;"></span>
																</p>
															</div>
															<div class="body-popup">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<p class="tag-description line-clamp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
    {{ "Danh Sách Thẻ" }}
@endsection

@section('css')
    {{-- expr --}}
@endsection

@section('script')
    {{-- expr --}}
@endsection