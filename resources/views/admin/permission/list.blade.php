@extends('admin.layout.master')

@section('body')
		        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách quyền</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-list-permission">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Key</th>
                                        <th>Người tạo</th>
                                        <th>Thời gian tạo</th>
                                        <th>Thời gian chỉnh sửa</th>
                                        <th>Ẩn/Hiện</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Thành Viên</td>
                                        <td>1</td>
                                        <td>Thanh Tùng</td>
                                        <td>30/09/2017 22:00:00</td>
                                        <td>30/09/2017 22:00:00</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td><a href="/admin/permission/edit"><i style="font-size: 40px;" class="fa fa-edit"></i></a></td>
                                        <td><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href=""><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Quản Trị Viên</td>
                                        <td>2</td>
                                        <td>Thanh Tùng</td>
                                        <td>30/09/2017 22:00:00</td>
                                        <td>30/09/2017 22:00:00</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td><a href="/admin/permission/edit"><i style="font-size: 40px;" class="fa fa-edit"></i></a></td>
                                        <td><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href=""><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
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
	<!-- DataTables CSS -->
    <link href="admin_asset/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Toggle Switch Checkbox -->
    <link rel="stylesheet" type="text/css" href="admin_asset/css/toggle_switch.css">
@endsection

@section('script')
	<!-- DataTables JavaScript -->
    <script src="admin_asset/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="admin_asset/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Toggle Switch Checkbox   -->
    <script src="admin_asset/js/toggle_switch.js"></script>
        <script>
        $(document).ready(function() {
            $('#dataTables-list-permission').DataTable({
                responsive: true,
                "language": {
                    "decimal":        "",
                    "emptyTable":     "Không có dữ liệu",
                    "info":           "Đang hiển thị _START_ đến _END_ trong _TOTAL_ mục",
                    "infoEmpty":      "Đang hiển thị 0 đến 0 của 0 mục",
                    "infoFiltered":   "(Đã được lọc từ tổng _MAX_ mục)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Hiển thị _MENU_ mục",
                    "loadingRecords": "Đang tải...",
                    "processing":     "Đang xử lý...",
                    "search":         "Tìm kiếm:",
                    "zeroRecords":    "Không tìm thấy mục nào",
                    "paginate": {
                        "first":      "Đầu",
                        "last":       "Cuối",
                        "next":       "Kế",
                        "previous":   "Trước"
                    },
                    "aria": {
                        "sortAscending":  ": Sắp xếp tăng dần",
                        "sortDescending": ": Sắp xếp giảm dần"
                    }
                }
            });
        });
    </script>
@endsection