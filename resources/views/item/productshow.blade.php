
<div class="comWidth clearfix details-product">
    <div class="description_info fl">
        <div class="description clearfix">
            <p>&nbsp;</p>
            <div class="leftArea">
                <div class="description_imgs pro_detail_left">
                    <!-- <div class="big">
                        <img src="../img/details/taxxq-1.jpg" alt="">
                    </div> -->
                    <div class="jqzoom"><img src="{{$item->url}}" class="fs" alt=""  jqimg="../img/pro_img/blue_one_big.jpg" id="bigImg"/></div>
                    <ul class="des_smimg clearfix">
                        <!-- <li><img src="../img/details/taxxq-2.jpg" class="active" alt=""></li> -->
                        {{--<li><img src="../img/pro_img/blue_one.jpg" alt=""></li>--}}
                        {{--<li><img src="../img/pro_img/blue_two.jpg" alt=""></li>--}}
                        {{--<li><img src="../img/pro_img/blue_three.jpg" alt=""></li>--}}
                        <!-- <li><img src="../img/details/taxxq-2.jpg" alt=""></li> -->
                    </ul>
                </div>
            </div>
            <div class="rightArea">
                <div class="des_content">
                    <h3 class="des_content_tit">{{$item->content}}</h3>
                    <div class="dl clearfix">
                        <div class="dt">淘爱心价</div>
                        <div class="dd clearfix"><span class="hg"><i class="hg_icon">优惠价</i><span class="des_money"><em>￥</em>{{$item->price}}</span></span></div>
                    </div>
                    {{--<div class="dl clearfix">--}}
                        {{--<div class="dt">优惠</div>--}}
                        {{--<div class="dd clearfix"><span class="hg"><i class="hg_icon">满换购</i><em>购ipad加价优惠够配件或USB充电插座</em></span></div>--}}
                    {{--</div>--}}
                    <div class="dl clearfix">
                        <div class="dt">交易成功</div>
                        <div class="dd clearfix"><span class="hg"><i class="hg_icon">笔数</i><em>{{$item->sold}}</em></span></div>
                        <div class="dt">卖家</div>
                        <div class="dd clearfix"><span class="hg"><i class="hg_icon">昵称</i><a href=""><em>{{$seller->name}}</em></a></span></div>
                    </div>
                    <div class="des_position">
                        {{--<div class="dl clearfix">--}}
                            {{--<div class="dt">送到</div>--}}
                            {{--<div class="dd clearfix">--}}
                                {{--<div class="select">--}}
                                    {{--<h3>杭州电子科技大学</h3><span></span>--}}
                                    {{--<ul class="show_select">--}}
                                        {{--<li>上帝</li>--}}
                                        {{--<li>五道口</li>--}}
                                        {{--<li>上帝</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<span class="theGoods">有货，可当日出货</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="dl">
                            <div class="dt des_num">数量</div>
                            <div class="dd clearfix">
                                <div class="des_number">
                                    <div class="reduction">-</div>
                                    <div class="des_input">
                                        <input type="text" value="1" name="amount">
                                    </div>
                                    <div class="plus">+</div>
                                </div>
                                {{--<span class="xg">限购<em>9</em>件</span>--}}
                            </div>
                        </div>
                    </div>
                    <div class="shop_buy">
                        <a href="" class="btn btn-danger">加入购物车</a>
                        <span class="line"></span>
                        <a href="{{url('buy',$item->id)}}" class="btn btn-warning btn-buy">立即购买</a>
                    </div>
                    <div class="notes">
                        <span class="icon-fav detail-icon">&#xe610;
                        <a href="{{url('my/favorite')}}">添加到收藏夹</a></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{--<script type="text/javascript" src="/js/jquery-1.11.3.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.livequery.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.jqzoom.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.thickbox.js"></script>--}}
{{--<script type="text/javascript" src="/js/details.js"></script>--}}