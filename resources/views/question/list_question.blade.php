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
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>2</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summary-title">
                                                    <div class="summary-title">
                                                        <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                    </div>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered-accepted">
                                                    <span>2</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>2</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>2</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered-accepted">
                                                    <span>2</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>2</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered-accepted">
                                                    <span>2</span>
                                                    <div>câu trả lời</div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered-accepted">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="tab-pane fade" id="luotxem" role="tabpanel" aria-labelledby="luotxem-tab">
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="tab-pane fade" id="traloi" role="tabpanel" aria-labelledby="traloi-tab">
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered-accepted">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered-accepted">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="tab-pane fade" id="binhchon" role="tabpanel" aria-labelledby="binhchon-tab">
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question-summary">
                                        <div class="row">
                                            <div class="statistic col-lg-4">
                                                <div class="count-views">
                                                    <span>1</span>
                                                    <div>lượt xem</div>
                                                </div>
                                                <div class="count-answers answered-accepted">
                                                    <span>2</span>
                                                    <div>câu trả lời
                                                    </div>
                                                </div>
                                                <div class="count-votes">
                                                    <span>3</span>
                                                    <div>bình chọn</div>
                                                </div>
                                            </div>
                                            <div class="summary col-lg-8">
                                                <div class="summa-title">
                                                    <h6><a href="">Adding php.exe to my system variables</a></h6>
                                                </div>
                                                <div class="list-tag">
                                                    <p class="tag">C#</p>
                                                    <p class="tag">Android</p>
                                                    <p class="tag">PHP</p>
                                                </div>
                                                <div class="started">
                                                    <p class="user"><a href="">Thanh Tùng</a></p>
                                                    <p class="action">đã hỏi</p>
                                                    <p class="time">1 ngày trước</p>
                                                </div>
                                            </div>
                                        </div>
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
                        <button type="button" class="btn btn-success btn-block btn-lg">Đặt câu hỏi ngay !!!</button>
                    </div>
                    <div class="count-questions">
                        <div class="stats-container">
                            <div class="row">
                                <div class="stats">
                                    <span>111</span>
                                    <div>câu hỏi</div>
                                </div>
                                <div class="stats">
                                    <span>222</span>
                                    <div>câu trả lời</div>
                                </div>
                                <div class="stats">
                                    <span>333</span>
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
                            <div class="item">
                                <div class="d-inline" style="">
                                    #1
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #2
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #3
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #4
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #5
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #6
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #7
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #8
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #9
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>696</strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-inline" style="">
                                    #10
                                </div>
                                <div class="d-inline">
                                    <img src="image/k17.jpg" class="rounded-circle" width="30" height="30">
                                </div>
                                <div class="d-inline">
                                    Thanh Tùng
                                </div>
                                <div class="d-inline float-right">
                                    <strong>6916</strong>
                                </div>
                            </div>
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