@extends('layout.master')
@section('body')
@include('layout.imageHeader')
<!-- Content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="main-content">
                    <div class="content-card">
                        <div class="tabs">
                            <h4 class="topquestion d-inline-block">Tất Cả Câu Hỏi</h4>
                            <ul class="nav nav-tabs d-flex justify-content-end" id="QuestionsTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="new" href="javascript:changeTab('new');" role="tab">Mới Nhất</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="view" href="javascript:changeTab('view');" role="tab">Lượt Xem</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="rep" href="javascript:changeTab('rep');" role="tab">Trả Lời</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="rate" href="javascript:changeTab('rate');" role="tab">Bình Chọn</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="">
                                <div id="load_list" class="tab-pane fade show active" role="tabpanel" aria-labelledby="">
                                    {{-- // --}}
                                    <div id="load" style="position: relative;">
                                        <div id="img_loading">

                                        </div>
                                        @include('question.items_question')
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sub-content">
                    <div class="btn-question">
                        <a href="{{ route('create-question') }}">
                            <button type="button" class="btn btn-success btn-block btn-lg">Đặt câu hỏi ngay !!!</button>
                        </a>
                    </div>
                    <div class="count-questions">
                        <div class="stats-container">
                            <div class="row">
                                <div class="stats">
                                    <span>{{ count($list) }}</span>
                                    <div>câu hỏi</div>
                                </div>
                                <div class="stats">
                                    @php $d=0; @endphp
                                    @foreach($list as $listAnswer)
                                    @php 
                                    $d= $d + count($listAnswer->answers->where('active',1)); 
                                    @endphp
                                    @endforeach
                                    <span>{{ $d }}</span>
                                    <div>câu trả lời</div>
                                </div>
                                <div class="stats">
                                    @php $c=0; @endphp
                                    @foreach($list as $list)
                                    @php 
                                    $c= $c + count($list->comments->where('active',1)); 
                                    @endphp
                                    @endforeach
                                    <span>{{ $c}}</span>
                                    <div>bình luận</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--rank-tag-->
                    <div class="rank-reputation">
                        <div class="rank-header">
                            <h4>Bảng xếp hạng</h4>
                        </div>
                        <hr>
                        <div class="rank-items">
                            @php $i=1;@endphp
                            @foreach($top_user as $top_user)
                            <a href="{{ route('user-information', ['user_id' => $top_user->id]) }}" style="color: black;text-decoration: none;">
                                <div class="item">
                                    <div class="d-inline" style="">
                                        <span class="oi oi-star" style="color: #DFDF39;"></span>{{ $i }}
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
                            @php $i=$i+1 @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="tag-common">
                        <div class="tag-common-header">
                            <p>Tag phổ biến</p>
                        </div>
                        <hr>
                        <div class="tag-common-list">
                            @foreach($top_tag as $tag)
                            <div class="tag-item">
                                <a href="{{ route('search-question') }}?list_tag={{ $tag->id }}">
                                    <button class="btn btn-tag">
                                       {{ $tag->name }} <span class="badge badge-pill badge-primary">{{ $tag->kount }}</span>
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
{{ "Danh Sách Câu Hỏi" }}
@endsection

@section('css')
<link rel="stylesheet" href="css/jquery.sweet-modal.min.css" />
@endsection

@section('script')
<script src="js/jquery.sweet-modal.min.js"></script>
<script>    
    function changeTab(id_tab) {
        document.getElementById("new").className = "nav-link";
        document.getElementById("view").className = "nav-link";
        document.getElementById("rep").className = "nav-link";
        document.getElementById("rate").className = "nav-link";
        document.getElementById(id_tab).className = "nav-link active";
        $('#load a').css('color', '#dfecf6');
        $('#img_loading').append('<img style="position: absolute; z-index: 100000; width: 100%; height:2px;" src="/image/loading.gif"/>');
        var url = '{{ route('list-question') }}'+ '/' + id_tab;
        getListQuestion(url);
        window.history.pushState("", "", url);
    };

    function getListQuestion(url) {
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

    $(function(){
        document.getElementById("new").className = "nav-link";
        document.getElementById("view").className = "nav-link";
        document.getElementById("rep").className = "nav-link";
        document.getElementById("rate").className = "nav-link";
        document.getElementById("{!! $tab !!}").className = "nav-link active";
    });

//     window.onpopstate = function (e) {
//         //alert("back")
//     var res = localStorage.getItem('response');         
//     $('#load_list').html(res);
// }


    // $(function() {
    //     $('body').on('click', '.pagination a', function(e) {
    //         e.preventDefault();

    //     $('#load a').css('color', '#dfecf6');
    //     $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/image/loading.gif" />');

    //     var url = $(this).attr('href');  
    //     getPage(url);
    //     window.history.pushState("", "", url);
    // });

    //     function getPage(url) {
    //         $.ajax({
    //             url : url  
    //         }).done(function (data) {
    //             $('#load_list').html(data);  
    //         }).fail(function () {
    //             alert('Page could not be loaded.');
    //         });
    //     }
    // });
    // 
    $(document).ready(function(){
        var confirm = '{{ session('daxoa') }}';
        if(confirm){
            $.sweetModal({
                content: '{!! session('daxoa') !!}',
                icon: $.sweetModal.ICON_SUCCESS
            });
        }
    });
</script>
@endsection
