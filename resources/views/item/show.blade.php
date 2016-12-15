@extends('layout.tao.index')
@section('title','详情页')

@section('midBar')
    @parent
@show
@section('content')
    <div class="navBoxother">
        <div class="comWidth clearfix">
            <div class="shopClass fl">
                <h3>全部商品分类<i class="shopClass_icon"></i></h3>
            </div>
            <ul class="nav fl">
                <li><a href="products.html" class="active">爱心推荐</a></li>
                <li><a href="products.html">爱心商品</a></li>
                <li><a href="products.html">爱心岗位</a></li>
                <li><a href="products.html">爱心时间</a></li>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>
@endsection