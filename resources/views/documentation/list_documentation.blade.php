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
                            <div class="row">
                                <div class="col-lg-3">
                                    <select class="form-control" id="subject">
                                        <option value="0">--- Chủ đề ---</option>
                                        @foreach ($subjects as $sj)
                                        <option value="{{ $sj->id }}" 
                                            @if ($sj->id == $subject_filter)
                                            {{ "selected" }}
                                            @endif>
                                        {{ $sj->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <input class="form-control" type="text" name="" placeholder="Thẻ của tài liệu"  data-role="tagsinput">
                                    <input type="text" id="list-tag" hidden="" name="list_tag" value="0" >
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control" id="sort">
                                        <option value="0">--- Sắp xếp ---</option>
                                        <option value="1">Yêu thích</option>
                                        <option value="2">Lượt xem</option>
                                        <option value="3">Ngày đăng</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <button id="filter" style="padding-left: 20px; padding-right: 20px;" class="btn btn-primary"><i class="fa fa-filter fa-fw"></i>Lọc</button>
                                </div>
                            </div>
                            {{-- <br>
                            <div class="row">
                                <div class="col">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm" >
                                            <span class="input-group-btn" >
                                                <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                            </span>
                                        </div>
                                    </form>
                                    
                                </div>
                                
                            </div> --}}
                            <hr>
                            
                            @if (count($documentations) <= 0)
                            {!! '<p style="font-size: 50px; text-align: center;">Không có tài liệu nào</p>' !!}
                            @else
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
                                                    <h6><a href="">{{ $doc->title }}</a></h6>
                                                </div>
                                                <div class="summary-description">
                                                    {{ strip_tags($doc->content) }}
                                                </div>
                                                <div class="list-tag">
                                                    @foreach ($doc->tags as $tag)
                                                    <p class="tag">{{ $tag->name }}</p>
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
                                                    <p class="user"><a href="user/info/user_{{ $doc->user_id }}">{{ $doc->user->name }}</a></p>
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
                            {{ $documentations->links('pagination.custom') }}
                            @endif
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
                                        <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
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
                                <button class="btn btn-tag">
                                   {{ $top_tag->name }} <span class="badge badge-pill badge-primary">{{ $top_tag->kount }}</span>
                               </button>
                           </div>
                           @endforeach
                        </div>
                        <a href="{{ route('tag') }}">Xem thêm ...</a>
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
@endsection

@section('script')
    {{-- Re-select sort --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select#sort option[value={{ $sort_filter }}]').attr('selected','selected');
        });
    </script>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('button#filter').click(function() {
                var subject = $('select#subject').val();
                var tags = $('input#list-tag').val();
                if (tags == '') {
                    tags = 0;
                }
                var sort = $('select#sort').val();
                window.location.href = '{{ route('documentation') }}' + '/' + subject + '/' + tags + '/' + sort;

            })  
        });
    </script>
@endsection