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
                        <div class="content-list">
                            @if(count($list_paginate)<=0)
                                <h4 class="topquestion d-inline-block">Không tìm thấy kết quả cho từ khóa: "{{ $keyword }}"</h4>
                                @else
                                <h4 class="topquestion d-inline-block">Kết quả cho từ khóa: "{{ $keyword }}"</h4>
                            @endif
                            <br>
                            <br>
                            <form action="{{ route('search-question') }}" method="GET">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa cần tìm" value="{{ $keyword }}">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Nhập các thẻ liên quan" data-role="tagsinput">
                                        <input type="text" id="list-tag" hidden=""  name="list_tag">
                                    </div>
                                    <div class="col-lg-2">
                                        <button id="filter" style="padding-left: 20px; padding-right: 20px;" class="btn btn-primary"><i class="fa fa-filter fa-fw"></i>Lọc</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            @foreach($list_paginate as $lt)
                           <div class="question-summary">
                            <div class="row">
                                <div class="statistic col-lg-4">
                                    <div class="count-views">
                                        <span>{{ $lt->view }}</span>
                                        <div>lượt xem</div>
                                    </div>
                                    <div class="count-answers 
                                    @if(!is_null($lt->answers->where('best_answer',1)->first()))
                                        {{ 'answered-accepted' }}
                                        @elseif(count($lt->answers->where('active',1))>0)
                                        {{ 'answered' }}
                                    @endif
                                    ">
                                        <span>{{ count($lt->answers->where('active',1))}}</span>
                                        <div>câu trả lời</div>
                                    </div>
                                    <div class="count-votes">
                                        <span>{{ $lt->point_rating }}</span>
                                        <div>bình chọn</div>
                                    </div>
                                </div>
                                <div class="summary col-lg-8 break-word">
                                    <div class="summary-title">
                                        <div class="summary-title">
                                            <h6><a href="{{ route('detail-question', ['question_id' => $lt->id]) }}">{{ $lt->title }}</a></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                     <div class="list-tag col-lg-7">
                                        @foreach($lt->tags as $tag)
                                        <a href="{{ route('search-question') }}?list_tag={{ $tag->id }}">
                                            <p class="tag">{{ $tag->name }}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    <div class="started col-lg-5">
                                        @php
                                        $date1 = $lt->created_at;
                                        $date2 = Carbon\Carbon::now();
                                        $interval = $date1->diff($date2);
                                        if($interval->y!=0) 
                                            $time= $interval->y . " năm trước"; 
                                        elseif ($interval->m!=0)
                                            $time= $interval->m . " tháng trước";
                                        elseif ($interval->d!=0)
                                            $time= $interval->d . " ngày trước";
                                        elseif($interval->h!=0)
                                            $time= $interval->h . " giờ trước";
                                        elseif($interval->i!=0)
                                            $time= $interval->i . " phút trước";
                                        else
                                            $time="Vừa xong";
                                        @endphp

                                        <p class="user"><a href="{{ route('user-information', ['user_id' => $lt->user_id]) }}">{{ $lt->user->name }}</a></p>
                                        <p class="action">đã hỏi</p>
                                        <p class="time">{{ $time }}</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                           @endforeach
                        </div>
                        {{ $list_paginate->appends(['keyword' => $keyword, 'list_tag' => $list_tag])->links('pagination.custom') }}
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
                            @foreach($top_tag as $top_tag)
                            <div class="tag-item">
                                <a href="{{ route('search-question') }}?list_tag={{ $top_tag->id }}">
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
{{  "$keyword - Tìm Kiếm Câu Hỏi" }}
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="bootstrap-tagsinput/bootstrap-tagsinput.css">
@endsection

@section('script')
<script type="text/javascript" src="bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="bootstrap-tagsinput/custom-bootstrap-tagsinput.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.js"></script>
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

    var stringTags = {!! $tags_filter !!}
        stringTags.forEach(function(item) {
            elt.tagsinput('add', item);
        });
</script>
@endsection
