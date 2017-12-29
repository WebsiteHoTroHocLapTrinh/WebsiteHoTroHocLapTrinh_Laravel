@extends('layout.master')
@section('body')

<!--image header-->
@include('layout.imageHeader')
<!--end image header-->

<!-- Content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="main-content">
                    <div class="content-card">
                        <div class="content-list">
                            <h4 class="topquestion d-inline-block">Tất Cả Tài Liệu</h4>
                            <hr>

                            <form id="form-search" action="{{ route('search-documentation') }}" method="GET">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input id="key_search" type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa cần tìm" >
                                            <span class="input-group-btn" >
                                                <button id="btn-search" type="button" class="btn btn-success">Tìm kiếm</button>
                                                <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                    Nâng cao
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="collapse" id="collapseExample">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <select class="form-control" name="subject">
                                                <option value="0">--- Chủ đề ---</option>
                                                @foreach ($subjects as $sj)
                                                <option value="{{ $sj->id }}" >
                                                    {{ $sj->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="" placeholder="Thẻ của tài liệu"  data-role="tagsinput">
                                            <input type="text" id="list-tag" hidden="" name="list_tag" value="0" >
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            <div class="tabs">
                                <ul class="nav nav-tabs d-flex justify-content-end" id="TagsTabContent" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="new" href="javascript:ChangeTab('new')" role="tab">Mới Nhất</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="view" href="javascript:ChangeTab('view')" role="tab">Lượt Xem</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="favorite" href="javascript:ChangeTab('favorite')" role="tab">Yêu thích</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="">
                                    <div class="tab-pane fade show active" id="load_list" role="tabpanel" aria-labelledby="">
                                        @include('documentation.items_documentation')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-3">
                <div class="sub-content" >
                    <div class="btn-documentation">
                        <a style="text-decoration: none;" href="{{ route('create-documentation') }}"><button type="button" class="btn btn-success btn-block btn-lg">Chia sẻ tài liệu ngay !!!</button></a>
                    </div>
                    <!--rank-tag-->
                    <div class="rank-reputation">
                        <div class="rank-header">
                            <h4>Bảng xếp hạng</h4>
                        </div>
                        <hr>
                        <div class="rank-items">
                            @php $i=1;  @endphp
                            @foreach($top_user as $top_user)
                            <a href="{{ route('user-information', ['user_id' => $top_user->id] ) }}" style="color: black;text-decoration: none;">
                                <div class="item">
                                    <div class="d-inline" style="">
                                        #{{ $i }}
                                    </div>
                                    <div class="d-inline">
                                        <img src="image/avatar_users/{{ $top_user->avatar }}" class="rounded-circle" width="30" height="30">
                                    </div>
                                    <div class="d-inline">
                                        {{ $top_user->name }}
                                    </div>
                                    <div class="d-inline float-right">
                                        <strong>{{ $top_user->point_reputation }}</strong>
                                    </div>
                                </div>
                            </a>
                            @php $i=$i+1;   @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="tag-common">
                        <div class="tag-common-header">
                            <p>Tag phổ biến</p>
                        </div>
                        <hr>
                        <div class="tag-common-list">
                            @foreach($top_tag->take(10) as $top_tag)
                            <div class="tag-item">
                                <a href="{{ route('search-documentation') }}?list_tag={{ $top_tag->id }}">
                                    <button class="btn btn-tag">
                                       {{ $top_tag->name }} <span class="badge badge-pill badge-primary">{{ $top_tag->kount }}</span>
                                   </button>
                               </a>
                           </div>
                           @endforeach
                        </div>
                        <a href="{{ route('list-tag') }}">Xem thêm ...</a>
                    </div>
                    <!--endrank-tag-->
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- end Content -->

@endsection

@section('title')
    {{ "Danh Sách Tài Liệu" }}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="css/jquery.sweet-modal.min.css" />
@endsection

@section('script')
    <script type="text/javascript" src="bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="bootstrap-tagsinput/custom-bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="js/typeahead.bundle.js"></script>
    <script src="js/jquery.sweet-modal.min.js"></script>
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
    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('button#filter').click(function() {
        //         var subject = $('select#subject').val();
        //         var tags = $('input#list-tag').val();
        //         if (tags == '') {
        //             tags = 0;
        //         }
        //         var tab = $('a.active').attr('id');
        //         window.location.href = '{{ route('list-documentation') }}' + '/' + subject + '/' + tags + '/' + tab;

        //     })  
        // });

        $(function(){
            document.getElementById("new").className = "nav-link";
            document.getElementById("view").className = "nav-link";
            document.getElementById("favorite").className = "nav-link";
            document.getElementById("{!! $tab !!}").className = "nav-link active";

            $('#btn-search').click(function(){
                var content = $('#key_search').val();
                if(content.length<=0){
                    $('#form-search').submit(function(e){
                        e.preventDefault();
                    });

                    $.sweetModal({
                        content: 'Bạn chưa nhập từ khóa tìm kiếm',
                        icon: $.sweetModal.ICON_WARNING
                    });
                }
                else{
                    document.getElementById('form-search').submit();
                }
            });
        });

        function ChangeTab(id_tab) {
            // var subject = $('select#subject').val();
            // var tags = $('input#list-tag').val();
            // if (tags == '') {
            //     tags = 0;
            // }

            document.getElementById("new").className = "nav-link";
            document.getElementById("view").className = "nav-link";
            document.getElementById("favorite").className = "nav-link";
            document.getElementById(id_tab).className = "nav-link active";
            $('#load a').css('color', '#dfecf6');
            $('#img_loading').append('<img style="position: absolute; z-index: 100000; width: 100%; height:2px;" src="/image/loading.gif"/>');
            // var url = '{{ route('list-documentation') }}' + '/' + subject + '/' + tags + '/' + id_tab;
            var url = '{{ route('list-documentation') }}' + '/' + id_tab;
            getListDocumentation(url);
            window.history.pushState("", "", url);
        };

        function getListDocumentation(url) {
            $.ajax({
                url : url,
                cache: false
            }).done(function (data) {
                $('#load_list').html(data);
            }).fail(function () {
                $.sweetModal({
                    content: 'Tab could not be loaded.',
                    title: 'Oh noes…',
                    icon: $.sweetModal.ICON_ERROR,

                    buttons: [
                    {
                        label: 'OK',
                        classes: 'redB'
                    }
                    ]
                });
            });
        };

    </script>
@endsection