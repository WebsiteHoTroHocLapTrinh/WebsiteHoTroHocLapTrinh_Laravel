@extends('master.master')

@section('body')
<!--Images-->
<div class="container-fluid bgimg-index">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our Site!</div>
            <div class="intro-heading">It's Nice To Meet You</div>
        </div>
    </div>
</div>
<!--/Images-->
<!-- Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="background-search-box">
                <div class="search-box d-flex justify-content-center flex-column">
                    <div class="search-box-title">
                        <h1>Tìm kiếm thật dễ dàng</h1>
                        <br>
                        <div class="hr-title"></div>
                        <br>
                        <h4>Chỉ với từ khóa bất kỳ bạn có thể tìm được nội dung mình muốn.</h4>
                        <h4>Từ câu hỏi, tài liệu, thẻ và cả người dùng.</h4>
                        <br>
                    </div>
                    <br>
                    <div class="search-box-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Nhập bất cứ điều gì bạn nghĩ đến">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-lg"><span class="oi oi-magnifying-glass"></span> Tìm Kiếm Ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="background-service">
                <div class="service">
                    <div class="service-title">
                        <h1>Mục Tiêu</h1>
                        <br>
                        <div class="hr-title"></div>
                    </div>
                    <div class="service-content d-flex justify-content-center">
                        <div class="service-question d-inline">
                            <div class="service-icon">
                                <i class="fa fa-question-circle"></i>
                            </div>
                            <div class="service-icon-title">
                                <h4>Đặt Câu Hỏi</h4>
                            </div>
                            <div class="service-icon-detail">
                                <p>Đưa ra câu hỏi dễ hiễu, dễ hình dung về vấn đề khó khăn đang gặp phải.</p>
                            </div>
                        </div>
                        <div class="service-answer d-inline">
                            <div class="service-icon">
                                <i class="fa fa-reply"></i>
                            </div>
                            <div class="service-icon-title">
                                <h4>Đưa Ra Trả Lời</h4>
                            </div>
                            <div class="service-icon-detail">
                                <p>Giúp đỡ mọi người bằng những câu trả lời chính xác và giúp bản thân ôn lại kiến thức</p>
                            </div>
                        </div>
                        <div class="service-documentation d-inline">
                            <div class="service-icon">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <div class="service-icon-title">
                                <h4>Chia Sẻ Tài Liệu</h4>
                            </div>
                            <div class="service-icon-detail">
                                <p>Sách là kho tàng trí tuệ của nhân loại. Chia sẻ để cùng phát triển.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="background-team-info">
                <div class="team-info">
                    <div class="team-info-title">
                        <h1>Nhóm của chúng tôi</h1>
                        <div class="hr-title"></div>
                        <p><i>Lorem ipsum dolor sit amet consectetur.</i></p>
                        <br>
                    </div>
                    <div class="team-info-content d-flex justify-content-center">
                        <div class="partner d-inline">
                            <img class="partner-avatar rounded-circle" src="source/image/k17.jpg" width="200">
                            <br>
                            <br>
                            <h4 class="partner-name">Thanh Tùng</h4>
                            <small class="partner-position"><i>Developer</i></small>
                            <br>
                            <br>
                            <div class="list-social">
                                <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="partner d-inline">
                            <img class="partner-avatar rounded-circle" src="source/image/avata.png" width="200">
                            <br>
                            <br>
                            <h4 class="partner-name">Dinh Sa</h4>
                            <small class="partner-position"><i>Developer</i></small>
                            <br>
                            <br>
                            <div class="list-social">
                                <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="background-contact">
                <div class="contact">
                    <div class="contact-title">
                        <h1>Liên Hệ</h1>
                        <div class="hr-title"></div>
                        <p><i>Lorem ipsum dolor sit amet consectetur.</i></p>
                        <br>
                    </div>
                    <div class="contact-content">
                        <div class="row">
                            <div class="col">
                                <div class="contact-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Tên của bạn *" name="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Email của bạn *" name="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Số điện thoại của bạn *" name="">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-control-lg" placeholder="Nội dung *" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg">Gửi</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="contact-info">
                                    <h4>Thông Tin Liên Hệ</h4>
                                    <hr style="background-color: orange;">
                                    <h6><a style="color: #FF7038; cursor: pointer;" href=""><i class="fa fa-envelope-o fa-fw"></i>  nguyenhoangthanhtung1610@gmail.com</a></h6>
                                    <br>
                                    <p><i class="fa fa-user fa-fw"></i> <strong>Nguyễn Hoàng Thanh Tùng</strong></p>
                                    <p><i class="fa fa-phone fa-fw"></i> SĐT: (+84) 96 195 0070</p>
                                    <p><i class="fa fa-user fa-fw"></i> <strong>Đinh Vĩnh Phúc</strong></p>
                                    <p><i class="fa fa-phone fa-fw"></i> SĐT: (+84) 166 680 7064</p>
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

@section('login-signin')
    @include('master.btnlogin')
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="source/css/index.css">
@endsection

@section('script')
    <script type="text/javascript" src="source/js/scrollreveal.min.js"></script>
    <script type="text/javascript">
        window.sr = ScrollReveal();
        sr.reveal('.intro-text', { duration: 1000, origin: 'top',});
        sr.reveal('.search-box-title', { duration: 500, origin: 'left',});
        sr.reveal('.search-box-form', { duration: 1000, origin: 'bottom',});
        sr.reveal('.service-title', { duration: 500, origin: 'left',});
        sr.reveal('.service-question', { duration: 1000, origin: 'bottom',});
        sr.reveal('.service-answer', { duration: 1500,  origin: 'bottom',});
        sr.reveal('.service-documentation', { duration: 2000,  origin: 'bottom',});
        sr.reveal('.team-info-title', { duration: 500,  origin: 'left',});
        sr.reveal('.partner:nth-child(1)', { duration: 1000,  origin: 'bottom',});
        sr.reveal('.partner:nth-child(2)', { duration: 2000,  origin: 'bottom',});
    </script>
@endsection