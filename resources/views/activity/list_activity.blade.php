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
                        <div class="list-activity">
                            <h4 class="topquestion d-inline-block">Thông Báo Của Bạn</h4>
                            <hr>
                            @foreach ($activities as $activity)
                            <a href="{{ $activity->link }}" style="text-decoration: none; color: inherit;">
                                <div class="activity 
                                @if ($activity->is_new)
                                    {{ "activity-new" }}
                                @endif">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div style="display: none" class="id">{{ $activity->id }}</div>
                                            <img src="image/avatar_users/{{ $activity->user->avatar }}" class="rounded-circle" width="80">
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="intro-name">
                                                @if (Auth::id() == $activity->user->id)
                                                Bạn {!! $activity->content !!}
                                                @else
                                                {{ $activity->user->name }} {!! $activity->content !!} của bạn
                                                @endif
                                            </p>
                                            <p class="intro-about">{{ $activity->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr>
                            @endforeach

                            {{ $activities->links('pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Content -->
@endsection

@section('title')
{{ "Thông Báo Của Bạn" }}
@endsection

@section('css')
<style type="text/css">
    .activity {
        padding: 10px;
        border-radius: 5px;
    }
    .activity-new {
        background-color: #E9FDFE;
    }
    .activity:hover {
        background-color: #F2EFEF;
        cursor: pointer;
    }
</style>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('a').on("click", ".activity" ,function() {
            var type = "activity";
            var id = $(this).find("div.id").html();
            $.get("ajax/dismissNew/" + type + "/" + id, function() {

            });
        });
    }); 
</script>
@endsection
