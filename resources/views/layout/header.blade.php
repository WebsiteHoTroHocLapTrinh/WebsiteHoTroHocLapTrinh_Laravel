<!--navbar-->
<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
        <!--brand-->
        <a class="navbar-brand" href="/">
            <img class="img-responsive mr-sm-5" src="/image/elearning-logo.png" width="150" height="50" alt=" ">
        </a>
        <!--/brand-->
        <!--button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--/button-->
        <!--nav-->
        <div class="collapse navbar-collapse row" id="navbarNav">
            <!--danh mục-->
            <ul class="navbar-nav">
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="{{ route('list-question') }}"><strong>Câu Hỏi</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="{{ route('list-documentation') }}"><strong>Tài Liệu</strong></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="{{ route('list-tag') }}"><strong>Thẻ</strong></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="{{ route('list-user') }}"><strong>Người Dùng</strong></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link mr-sm-5" href="{{ route('about') }}"><strong>Giới Thiệu</strong></a>
                </li>
            </ul>
            <!--/danh mục-->
            <!--search box-->
            <div class="col-lg-4">
                <form action="{{ route('search-question') }}" method="GET">
                    <div class="input-group stylish-input-group mr-sm-5">
                        <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm" name="keyword">
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="oi oi-magnifying-glass"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <!--/search box-->
            <div class="ml-auto" style="padding-right: 10px;">
                @if (!Auth::check())
                <!--login signup-->
                <a href="login"><button type="button" class="btn mr-3">Đăng Nhập</button></a>
                <a href="register"><button class="btn colr" href="register"> Đăng Ký</button></a>
                <!--/login signup-->
                @else
                <div class="dropdown">
                    <div class="avatar_login" id="dropdownMenuButton" data-toggle="dropdown">
                        <img src="image/avatar_users/{{ Auth::user()->avatar }}" class="rounded-circle" >
                    </div>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                        @if (Auth::user()->permission_id == 2)
                        <a class="dropdown-item" href="admin/">
                            <span class="oi oi-lock-locked"></span>
                            <span>Về Trang Admin</span>
                        </a>
                        @endif
                        <a class="dropdown-item" href="{{ route('user-information', ['user_id' => Auth::id(), 'user_url' => Auth::user()->name_url]) }}">
                            <span class="oi oi-person"></span>
                            <span>Thông Tin Cá Nhân</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout">
                            <span class="oi oi-power-standby"></span>
                            <span>Đăng Xuất</span>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <!--/nav-->
    </nav>
</div>
<!--/navbar-->