@extends('user.my.layout')
@section('title','个人订单')
@section('content')
    @include('user.my.left')
    <div class="col-md-10 p-right">
        <div class="row nav-top">
            <div class="col-md-2"><a href="" class="active">所有订单{{count($items)}}</a></div>
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
            <div class="col-md-2">交易状态</div>
        </div>
        <input type="hidden" id="selectedMenu" value="order">
        @if(count($items) == 0)
            <div class="text-center" style="margin:20px;">
                <img src="/img/icon/icon_empty_content.png" alt="">
            </div>
            @else
                @foreach ($items as $item)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{$item['created']}}
                    </div>
                    <div class="panel-body row nav-content">
                        <div class="col-md-4">
                            <img src="{{$item['url']}}" alt="taoaixin">
                                <a class="content" href="{{url('item',$item['id'])}}">{{$item['content']}}</a>
                        </div>
                        <div class="col-md-2">￥{{$item['price']}}</div>
                        <div class="col-md-2">{{$item['number']}}</div>
                        <div class="col-md-2">￥{{$item['sum']}}</div>
                        <div class="col-md-2">
                            @if($item['type'] == 'payed')
                                <a href="{{url('trade',$item['id'])}}">确认收货</a>
                                @elseif($item['type'] == 'pending')
                                <p>等待买家付款</p>
                                <a href="{{url('/my/order',$item['order_id'])}}">订单详情</a>
                                @elseif($item['type'] == 'confirmed')
                                <p>订单关闭</p>
                                @else
                                <p>订单已取消</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
        @endif
        {{--<div class="text-center">--}}
            {{--<ul class="pagination ">--}}
                {{--<li><a href="#">&laquo;</a></li>--}}
                {{--<li><a href="#">1</a></li>--}}
                {{--<li><a href="#">2</a></li>--}}
                {{--<li><a href="#">3</a></li>--}}
                {{--<li><a href="#">4</a></li>--}}
                {{--<li><a href="#">5</a></li>--}}
                {{--<li><a href="#">&raquo;</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>
@endsection