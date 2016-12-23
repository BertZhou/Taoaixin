@extends('user.my.layout')
@section('title','我的消息')
@section('content')
    @include('user.my.left')
    <input type="hidden" id="selectedMenu" value="message">
    <div class="message">
    <div class="col-md-10 message-right">
        <div class="">
            <a href="#" style="font-size:30px">服务信息</a>
            <a href="#" style="font-size:15px">共{{$count}}条</a>
        </div>
        @if($count == 0)
            <div class="text-center" style="margin:20px;">
                <img src="/img/icon/icon_empty_content.png" alt="">
            </div>
            @else
            @foreach($items as $item)
                @if($item['type']  != 'pending')
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">爱心物流：您购买的宝贝有新的动态</h3>
                        </div>
                        <div class="panel-body row">
                            <div class="col-md-3">
                                <img src="{{$item['url']}}"  class="message-img" alt="">
                                <p><span class="time">半个月前</span>来自 <span class="t-delivery">淘爱心物流</span></p>
                            </div>
                            <ul class="list-group col-md-9">
                                <li class="list-group-item">订单号: <span>20161220121212</span></li>
                                <li class="list-group-item">快递状态有更新</li>
                                <li class="list-group-item"><a href="{{url('/my/order',$item['order_id'])}}">去看看</a></li>
                            </ul>
                        </div>
                    </div>
                    @endif
            @endforeach
        @endif

        {{--<div class="panel panel-warning">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">爱心物流：您购买的宝贝有新的动态</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body row">--}}
                {{--<div class="col-md-3">--}}
                    {{--<img src="/img/favourite/danpin/danpin2.jpg"  class="message-img" alt="">--}}
                    {{--<p><span class="time">半个月前</span>来自 <span class="t-delivery">淘爱心物流</span></p>--}}
                {{--</div>--}}
                {{--<ul class="list-group col-md-9">--}}
                    {{--<li class="list-group-item">订单号: <span>qq191995762</span></li>--}}
                    {{--<li class="list-group-item">快递已到达</li>--}}
                    {{--<li class="list-group-item"><a href="">去看看</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="panel panel-warning">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">爱心物流：您购买的宝贝有新的动态</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body row">--}}
                {{--<div class="col-md-3">--}}
                    {{--<img src="/img/favourite/list/qidao.jpg"  class="message-img" alt="">--}}
                    {{--<p><span class="time">半个月前</span>来自 <span class="t-delivery">淘爱心物流</span></p>--}}
                {{--</div>--}}
                {{--<ul class="list-group col-md-9">--}}
                    {{--<li class="list-group-item">订单号: <span>qq191995762</span></li>--}}
                    {{--<li class="list-group-item">快递已到达</li>--}}
                    {{--<li class="list-group-item"><a href="">去看看</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="panel panel-warning">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">爱心物流：您购买的宝贝有新的动态</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body row">--}}
                {{--<div class="col-md-3">--}}
                    {{--<img src="/img/favourite/list/qidao.jpg"  class="message-img" alt="">--}}
                    {{--<p><span class="time">半个月前</span>来自 <span class="t-delivery">淘爱心物流</span></p>--}}
                {{--</div>--}}
                {{--<ul class="list-group col-md-9">--}}
                    {{--<li class="list-group-item">订单号: <span>qq191995762</span></li>--}}
                    {{--<li class="list-group-item">快递已到达</li>--}}
                    {{--<li class="list-group-item"><a href="">去看看</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="panel panel-warning">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">爱心物流：您购买的宝贝有新的动态</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body row">--}}
                {{--<div class="col-md-3">--}}
                    {{--<img src="/img/details/taxxq-1.jpg"  class="message-img" alt="">--}}
                    {{--<p><span class="time">半个月前</span>来自 <span class="t-delivery">淘爱心物流</span></p>--}}
                {{--</div>--}}
                {{--<ul class="list-group col-md-9">--}}
                    {{--<li class="list-group-item">订单号: <span>qq191995762</span></li>--}}
                    {{--<li class="list-group-item">快递已到达</li>--}}
                    {{--<li class="list-group-item"><a href="">去看看</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    </div>
@endsection