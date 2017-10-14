<!--navbar-->
<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
        <!--brand-->
        <a class="navbar-brand" href="/">
            <img class="img-responsive mr-sm-5" src="image/elearning-logo.png" width="150" height="50" alt=" ">
        </a>
        <!--/brand-->
        <!--button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--/button-->
        <!--nav-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!--danh mục-->
            <ul class="navbar-nav">
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="list-question"><strong>Questions</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="list-documentation"><strong>Documentations</strong></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="list-tag"><strong>Tags</strong></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="list-user"><strong>Users</strong></a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link mr-sm-5" href="about"><strong>About</strong></a>
                </li>
            </ul>
            <!--/danh mục-->
            <!--search box-->
            <div class="input-group stylish-input-group mr-sm-5">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon">
                   <button type="submit">
                     <span class="oi oi-magnifying-glass"></span>
                 </button>
             </span>
         </div>
         <!--/search box-->
        @if (!Auth::check())
             <!--login signup-->
             <a href="login"><button type="button" class="btn mr-3">Log In</button></a>
             <a href="register"><button class="btn colr" href="register"> Sign Up</button></a>
             <!--/login signup-->
        @else
            <div class="dropdown">
                <div class="" id="dropdownMenuButton" data-toggle="dropdown" >
                    <img src="image/k17.jpg" width="40">
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (Auth::user()->permission_id == 2)
                        <a class="dropdown-item" href="admin/">Về Trang Admin</a>
                    @endif
                    <a class="dropdown-item" href="user-information">Thông Tin Cá Nhân</a>
                    <a class="dropdown-item" href="#">Cài Đặt</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout">Đăng Xuất</a>
                </div>
            </div>
        @endif
         
     </div>
     <!--/nav-->
 </nav>
</div>
<!--/navbar-->