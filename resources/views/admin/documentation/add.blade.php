@extends('admin.layout.master')

@section('body')
                <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tài liệu mới</h1>
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
                                    <form action="admin/documentation/add" method="POST" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Chủ Đề</label>
                                            <select class="form-control" name="subject">
                                                @foreach($subjects as $subj)
                                                <option value="{{ $subj->id }}">{{ $subj->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tiêu Đề</label>
                                            <input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề tài liệu">
                                        </div>
                                        <div class="form-group">
                                            <label>Nội Dung</label>
                                            <textarea class="form-control tinymce" name="content" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control" name="link" placeholder="Nhập link tải">
                                        </div>
                                        <div class="form-group">
                                            <label>Thẻ</label>
                                            <input type="text" class="form-control" placeholder="Nhập các thẻ liên quan" data-role="tagsinput">
                                            <input type="text" id="list-tag" name="list_tag" hidden="">
                                        </div>
                                        <div class="form-group">
                                                <label>Ẩn/Hiện</label><br>
                                                <label class="switch">
                                                    <input type="checkbox" checked name="active">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        <button type="submit" class="btn btn-primary">Tạo tài liệu mới</button>
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
    <!-- TinyMCE -->
    <script type="text/javascript" src="admin_asset/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="admin_asset/tinymce/init_tinymce.js"></script>  
    <!-- Bootstrap Tags Input -->
    <script src="admin_asset/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="admin_asset/bootstrap-tagsinput/custom-bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="admin_asset/js/typeahead.bundle.js"></script>
    <script type="text/javascript">
    var tags = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: {!! $tags !!}
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