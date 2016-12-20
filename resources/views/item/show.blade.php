@extends('layout.tao.index')
@section('title','详情页')

@section('midBar')
    @parent
@show
@section('content')
    <div class="navBoxother">
        <div class="comWidth clearfix">
            <div class="shopClass fl">
                <h3>全部商品分类<i class="shop-icon">&#xe608;</i></h3>
            </div>
            <ul class="nav-product fl">
                <li><a href="{{url('item?type=0')}}" class="active">爱心推荐</a></li>
                <li><a href="{{url('item?type=1')}}">爱心商品</a></li>
                <li><a href="{{url('item?type=3')}}">爱心岗位</a></li>
                <li><a href="{{url('item?type=2')}}">爱心时间</a></li>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>
    @include('item.productshow')
    @include('item.details')
@endsection