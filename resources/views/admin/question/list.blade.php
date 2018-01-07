@extends('admin.layout.master')

@section('body')
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách câu hỏi</h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover dataTables" id="dataTables-list-question">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tiêu đề</th>
                                        <th>Điểm</th>
                                        <th>Lượt xem</th>
                                        <th>Người hỏi</th>
                                        <th>Thời gian tạo</th>
                                        <th>Thời gian chỉnh sửa</th>
                                        <th>Ẩn/Hiện</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                        <th>Trả Lời</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($questions as $qt)
                                    <tr>
                                        <td>
                                            <div class="id">{{ $qt->id }}</div>
                                            @if ($qt->is_new)
                                                {!! '<p style="padding-top: 10px;"><span style="padding: 5px;" class="label label-success">Mới</span></p>' !!}
                                            @endif
                                        </td>
                                        <td><a href="{{ route('detail-question', ['question_id' => $qt->id, 'question_url' => $qt->title_url]) }}" target="_blank">{{ $qt->title }}</a></td>
                                        <td>{{ $qt->point_rating }}</td>
                                        <td>{{ $qt->view }}</td>
                                        <td>{{ $qt->user->name }}</td>
                                        <td>{{ $qt->created_at }}</td>
                                        <td>{{ $qt->updated_at }}</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" 
                                                    @if ($qt->active)
                                                        {{ "checked" }}
                                                    @endif>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td><a href="admin/question/edit/{{ $qt->id }}"><i style="font-size: 40px;" class="fa fa-edit"></i></a></td>
                                        <td><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="admin/question/delete/{{ $qt->id }}"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
                                        <td><a href="admin/question/answer/list/{{ $qt->id }}"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a></td>
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
            $('#dataTables-list-question').DataTable({
                responsive: true,
                "order": [[ 5, "desc" ]],
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
                    },
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("click", "table#dataTables-list-question > tbody > tr", function() {
                $('table#dataTables-list-question > tbody > tr').removeClass("info");
                $(this).addClass("info");
                $(this).children('td').first().children('p').fadeOut('slow');
                var idQuestion = $(this).find('td').first().children('div.id').html();
                var titleQuestion = $(this).find('td:nth-child(2)').html();
                // alert(titleQuestion);
                $.get("ajax/commentsOfQuestion/"+idQuestion, function(data) {           
                    $(".list-comment").html(data);
                    $("div.panel").has("table#dataTables-list-comment").find("h3 > a").remove();
                    $("div.panel").has("table#dataTables-list-comment").find("h3").append(titleQuestion);
                });
            });
            // $('table#dataTables-list-question > tbody > tr').first().click();
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