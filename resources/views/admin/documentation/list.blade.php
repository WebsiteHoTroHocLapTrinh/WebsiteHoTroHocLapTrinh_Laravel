@extends('admin.layout.master')

@section('body')
		        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách tài liệu</h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-list-documentation">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tiêu đề</th>
                                        <th>Chủ đề</th>
                                        <th>Link</th>
                                        <th>Điểm</th>
                                        <th>Lượt xem</th>
                                        <th>Người chia sẻ</th>
                                        <th>Thời gian tạo</th>
                                        <th>Thời gian chỉnh sửa</th>
                                        <th>Ẩn/Hiện</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($documents as $doc)
                                    <tr>
                                        <td>
                                            <div class="id">{{ $doc->id }}</div>
                                            @if ($doc->is_new)
                                                {!! '<p style="padding-top: 10px;"><span style="padding: 5px;" class="label label-success">Mới</span></p>' !!}
                                            @endif
                                        </td>
                                        <td><a href="{{ route('detail-documentation', ['documentation_id' => $doc->id, 'documentation_url' => $doc->title_url]) }}" target="_blank">{{ $doc->title }}</a></td>
                                        <td>{{ $doc->subject->name }}</td>
                                        <td><a href="https://www.{{ $doc->link }}/" target="_blank">{{ $doc->link }}</a></td>
                                        <td>{{ $doc->point_rating }}</td>
                                        <td>{{ $doc->view }}</td>
                                        <td>{{ $doc->user->name }}</td>
                                        <td>{{ $doc->created_at }}</td>
                                        <td>{{ $doc->updated_at }}</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" 
                                                @if ($doc->active)
                                                    {{ "checked" }}
                                                @endif>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td><a href="/admin/documentation/edit/{{ $doc->id }}"><i style="font-size: 40px;" class="fa fa-edit"></i></a></td>
                                        <td><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="/admin/documentation/delete/{{ $doc->id }}"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="list-comment">
                        
                    </div>
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
            $('#dataTables-list-documentation').DataTable({
                responsive: true,
                "order": [[ 7, "desc" ]],
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
            $(document).on("click", "table#dataTables-list-documentation > tbody > tr", function() {
                $('table#dataTables-list-documentation > tbody > tr').removeClass("info");
                $(this).addClass("info");
                $(this).children('td').first().children('p').fadeOut('slow');
                var idDocument = $(this).find('td').first().children('div.id').html();
                var titleDocument = $(this).find('td:nth-child(2)').html();
                $.get("ajax/commentsOfDocument/"+idDocument, function(data) {           
                    $(".list-comment").html(data);
                    $("div.panel").has("table#dataTables-list-comment").find("h3 > a").remove();
                    $("div.panel").has("table#dataTables-list-comment").find("h3").append(titleDocument);
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("click", "table#dataTables-list-comment > tbody > tr", function() {
                $('table#dataTables-list-comment > tbody > tr').removeClass("info");
                $(this).addClass("info");
                $(this).children('td').first().children('p').fadeOut('slow');
            });
            // $('table#dataTables-list-question > tbody > tr').first().click();
        });
    </script>
    <script type="text/javascript" src="admin_asset/js/dismiss_new.js"></script>
@endsection