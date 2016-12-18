@extends('user.my.layout')
@section('title','个人订单')
@section('content')
    @include('user.my.left')
    <div class="col-md-10 p-right">
        <div class="row nav-top">
            <div class="col-md-2"><a href="" class="active">所有订单{{count($orders)}}</a></div>
            <div class="col-md-2"><a href="">代付款</a></div>
            <div class="col-md-2"><a href="">代发货</a></div>
            <div class="col-md-2"><a href="">待收货</a></div>
            <div class="col-md-2"><a href="">待评价</a></div>
        </div>
        <div class="row nav-item">
            <div class="col-md-4">爱心宝贝</div>
            <div class="col-md-2">单价</div>
            <div class="col-md-2">数量</div>
            <div class="col-md-2">实付款</div>
            <div class="col-md-2">评价</div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                2016-12-5
            </div>
            <div class="panel-body row">
                <div class="col-md-4">22</div>
                <div class="col-md-2">33</div>
                <div class="col-md-2">44</div>
                <div class="col-md-2">55</div>
                <div class="col-md-2">66</div>
            </div>
        </div>
    </div>
@endsection