@extends('user.buy.layout')
@section('title','下单')

@section('topbar')
    <ol class="tb-rate-nav-steps">
        <li class="done current-prev">
            <span class="first">1.拍下商品</span>
        </li>
        <li class="zhifufukuan">
            <span>2.付款到淘爱心</span>
        </li>
        <li>
            <span>3.确认收货</span>
        </li>
        <li class="fklast-current ">
            <strong>4.评价</strong>
        </li>
    </ol>
@endsection
@section('content')
    <div class="section trade-success">
        <div class="trade-info">
            <p class="status">
                您已成功付款
                <em class="highlight">
                    {{$sum}}
                </em>元
            </p>
            <div class="delivery">
                <em>货物寄送至：</em>
                <span class="address">
                    	{{--{{$info->province}} {{$info->city}} {{$info->area}} {{$info->address}} {{$info->name}}收--}}
                        <span class="phone">
                            {{--{{$info->mobile}}--}}
                        </span>
                        <span class="sign">
                            {{$address}}
                        </span>
                     </span>
            </div>
            <div class="trade-info-center">
            </div>
            <div class="operate">
                <p>
                    <a class="view-more" href="{{url('my/order')}}">已买到宝贝列表</a>
                    <a class="view-more" href="{{url('my/order',$order->id)}}">订单详情</a>
                    <span>
                    	联系卖家：
                        <a>{{$seller->name}}</a>
                    </span>
                </p>
            </div>
            <div class="remind">
                <p>
                    <a>点击领取爱心大使积分</a>
                    :淘爱心赠送50个
                </p>
                <p>
                    宝贝享受
                </p>
                <a>
                    <img  src="/img/pay-sucesss/taxps-1.png">
                </a>
                售后保障
            </div>
            <div class="other">
            </div>
            <div class="security-note">
                <div class="tms-securityTips">
                    <i>重要</i>
                    <strong>安全提醒：</strong>
                    下单后，
                    <span style="color:#c30000;font-weight:bold;">用QQ给您发送链接办理退款的都是骗子</span>！
                    <br>淘爱心不存在
                    <span style="color:#c30000;font-weight:bold;">系统升级，订单异常</span>
                    等问题，谨防假冒客服电话诈骗！
                    <a href="#" target="_blank">安心购物，安全无忧。&gt;&gt;</a>
                </div>
            </div>

        </div>
    </div>
    <div class="fav-bottom clearfix" style="width: 1000px;">
        <div class="fav-var3-top fl">
            <div class="var3-top">
                <ul>
                    <li><a href="#" class="var2-left fl">猜你喜欢</a></li>
                    <li><a href="#" class="var2-left fl">淘爱心发现</a></li>
                    <!-- <li><span><hr/></span></li> -->
                    <li><a href="#" class="var2-left fr">根据你最近的浏览发现</a></li>
                </ul>
            </div>
            <!--<div class="fav-item3 fl">
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin1.jpg" alt="taoaixin">
                    </a>
                </div>
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin2.jpg" alt="taoaixin">
                    </a>
                </div>
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin3.jpg" alt="taoaixin">
                    </a>
                </div>
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin1.jpg" alt="taoaixin">
                    </a>
                </div>
            </div>
            <div class="fav-item3 fl">
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin1.jpg" alt="taoaixin">
                    </a>
                </div>
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin2.jpg" alt="taoaixin">
                    </a>
                </div>
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin3.jpg" alt="taoaixin">
                    </a>
                </div>
                <div class="fav-list3">
                    <a href="#"><img src="/img/favourite/danpin/danpin1.jpg" alt="taoaixin">
                    </a>
                </div>
            </div>-->

            <!--猜你喜欢部分-->
        <div class="paySuccess_item clearfix  ">
            <div class="paySuccess_list2">
                <a href="{{'/item/5'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/gao.jpg" alt="taoaixin">
                </a>
                <div class="pro-message">
                    <div class=""><span class="pro-price"><strong>￥10.00</strong></span></div>
                    <span><a href="">高数</a></span>
                    <div class="pro-detail">
                        <p>同济版高等数学二手9成新</p>
                    </div>
                </div>
            </div>
            <div class="paySuccess_list2">
                <a href="{{'/item/16'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/app.jpg" alt="taoaixin">
                </a>
                <div class="pro-message">
                    <div class=""><span class="pro-price"><strong>￥10/小时</strong></span></div>
                    <span><a href="">app推广</a></span>
                    <div class="pro-detail">
                        <p>网易严选APP推广员 日结 </p>
                    </div>
                </div>
            </div>
            <div class="paySuccess_list2">
                <a href="{{'/item/3'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/dongzao.jpg" alt="taoaixin">
                </a>
                <div class="pro-message">
                    <div class=""><span class="pro-price"><strong>￥45.00</strong></span></div>
                    <span><a href="">冬枣</a></span>
                    <div class="pro-detail">
                        <p>红枣夹核桃仁包邮特级新疆大枣包核桃葡萄干人气独立包装特产500g </p>
                    </div>
                </div>
            </div>
            <div class="paySuccess_list2">
                <a href="{{'/item/19'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/doc.jpg" alt="taoaixin">
                </a>
                <div class="pro-message">
                    <div class=""><span class="pro-price"><strong>￥30.00/小时</strong></span></div>
                    <span><a href="">文案编辑</a></span>
                    <div class="pro-detail">
                        <p>弗雷德艾肯金座1022室急招文案编辑 </p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    <div class="xiafangzhanshi">
        <img  class="tipian" src="/img/pay-sucesss/taxps-2.jpg">
    </div>
@endsection