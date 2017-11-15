<div id="load" style="position: relative;">
    <div id="img_loading">
        
    </div>
    <div class="content_each_tab">
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
                    <p class="tag">{{ $tag->name }}</p>
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
</div>
{{ $list_paginate->links('pagination.custom') }}