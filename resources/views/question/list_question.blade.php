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
                                    <a class="nav-link active" id="moinhat-tab" data-toggle="tab" href="#moinhat" role="tab" aria-controls="moinhat" aria-expanded="true">Mới Nhất</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="luotxem-tab" data-toggle="tab" href="#luotxem" role="tab" aria-controls="luotxem">Lượt Xem</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="traloi-tab" data-toggle="tab" href="#traloi" role="tab" aria-controls="traloi">Trả Lời</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="binhchon-tab" data-toggle="tab" href="#binhchon" role="tab" aria-controls="binhchon">Bình Chọn</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="QuestionsTabContent">
                                <div class="tab-pane fade show active" id="moinhat" role="tabpanel" aria-labelledby="moinhat-tab">
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
                                                        <h6><a href="">{{ $lt->title }}</a></h6>
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
                                                        ?>
                                                        @if($interval->y!=0) 
                                                        <?php $time= $interval->y . " năm trước"; ?>
                                                        @elseif ($interval->m!=0)
                                                        <?php $time= $interval->m . " tháng trước"; ?>
                                                        @elseif ($interval->d!=0)
                                                        <?php $time= $interval->d . " ngày trước"; ?>
                                                        @elseif($interval->h!=0)
                                                        <?php $time= $interval->h . " giờ trước"; ?>
                                                        @elseif($interval->i!=0)
                                                        <?php $time= $interval->i . " phút trước"; ?>
                                                        @else
                                                        <?php $time=" just now"; ?>
                                                        @endif
                                                        <p class="user"><a href="{{ url('question/user') }}/{{ $lt->user_id }}">{{ $lt->user->name }}</a></p>
                                                        <p class="action">đã hỏi</p>
                                                        <p class="time">{{ $time }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
                                <div class="tab-pane fade" id="luotxem" role="tabpanel" aria-labelledby="luotxem-tab">
                                    <?php
                                    $ListView = $list->sortByDesc('view');
                                    ?>
                                    @foreach($ListView as $lstView)
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>{{ $lstView->view }}</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>{{ count($lstView->answers->where('active',1)) }}</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>{{ $lstView->point_rating }}</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">{{ $lstView->title }}</a></h6>
                                                </div>
                                                <div class="row">
                                                    <div class="list-tag col-lg-8">
                                                        @foreach($lstView->tags as $tag_view)
                                                        <p class="tag">{{ $tag_view->name }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="started col-lg-4">
                                                     <?php
                                                     $date1 = $lstView->created_at;
                                                     $date2 = Carbon\Carbon::now();
                                                     $interval = $date1->diff($date2);
                                                     ?>
                                                     @if($interval->y!=0) 
                                                     <?php $time= $interval->y . " năm trước"; ?>
                                                     @elseif ($interval->m!=0)
                                                     <?php $time= $interval->m . " tháng trước"; ?>
                                                     @elseif ($interval->d!=0)
                                                     <?php $time= $interval->d . " ngày trước"; ?>
                                                     @elseif($interval->h!=0)
                                                     <?php $time= $interval->h . " giờ trước"; ?>
                                                     @elseif($interval->i!=0)
                                                     <?php $time= $interval->i . " phút trước"; ?>
                                                     @else
                                                     <?php $time=" just now"; ?>
                                                     @endif
                                                     <p class="user"><a href="{{ url('question/user') }}/{{ $lstView->user_id }}">{{ $lstView->user->name }}</a></p>
                                                     <p class="action">đã hỏi</p>
                                                     <p class="time">{{ $time }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
                                <div class="tab-pane fade" id="traloi" role="tabpanel" aria-labelledby="traloi-tab">
                                 @foreach($SortByAnswer as $SortByAnswer)
                                     <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>{{ $SortByAnswer->view }}</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>{{ $SortByAnswer->answers->where('active',1)->count() }}</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>{{ $SortByAnswer->point_rating }}</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">{{ $SortByAnswer->title }}</a></h6>
                                                </div>
                                                <div class="row">
                                                    <div class="list-tag col-lg-8">
                                                        @foreach($SortByAnswer->tags as $tag_SortByAnswer)
                                                        <p class="tag">{{ $tag_SortByAnswer->name }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="started col-lg-4">
                                                        <?php
                                                        $date1 = $SortByAnswer->created_at;
                                                        $date2 = Carbon\Carbon::now();
                                                        $interval = $date1->diff($date2);
                                                        ?>
                                                        @if($interval->y!=0) 
                                                        <?php $time= $interval->y . " năm trước"; ?>
                                                        @elseif ($interval->m!=0)
                                                        <?php $time= $interval->m . " tháng trước"; ?>
                                                        @elseif ($interval->d!=0)
                                                        <?php $time= $interval->d . " ngày trước"; ?>
                                                        @elseif($interval->h!=0)
                                                        <?php $time= $interval->h . " giờ trước"; ?>
                                                        @elseif($interval->i!=0)
                                                        <?php $time= $interval->i . " phút trước"; ?>
                                                        @else
                                                        <?php $time=" just now"; ?>
                                                        @endif
                                                        <p class="user"><a href="{{ url('question/user') }}/{{ $SortByAnswer->user_id }}">{{ $SortByAnswer->user->name }}</a></p>
                                                        <p class="action">đã hỏi</p>
                                                        <p class="time">{{ $time }}</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

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
                                <div class="tab-pane fade" id="binhchon" role="tabpanel" aria-labelledby="binhchon-tab">
                                     <?php
                                     $ListRating = $list->sortByDesc('point_rating');
                                     ?>
                                     @foreach($ListRating as $rating)
                                     <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>{{ $rating->view }}</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>{{ count($rating->answers->where('active',1)) }}</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>{{ $rating->point_rating }}</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">{{ $rating->title }}</a></h6>
                                                </div>
                                                <div class="row">
                                                    <div class="list-tag col-lg-8">
                                                        @foreach($rating->tags as $tag_rating)
                                                        <p class="tag">{{ $tag_rating->name }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="started col-lg-4">
                                                        <?php
                                                        $date1 = $rating->created_at;
                                                        $date2 = Carbon\Carbon::now();
                                                        $interval = $date1->diff($date2);
                                                        ?>
                                                        @if($interval->y!=0) 
                                                        <?php $time= $interval->y . " năm trước"; ?>
                                                        @elseif ($interval->m!=0)
                                                        <?php $time= $interval->m . " tháng trước"; ?>
                                                        @elseif ($interval->d!=0)
                                                        <?php $time= $interval->d . " ngày trước"; ?>
                                                        @elseif($interval->h!=0)
                                                        <?php $time= $interval->h . " giờ trước"; ?>
                                                        @elseif($interval->i!=0)
                                                        <?php $time= $interval->i . " phút trước"; ?>
                                                        @else
                                                        <?php $time=" just now"; ?>
                                                        @endif
                                                        <p class="user"><a href="{{ url('question/user') }}/{{ $rating->user_id }}">{{ $rating->user->name }}</a></p>
                                                        <p class="action">đã hỏi</p>
                                                        <p class="time">{{ $time }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     @endforeach
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
                        <button type="button" class="btn btn-success btn-block btn-lg">Đặt câu hỏi ngay !!!</button>
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
                            <?php 
                            $top_user= $user_rank->sortByDesc('point_reputation')->take(10);
                            $i=1;
                            ?>
                            @foreach($top_user as $top_user)
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
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    C# <span class="badge badge-pill badge-primary">x696</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    C++ <span class="badge badge-pill badge-primary">x696</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    Android <span class="badge badge-pill badge-primary">x555</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    PHP <span class="badge badge-pill badge-primary">3</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    PHP <span class="badge badge-pill badge-primary">3</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    PHP <span class="badge badge-pill badge-primary">3</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    PHP <span class="badge badge-pill badge-primary">3</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    PHP <span class="badge badge-pill badge-primary">3</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    PHP <span class="badge badge-pill badge-primary">3</span>
                                </button>
                            </div>
                            <div class="tag-item">
                                <button class="btn btn-tag">
                                    PHP <span class="badge badge-pill badge-primary">3</span>
                                </button>
                            </div>
                        </div>
                        <a href="">Xem thêm ...</a>
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
{{-- expr --}}
@endsection