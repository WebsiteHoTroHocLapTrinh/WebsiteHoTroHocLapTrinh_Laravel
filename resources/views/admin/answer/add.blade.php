@extends('admin.layout.master')

@section('body')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Câu trả lời mới <a href="admin/question/answer/list/{{ $question->id }}"><button style="margin-left: 20px;" class="btn btn-success "><i class="fa fa-list fa-fw"></i>    Về danh sách câu trả lời</button></a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3><small>Thêm câu trả lời cho câu hỏi:</small> <a href="" target="_blank">{{ $question->title }}</a></h3>
                        </div>
                        <!-- /.panel-heading -->
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
                                    <form action="admin/question/answer/add/{{ $question->id }}" method="POST" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nội Dung</label>
                                            <textarea class="form-control ckeditor" name="content" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Ẩn/Hiện</label>
                                            <br>
                                            <label class="switch">
                                                <input type="checkbox" checked name="active">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tạo câu trả lời mới</button>
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
@endsection

@section('script')
<!-- Toggle Switch Checkbox -->
    <script src="admin_asset/js/toggle_switch.js"></script>
    <!-- CKEditor -->
    <script src="admin_asset/ckeditor/ckeditor.js"></script>
@endsection