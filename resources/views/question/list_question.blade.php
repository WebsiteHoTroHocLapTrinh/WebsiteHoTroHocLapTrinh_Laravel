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
                                    <a class="nav-link active" id="1" data-toggle="tab" href="" role="tab" aria-controls="1" aria-expanded="true">Mới Nhất</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="2" data-toggle="tab" href="" role="tab" aria-controls="luotxem">Lượt Xem</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="3" data-toggle="tab" href="" role="tab" aria-controls="traloi">Trả Lời</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="4" data-toggle="tab" href="" role="tab" aria-controls="binhchon">Bình Chọn</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="QuestionsTabContent">
                                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="">
                                    <div class="content_each_tab">
                                       <?php
                                       $ListNew = $list->sortByDesc('id');
                                       ?>
                                       @foreach($ListNew as $lt)
                                       <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>{{ $lt->view }}</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>{{ count($lt->answers->where('active',1))}}</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>{{ $lt->point_rating }}</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summary-title">
                                                    <div class="summary-title">
                                                        <h6><a href="question/detail/qs_{{ $lt->id }}">{{ $lt->title }}</a></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                   <div class="list-tag col-lg-8">
                                                    @foreach($lt->tags as $tag_new)
                                                    <p class="tag">{{ $tag_new->name }}</p>
                                                    @endforeach
                                                </div>
                                                <div class="started col-lg-4">
                                                    <?php
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
                                                        $time=" just now";
                                                    ?>

                                                    <p class="user"><a href="user/info/user_{{ $lt->user_id }}">{{ $lt->user->name }}</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">{{ $time }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <nav aria-label="Page navigation question">
                                <ul class="pagination justify-content-center" style="margin-top: 20px;">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="sub-content">
            <div class="btn-question">
                <button onclick="location.href = 'question/create-question';" type="button" class="btn btn-success btn-block btn-lg">Đặt câu hỏi ngay !!!</button>
            </div>
            <div class="count-questions">
                <div class="stats-container">
                    <div class="row">
                        <div class="stats">
                            <span>{{ count($list) }}</span>
                            <div>câu hỏi</div>
                        </div>
                        <div class="stats">
                            <?php $d=0; ?>
                            @foreach($list as $listAnswer)
                            <?php 
                            $d= $d + count($listAnswer->answers->where('active',1)); 
                            ?>
                            @endforeach
                            <span>{{ $d }}</span>
                            <div>câu trả lời</div>
                        </div>
                        <div class="stats">
                            <?php $c=0; ?>
                            @foreach($list as $list)
                            <?php 
                            $c= $c + count($list->comments->where('active',1)); 
                            ?>
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
                    <?php $i=1;?>
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
                    <?php $i=$i+1?>
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
                <a href="tags/list">Xem thêm ...</a>
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
{{-- expr --}}
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.nav-item > a').click(function(){
            var id= $(this).attr('id');
            //alert(id);
            $.get("ajax/changeTabQuestion/"+id, function(data){
                $('.content_each_tab').html(data);
            });
        });
    });
</script>
@endsection