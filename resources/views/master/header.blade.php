<!--navbar-->
    <div class="container">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
            <!--brand-->
            <a class="navbar-brand" href="index">
				<img class="img-responsive mr-sm-5" src="source/image/elearning-logo.png" width="150" height="50" alt=" ">
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
                        <a class="nav-link" href="ListQuestion"><strong>Questions</strong> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-sm-3">
                        <a class="nav-link" href="ListDocumentation"><strong>Documentation</strong></a>
                    </li>
                    <li class="nav-item mr-sm-3">
                        <a class="nav-link" href="ListTag"><strong>Tags</strong></a>
                    </li>
                    <li class="nav-item mr-sm-3">
                        <a class="nav-link" href="ListUser"><strong>Users</strong></a>
                    </li>
                    <li class="nav-item mr-sm-3">
                        <a class="nav-link mr-sm-5" href="About"><strong>About</strong></a>
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
                <!--login signup-->
                    @yield('login-signin')
                <!--/login signup-->
            </div>
            <!--/nav-->
        </nav>
    </div>
<!--/navbar-->