@extends('admin.layout.master')

@section('body')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Câu hỏi mới</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Tiêu Đề</label>
                                            <input type="text" class="form-control" placeholder="Nhập tiêu đề câu hỏi">
                                        </div>
                                        <div class="form-group">
                                            <label>Nội Dung</label>
                                            <textarea class="form-control ckeditor" name="content" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Thẻ</label>
                                            <input type="text" class="form-control" placeholder="Nhập các thẻ liên quan" data-role="tagsinput">
                                        </div>
                                        <div class="form-group">
                                            <label>Ẩn/Hiện</label>
                                            <br>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tạo câu hỏi mới</button>
                                        <button type="reset" class="btn btn-secondary">Làm mới</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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
    </script>
@endsection