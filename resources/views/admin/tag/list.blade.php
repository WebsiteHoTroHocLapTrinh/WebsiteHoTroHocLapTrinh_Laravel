@extends('admin.layout.master')

@section('body')
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách thẻ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @if (session('thongbao'))
                                <div class="alert alert-success">
                                    {{ session('thongbao') }}
                                </div>
                            @endif
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-list-tag">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Mô tả</th>
                                        <th>Lượt sử dụng</th>
                                        <th>Người tạo</th>
                                        <th>Thời gian tạo</th>
                                        <th>Thời gian chỉnh sửa</th>
                                        <th>Ẩn/Hiện</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td>
                                                <div class="id">{{ $tag->id }}</div>
                                                @if ($tag->is_new)
                                                    {!! '<p style="padding-top: 10px;"><span style="padding: 5px;" class="label label-success">Mới</span></p>' !!}
                                                @endif
                                            </td>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->description }}</td>
                                            <td>{{ $tag->users->count() + $tag->questions->count() + $tag->documentations->count() }}</td>
                                            <td>{{ $tag->user_created->name }}</td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>{{ $tag->updated_at }}</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" 
                                                        @if ($tag->active)
                                                            {{ "checked" }}
                                                        @endif>
                                                    >
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td><a href="admin/tag/edit/{{ $tag->id }}"><i style="font-size: 40px;" class="fa fa-edit"></i></a></td>
                                            <td><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="admin/tag/delete/{{ $tag->id }}"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    @endforeach
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
            $('#dataTables-list-tag').DataTable({
                responsive: true,
                "order": [[ 6, "desc" ]],
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
        <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("click", "table#dataTables-list-tag > tbody > tr", function() {
                $('table#dataTables-list-tag > tbody > tr').removeClass("info");
                $(this).addClass("info");
                $(this).children('td').first().children('p').fadeOut("slow");
            });
            // $('table#dataTables-list-question > tbody > tr').first().click();
        });
    </script>
    <script type="text/javascript" src="admin_asset/js/dismiss_new.js"></script>
@endsection