@extends('user.buy.layout')
@section('title','拍下商品')

@section('topbar')
@parent
@endsection
@section('content')
    <div class="panel panel-default address-order">
        <div class="panel-heading">
            选择收货地址
        </div>
        <!--<div class="panel-body">-->
        <ul class="list-group">
            <li class="list-group-item">
                <form role="form">
                    <div class="form-group select-address">
                        <em>*</em>选择地区
                        <select class="form-control select-control" style="margin-left: 22px;" name="province">
                        </select>
                        <select class="form-control select-control" name="city">
                        </select>
                        <select class="form-control select-control" name="area">
                        </select>
                    </div>
                </form>
            </li>
            <li class="list-group-item"><em>*</em>详细地址
                <input type="text" placeholder="建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息"
                       maxlength="20" class="form-control" style="margin-left: 22px;">
            </li>
            <li class="list-group-item"><em>*</em>收货人姓名
                <input type="text" placeholder="长度不超过25个字符" maxlength="25" class="form-control">
            </li>
            <li class="list-group-item"><em>*</em>手机
                <input type="text" placeholder="长度不超过11个字符" maxlength="11" class="form-control" style="margin-left: 46px;">
            </li>
        </ul>
        <button class="btn btn-danger col-md-offset-10 btn-address">确认收货地址</button>
        <!--</div>-->
    </div>
    <div class="panel panel-default address-order">
        <div class="panel-heading">
            选择支付方式
        </div>
        <div class="panel-body">
            <div class="radio">
                <label>
                    <input type="radio" value="" name="pay">支付宝支付
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" value="" name="pay">微信支付
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" value="" name="pay">淘爱心支付
                </label>
            </div>
        </div>
    </div>
    <div class="panel panel-default address-order">
        <div class="panel-heading">
            <h3 class="shopping_tit">送货清单<a href="shopping.html" class="backCar">返回购物车修改</a></h3>
        </div>
        <div class="shopping_item">
            <div class="shopping_cont pb_10">
                <div class="cart_inner">
                    <div class="cart_head clearfix">
                        <div class="cart_item t_name">淘爱心宝贝</div>
                        <div class="cart_item t_return">商品名</div>
                        <div class="cart_item t_price">单价</div>
                        <div class="cart_item t_num">数量</div>
                        <div class="cart_item t_subtotal">小计</div>
                    </div>
                    <div class="cart_cont clearfix">
                        <div class="cart_item t_name">
                            <div class="cart_shopInfo clearfix">
                                <img src="{{$items->url}}" alt="">
                                <div class="cart_shopInfo_cont">
                                    {{--<p class="cart_link"><a href="#">{{$items->name}}</a></p>--}}
                                    <p class="cart_info"><a href="{{url('item',$items->id)}}">{{$items->content}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="cart_item t_return">{{$items->name}}</div>
                        <div class="cart_item t_price">
                            {{$items->price}}
                        </div>
                        <div class="cart_item t_num">1</div>
                        <div class="cart_item t_subtotal t_red">{{$items->price}}</div>
                    </div>
                    {{--<div class="cart_message">--}}
                        {{--若有问题请留言，若有问题请留言--}}
                    {{--</div>--}}
                    {{--<div class="cart_prompt"><i class="cart_prompt_icon"></i>抱歉，以下商品已失效，无法购买。</div>--}}
                    {{--<div class="cart_cont cart_no_bor clearfix">--}}
                        {{--<div class="cart_item t_name">--}}
                            {{--<div class="cart_shopInfo clearfix">--}}
                                {{--<img src="/img/details/taxxq-2.jpg" alt="">--}}
                                {{--<div class="cart_shopInfo_cont">--}}
                                    {{--<p class="cart_link"><a href="#">iPad mini2 Apple/苹果 配备Retina显示屏的iPad mini</a></p>--}}
                                    {{--<p class="cart_info">1450.00［无货］</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default address-order">
        <div class="panel-heading">
            订单结算
        </div>
        <div class="panel-body">
            <div class="shopping_cont padding_shop clearfix">
                <div class="cart_count fr">
                    <div class="cart_rmb">
                        <i>总计：</i><span>￥{{$items->price}}</span>
                    </div>
                    <div class="cart_btnBox">
                        <a href="{{url('pay',$items->id)}}">
                            <input type="button" class="btn btn-danger btn-submit" value="提交订单"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection