<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Hỗ Trợ Học Lập Trình - Hỏi Đáp - Tài Liệu">
    <meta name="author" content="">
    <title>Website Hỗ Trợ Học Lập Trình - Hỏi Đáp - Tài Liệu</title>
    <link rel="shortcut icon" href="source/image/tab-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="source/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="source/css/style.css">
    <link href="source/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    @yield('css')
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="source/fonts/font-iconic/css/open-iconic-bootstrap.css">
    <link href="source/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<!--body-->

<body>
    @include('master.header')
    @yield('body') 
    @include('master.footer')
    <!-- JS -->
    <script type="text/javascript" src="source/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="source/js/popper.min.js"></script>
    <script type="text/javascript" src="source/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="source/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="source/js/Chart.min.js"></script>
    <script type="text/javascript" src="source/js/arrow34.js"></script>
    @yield('script')
</body>
<!--end body-->

</html>