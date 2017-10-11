@extends('admin.layout.master')

@section('body')
                <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quyền mới</h1>
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
                                            <label>Tên</label>
                                            <input type="text" class="form-control" placeholder="Nhập tên quyền">
                                        </div>
                                        <div class="form-group">
                                            <label>Key</label>
                                            <input type="number" class="form-control" placeholder="Nhập key quyền">
                                        </div>
                                        <div class="form-group">
                                            <label>Ẩn/Hiện</label>
                                            <br>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tạo quyền mới</button>
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
@endsection