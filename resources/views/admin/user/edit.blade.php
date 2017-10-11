@extends('admin.layout.master')

@section('body')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><small>Chỉnh sửa người dùng</small> Thanh Tùng</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tên</label>
                                                <input type="text" class="form-control" placeholder="Nhập tên người dùng" value="Thanh Tùng">
                                            </div>
                                            <div class="form-group">
                                                <label>Phân Quyền</label>
                                                <select class="form-control">
                                                    <option value="1">Thành Viên</option>
                                                    <option value="2">Quản Trị Viên</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Giới Thiệu</label>
                                                <textarea class="form-control ckeditor" name="content" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Địa Chỉ</label>
                                                <input type="text" class="form-control" placeholder="Nhập địa chỉ người dùng" value="TP.HCM">
                                            </div>
                                            <div class="form-group">
                                                <label>Tuổi</label>
                                                <input type="number" class="form-control" placeholder="Nhập tuổi người dùng" value="21">
                                            </div>
                                            <div class="form-group">
                                                <label>Nghề Nghiệp</label>
                                                <input type="text" class="form-control" placeholder="Nhập nghề nghiệp người dùng" value="Sinh Viên">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="thumbnail">
                                                            <img src="admin_asset/k17.jpg" width="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <label>Chọn hình ảnh đại diện</label>
                                                        <input type="file" name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Nhập email người dùng" value="nguyenhoangthanhtung1610@gmail.com" disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label>Thẻ Yêu Thích</label>
                                                <input type="text" class="form-control" placeholder="Nhập các thẻ liên quan" data-role="tagsinput">
                                                <input type="text" name="" id="list-tag" hidden="">
                                            </div>
                                            <div class="form-group">
                                                <label>Ẩn/Hiện</label>
                                                <br>
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cập nhật người dùng</button>
                                            <a href="change_password.html">
                                                <button type="button" class="btn btn-success">Đổi mật khẩu</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection

@section('css')
	<!-- Toggle Switch Checkbox   -->
    <link rel="stylesheet" type="text/css" href="admin_asset/css/toggle_switch.css">
    <!-- Bootstrap Tags Input -->
    <link rel="stylesheet" type="text/css" href="admin_asset/bootstrap-tagsinput/bootstrap-tagsinput.css">
@endsection

@section('script')
	<!-- Toggle Switch Checkbox -->
    <script src="admin_asset/js/toggle_switch.js"></script>
    <!-- CKEditor -->
    <script src="admin_asset/ckeditor/ckeditor.js"></script>
        <!-- Bootstrap Tags Input -->
    <script src="admin_asset/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="admin_asset/bootstrap-tagsinput/custom-bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="admin_asset/js/typeahead.bundle.js"></script>
    <script type="text/javascript">
    var tags = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: [{ "id": 1, "name": "PHP" },
            { "id": 2, "name": "C#" },
            { "id": 3, "name": "AngularJS" },
            { "id": 4, "name": "Android" },
            { "id": 5, "name": "Java" },
            { "id": 6, "name": "C++" },
            { "id": 7, "name": "Python" },
            { "id": 8, "name": "MongoDB" },
            { "id": 9, "name": "SQL" },
            { "id": 10, "name": "MySQL" },
            { "id": 11, "name": "Laravel" },
            { "id": 12, "name": "NodeJS" },
            { "id": 13, "name": "Reactive" },
            { "id": 14, "name": "ExpressJS" },
            { "id": 15, "name": "iOS" },
            { "id": 16, "name": "CSS" },
            { "id": 17, "name": "JavaScript" },
            { "id": 18, "name": "ASP.NET" },
            { "id": 19, "name": "R" },
            { "id": 20, "name": "HTML" },
        ]
    });
    tags.initialize();

    var elt = $('input[data-role="tagsinput"]');
    elt.tagsinput({
        itemValue: 'id',
        itemText: 'name',
        typeaheadjs: {
            name: 'tags',
            displayKey: 'name',
            source: tags.ttAdapter()
        }
    });
    elt.tagsinput('add', { "id": 1 , "name": "PHP" });
    elt.tagsinput('add', { "id": 4 , "name": "Android" });
    elt.tagsinput('add', { "id": 7 , "name": "Python" });
    </script>
@endsection