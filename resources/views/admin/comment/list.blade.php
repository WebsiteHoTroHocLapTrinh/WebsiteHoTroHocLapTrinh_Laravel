<div class="panel panel-default">
    <div class="panel-heading">
        <h3><small>Các bình luận của câu hỏi:</small> </h3>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        @if (session('thongbao_comment'))
        <div class="alert alert-success">
            {{ session('thongbao_comment') }}
        </div>
        @endif
        <table width="100%" class="table table-striped table-bordered table-hover dataTables" id="dataTables-list-comment">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Người bình luận</th>
                    <th>Thời gian tạo</th>
                    <th>Thời gian chỉnh sửa</th>
                    <th>Ẩn/Hiện</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $cmt)
                    <tr>
                        <td>
                            <div class="id">{{ $cmt->id }}</div>
                            @if ($cmt->is_new)
                                {!! '<p style="padding-top: 10px;"><span style="padding: 5px;" class="label label-success">Mới</span></p>' !!}
                            @endif
                        </td>
                        <td>{{ $cmt->content }}</td>
                        <td>{{ $cmt->user->name }}</td>
                        <td>{{ $cmt->created_at }}</td>
                        <td>{{ $cmt->updated_at }}</td>
                        <td>
                            <label class="switch">
                                <input type="checkbox"
                                @if ($cmt->active)
                                    {{ "checked" }}
                                @endif
                                >
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="admin/comment/delete/{{ $cmt->id }}"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->