@extends('user.my.layout')
@section('title','我的消息')
@section('content')
    @include('user.my.left')
    <input type="hidden" id="selectedMenu" value="verification">
@endsection