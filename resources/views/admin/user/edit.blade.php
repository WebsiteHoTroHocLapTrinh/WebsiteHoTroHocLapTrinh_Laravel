@extends('admin.layout.master')

@section('body')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Chỉnh sửa người dùng: <strong style="color: blue;">{{ $user->name }}</strong></h3>
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
                                    <form role="form" action="admin/user/edit/{{ $user->id }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="col-lg-6">
                                            @if (count($errors) > 0)
                                           <div class="alert alert-warning">
                                            @foreach ($errors->all() as $err)
                                            {{ $err }} <br>
                                            @endforeach
                                            </div>
                                            @endif
                                            @if (session('thongbao'))
                                            <div class="alert alert-success">
                                                {{ session('thongbao') }}
                                            </div>
                                            @endif
                                            <div class="form-group">
                                                <label>Tên</label>
                                                <input type="text" name="name" class="form-control" placeholder="Nhập tên người dùng" value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Nhập email người dùng" value="{{ $user->email }}" disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label>Phân Quyền</label>
                                                <select class="form-control" name="permission">
                                                    <option value="{{ $user->permission_id }}">{{ $user->permission->name }}</option>
                                                    @foreach($permission as $pr)
                                                    <option value="{{ $pr->id }}">{{ $pr->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label>Thẻ Yêu Thích</label>
                                                <input type="text" class="form-control" placeholder="Nhập các thẻ liên quan" data-role="tagsinput">
                                                <input type="text" name="" id="list-tag" hidden="">
                                            </div> -->
                                        
                                            <button type="submit" class="btn btn-primary">Cập nhật người dùng</button>
                                            <a href="change_password.html">
                                                <button type="button" class="btn btn-success">Reset Password</button>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
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