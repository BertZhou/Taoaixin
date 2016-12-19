<div class="comWidth details">
    <div class="col-md-12">
    <div class="">
        <ul class="des_tit">
            <li class="active" data-content="0"><span>产品介绍</span></li>
            <li data-content="1"><span>产品评价（{{count($rates)}}）</span></li>
            <li data-content="2"><span>月成交记录{{$item->sold}}</span></li>
        </ul>
        <div class="des_infoContent" data-content="0">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">商品名称：
                            <span>{{$item->name}}</span>
                        </li>
                        <li class="list-group-item">爱心商品图片：
                            <img src="{{$item->url}}" alt="">
                        </li>
                        <li class="list-group-item">商品介绍：
                            <span>{{$item->content}}</span>
                        </li>
                        <li class="list-group-item">售价：
                            <span>￥{{$item->price}}</span>
                        </li>
                        <li class="list-group-item">销售量：
                            <span>{{$item->sold}}</span>
                        </li>
                        <li class="list-group-item">卖家信息：
                            <span>{{$seller->name}}</span>
                        </li>
                        <li class="list-group-item">商品折扣：
                            <span>{{isset($item->discount)?$item->discount:'无'}}</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="hr_15"></div>
        <div class="des_infoContent" data-content="1">
            <h3 class="shopDes_tit">商品评价</h3>
            <div class="score_box clearfix">
                <div class="score">
                    <span>4.7</span><em>分</em>
                </div>
                <div class="score_speed">
                    <ul class="score_speed_text">
                        <li class="speed_01">非常不满意</li>
                        <li class="speed_02">不满意</li>
                        <li class="speed_03">一般</li>
                        <li class="speed_04">满意</li>
                        <li>非常满意</li>
                    </ul>
                    <div class="score_num">
                        4.7<i></i>
                    </div>
                    <p>共{{count($rates)}}位网友参与评分</p>
                </div>
            </div>
            <div class="review_tab">
                <ul class="review fl">
                    <li><a href="#" class="active">全部</a></li>
                    {{--<li><a href="#">满意（3121）</a></li>--}}
                    {{--<li><a href="#">一般（321）</a></li>--}}
                    {{--<li><a href="#">不满意（1121）</a></li>--}}
                </ul>
                <div class="review_sort fr">
                    <a href="#" class="review_time">时间排序</a><a href="#" class="review_reco">推荐排序</a>
                </div>
            </div>
            <div class="review_listBox">
                @foreach($rates as $rate)
                <div class="review_list clearfix">
                    <div class="review_userHead fl">
                        <div class="review_user">
                            <img src="/img/logo/taxyh-2.jpg" alt="">
                            <p>{{$rate['name']}}</p>
                            <p>爱心会员</p>
                        </div>
                    </div>
                    <div class="review_cont">
                        <div class="review_t clearfix">
                            <div class="starsBox fl"><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span></div>
                            <span class="stars_text fl">{{$rate['stars']}}分 满意</span>
                        </div>
                        <p>{{$rate['content']}}</p>
                        <p><a href="#" class="ding">顶(0)</a><a href="#" class="cai">踩(0)</a></p>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
</div>
</div>
