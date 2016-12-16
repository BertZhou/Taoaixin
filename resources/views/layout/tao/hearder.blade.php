
 @if(Session::get('name'))
 <div class="topBar">
    <div class="comWidth">
        <div class="leftArea">
            <!-- <a href="#" class="collection">收藏淘爱心</a> -->
            <div class="account fl" id="account">
                <a href="#"><span>{{Session::get("name")}}</span></a>
                <div class="mune" class="account_mune" id="account_mune">
                    <div class="shangmian">
                        <div class="leftArea">
                            <a href="details.html"><img src="img/logo/taxyh-3.jpg" alt=""></a>
                        </div>
                        <div class="account_mang rightArea">
                            <div class="fr qingfu"><a class="manage">账号管理</a><a class="exit" href="{{url('login_out')}}">退出</a></div>
                            <div class="fl qingfu"><a href="#"><img src="img/icon/huiyuan4.jpg"></a></div>
                            <div class="fl qingfu"> <a href="#">我可尊享15项特权</a></div>
                        </div>
                    </div>
                    <div class="h_1 qingfu"></div>
                    <div class="xiamian qingfu">
                        <a href="#"><div class="tqtime">我当前享受2天节日特权</div></a>
                    </div>
                </div>
            </div>
            <div class="phone fl"><a href="https://www.pgyer.com/taoaixin" id="phone">手机淘爱心</a></div>
        </div>
        <div class="rightArea">
            <span class="fl">欢迎来到淘爱心！</span>

            <div class="wdtax fl" id="wdtax">
                <a href="account.html">我的淘爱心</a>
                <ul class="mune" id="wdtax_mune">
                    <li><a href="accounnt.html">已淘到的爱心</a></li>
                    <li><a href="#">我的足迹</a></li>
                    <li><a href="#">爱公益</a></li>
                    <li><a href="#">新欢</a></li>
                </ul>
            </div>
            <div class="fl"><a href="#">我的消息</a></div>
            <div class="favorites fl" id="favorites">
                <a href="favorite.html">收藏夹</a>
                <ul class="mune" id="favorites_mune">
                    <li><a href="#">收藏的宝贝</a></li>
                    <li><a href="#">收藏的店铺</a></li>
                </ul>
            </div>
            <div class="seller fl" id="seller">
                <a href="sellerCenter.html">卖家中心</a>
                <ul class="mune" id="seller_mune">
                    <li><a href="sellerCenter.html">免费开店</a></li>
                    <li><a href="#">已卖出的宝贝</a></li>
                    <li><a href="#">出售中宝贝</a></li>
                    <li><a href="#">卖家资质</a></li>
                </ul>
            </div>
            <div class="service fl" id="service">
                <a href="#">联系客服</a>
                <ul class="mune" id="service_mune">
                    <li><a href="#">收藏的宝贝</a></li>
                    <li><a href="#">收藏的店铺</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    @else
    <div class="topBar">
        <div class="comWidth clearfix">
            <div class="leftArea">
                <a href="#" class="collection">收藏淘爱心</a>
                <a href="https://www.pgyer.com/taoaixin" id="phone">手机淘爱心</a>
            </div>

            <div class="rightArea">
                欢迎来到淘爱心！<a href="{{url('signin')}}">[登录]</a><a href="{{url('register')}}">[免费注册]</a>
            </div>
        </div>
    </div>
@endif