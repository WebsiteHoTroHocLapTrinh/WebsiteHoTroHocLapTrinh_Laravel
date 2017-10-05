@extends('question.layout.layout-list-question')

@section('form-signin')
	@include('master.form-signin')
@endsection

@section('rank-tag')
	@include('rank-tag.rank-tag')
@endsection

@section('login-signin')
    @include('master.btnlogin')
@endsection

