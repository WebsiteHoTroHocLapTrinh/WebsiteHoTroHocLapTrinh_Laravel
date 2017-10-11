@extends('admin.layout.master')

@section('body')
                <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><small>Chỉnh sửa câu trả lời</small> ID: 1</h1>
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
                                    <div class="tags-editor">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Câu hỏi cần trả lời</label>
                                                <select class="form-control" disabled="">
                                                    <option value="1">Làm sao để hết FA ?</option>
                                                    <option value="1">Làm sao để hết FA ?</option>
                                                    <option value="1">Làm sao để hết FA ?</option>
                                                    <option value="1">Làm sao để hết FA ?</option>
                                                    <option value="1">Làm sao để hết FA ?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Nội Dung</label>
                                                <textarea class="form-control ckeditor" name="content" rows="10">Tao cũng <strong>không</strong> biết nữa</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Ẩn/Hiện</label>
                                                <br>
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cập nhật câu trả lời</button>
                                        </form>
                                    </div>
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