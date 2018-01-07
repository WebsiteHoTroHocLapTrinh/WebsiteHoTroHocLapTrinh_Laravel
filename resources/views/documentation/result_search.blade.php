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
                            @if(count($documentations)<=0)
                                <h4 class="topquestion d-inline-block">Không tìm thấy kết quả cho từ khóa: "{{ $keyword }}"</h4>
                                @else
                                <h4 class="topquestion d-inline-block">Kết quả cho từ khóa: "{{ $keyword }}"</h4>
                            @endif
                            <br>
                            <br>
                            <form id="form-search" action="{{ route('search-documentation') }}" method="GET">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input id="key_search" type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa cần tìm" value="{{ $keyword }}" >
                                            <span class="input-group-btn" >
                                                <button id="btn-search" type="button" class="btn btn-success">Tìm kiếm</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <select class="form-control" name="subject">
                                            <option value="0">--- Chủ đề ---</option>
                                            @foreach ($subjects as $sj)
                                            <option value="{{ $sj->id }}" 
                                                @if ($subject == $sj->id)
                                                {{ "selected" }}
                                                @endif>
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
                            </form>
                            <br>
                            <hr>
                            <div class="tabs">
                                <div class="tab-content" id="">
                                    <div class="tab-pane fade show active" id="load_list" role="tabpanel" aria-labelledby="">
                                        <div class="list-documentation">
                                            @foreach ($documentations as $doc)
                                            <div class="documentation-summary">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="statistic">
                                                            <div class="documentation-favorite">
                                                                <span class="oi oi-heart"></span> {{ $doc->point_rating }}
                                                            </div>
                                                            <div class="documentation-count-views">
                                                                <span>{{ $doc->view }}</span>
                                                                <div>lượt xem</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="summary">
                                                            <div class="summary-title">
                                                                <h6><a href="{{ route('detail-documentation', ['documentation_id' => $doc->id, 'documentation_url' => $doc->title_url]) }}">{{ $doc->title }}</a></h6>
                                                            </div>
                                                            <div class="summary-description">
                                                                {{ strip_tags($doc->content) }}
                                                            </div>
                                                            <div class="list-tag">
                                                                @foreach ($doc->tags as $tag)
                                                                <a href="{{ route('search-documentation') }}?list_tag={{ $tag->id }}">
                                                                    <p class="tag">{{ $tag->name }}</p>
                                                                </a>
                                                                @endforeach
                                                            </div>
                                                            <div class="started">
                                                                @php
                                                                $date1 = $doc->created_at;
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
                                                                <p class="user"><a href="{{ route('user-information', ['user_id' => $doc->user->id, 'user_url' => $doc->user->name_url]) }}">{{ $doc->user->name }}</a></p>
                                                                <p class="action">đã chia sẽ</p>
                                                                <p class="time">{{ $time }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{ $documentations->appends(['keyword' => $keyword, 'list_tag' => $list_tag, 'subject' => $subject])->links('pagination.custom') }}
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
                            <a href="user/info/user_{{ $top_user->id }}" style="color: black;text-decoration: none;">
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
    {{ "$keyword - Tìm Kiếm Tài Liệu" }}
@endsection

@section('css')
    <link rel="stylesheet" href="css/jquery.sweet-modal.min.css" />
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
    <script src="js/jquery.sweet-modal.min.js"></script>
    <script>
    $(function(){
        $('#btn-search').click(function(){
            var content = $('#key_search').val();
                //alert(content)
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
    })
    </script>
@endsection