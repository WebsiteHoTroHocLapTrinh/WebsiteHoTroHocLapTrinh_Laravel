<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Hỗ Trợ Học Lập Trình - Hỏi Đáp - Tài Liệu">
    <meta name="author" content="">
    <base href="{{ asset('') }}">
    <link rel="shortcut icon" href="image/tab-icon.png">
    <title>Admin Area</title>
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="admin_asset/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin_asset/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="admin_asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        @include('admin.layout.header')
        @yield('body')
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/js/sb-admin-2.js"></script>
    @yield('script')
</body>

</html>