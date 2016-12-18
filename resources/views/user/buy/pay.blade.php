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
    <div class="zhifu_chuangkou1">
        <div class="zhifu_tupian"><a href="#" class="zhifu_tupian1"><img src="/img/details/taxxq-1.jpg" alt="" ></a></div>
        <div class="zhifu_maijia">
                <span>
                    订单详情：<a href="#"><span class="maijia_dingdan">iPad mini2 Apple/苹果 配备Retina显示屏的iPad mini</span></a><br/><br/>
                    卖家昵称：<a href="#"><span class="maijia_dianming">apple旗舰店</span></a>
                </span>
        </div>
        <div class="zhifu_daifu"><a href="#">找人代付</a>&nbsp;&nbsp;<a href="#">联系客服</a></div>
        <div class="zhifu_jiage1"><span >1450.00</span>元</div>
        <div class="zhifu_xiangqing" ><a href="#"><span class="xianshi">查看详情</span></a></div>
        <div class="zhifu_xiangqingye" id="xianshi_" style="display:none">

                    <span >
                        <span class="xiangqing1">货物寄送至：</span><br/> <a href="#"><span class="xiangqing2">浙江省 杭州市 江干区 白杨街道 杭州电子科技大学 <br/>周玲杰 收<br>13750898266<br></span></a>
                        <a href="#" target="_blank"><span class="xiangqing3">设置默认地址</span></a>
                        </span>

            </span>
        </div>
        <div class="trade-info-center">
        </div>
    </div>
    <div class="pay-message">
        <div class="pay-amount">
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><img src="/img/pay/tax-logo.jpg" alt="" style="height: 30px">淘爱心账户
                </label>
                <div class="zhifu_jiage2">支付<span>1450.00</span>元</div>
            </div>
        </div>
        <div class="zhifu_mima">
            <span style="font-size:14px">淘爱心支付密码：</span><br/><br/>
            <input type="password" class="zhifu_mimabox " tabindex="1" id="payPassword_rsainput" placeholder="密码" name="payPassword_rsainput" oncontextmenu="return false" onpaste="return false" oncopy="return false" oncut="return false" autocomplete="off" value="">&nbsp;&nbsp;
            <a href="#" target="_blank"><span class="zhifu_forget">忘记密码？</span></a><br/><br/>
            <a href ="{{url('paysuccess')}}" class="myButton btn-confirm-pay">确认付款</a>
        </div>
    </div>
@endsection