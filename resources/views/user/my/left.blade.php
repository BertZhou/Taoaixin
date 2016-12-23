<div class="col-md-2 p-left">
    <div class="mt-avatar">
        <img src="/img/personalData/touxiang.jpg">
    </div>
    <div class="mt-menu-tree">
        <dl class="mt-menu-item mt-account-manage no-decoration">
            <dt>个人账户</dt>
            {{--<dd><a href="#">安全设置</a></dd>--}}
            <dd><a href="{{url('my')}}" data-content="index">个人资料</a></dd>
            {{--<dd><a href="#">隐私设置</a></dd>--}}
            <dd><a href="{{url('my/message')}}" data-content="message">我的消息</a></dd>
            <dd><a href="{{url('my/verification')}}" data-content="verification">我的认证</a></dd>
            <dd><a href="{{url('my/order')}}" data-content="order">个人订单</a></dd>
            {{--<dd><a href="#">个人交易信息</a></dd>--}}
            <dd><a href="{{url('my/address')}}" data-content="address">收货地址</a></dd>
            <dd><a href="#">网站提醒</a></dd>
            <dd><a href="#">应用授权</a></dd>
            <dd><a href="#">分享设定</a></dd>
        </dl>
    </div>
</div>