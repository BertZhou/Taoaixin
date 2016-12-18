@extends('user.buy.layout')
@section('title','下单')


@section('topbar')
    <div class="content">
        <ol class="tb-rate-nav-steps">
            <li class=" done">
                <span class="first">1.拍下商品</span>
            </li>
            <li class=" done">
                <span>2.付款到淘爱心</span>
            </li>
            <li class=" done current-prev">
                <span>3.确认收货</span>
            </li>
            <li class=" last-current	">
                <strong>4.评价</strong>
            </li>
        </ol>
@endsection
@section('content')
            <div class="shopdetail tb-rate-mb-m">
                <div class="hd">
                    <p>店铺优惠</p>
                </div>
                <div class="bd">
                    <a class="shop-logo"><img width="70" height="70" src="/img/evaluation/taxpj-1.png"></a>
                    <dl>
                        <dt>
                        <p>
                            <a href="#"> 淘爱心二手书专营店</a>
                        </p>
                        </dt>
                        <dd>
                            被评卖家：<a class="remark-to" href="#">淘爱心二手书专营店</a>
                        </dd>
                        <dd>
                            宝贝与描述相符：
                            <span class="c-value-no c-value-4d9">
               	<em></em>
               </span>
                            4.9
                        </dd>

                    </dl>
                </div>
            </div>
            <div class="itemlist tb-rate-mb-m" style="border: 1px solid #DDD;">
                <div class="listhd">
                    <h3>店铺动态评分</h3>
                    <ul class="act">
                        <li>
                            <input type="checkbox" id="annoy-all" name="annoy-all">
                            <label for="annoy-all">全部匿名评论</label>
                        </li>
                    </ul>
                </div>
                <div class="listbd">
                    <ul class="labels">
                        <li class="itemdetail">宝贝</li>
                        <li class="level">
                            宝贝与描述相符<span class="exp">(打分匿名)</span>
                        </li>
                    </ul>
                    <ul class="rate-list">
                        <li class="rate-box st-show-msg-box">
                            <div class="item-rate-info">
                                <div class="item-detail">
                                    <a class="item-d-img" href="#"><img  width="60" height="60" src="/img/evaluation/taxpj-2.jpg"></a>
                                    <h3>
                                        <a href="#">
                                            最好看的书，值得一看，让你从容面对人生，人生向导
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div class="quiz">
                                <h3>我要评论</h3>
                                <div class="quiz_content">
                                    <form action="" id="" method="post">
                                        <div class="goods-comm">
                                            <div class="goods-comm-stars">
                                                <span class="star_l">满意度：</span>
                                                <div id="rate-comm-1" class="rate-comm"></div>
                                            </div>
                                        </div>
                                        <div class="l_text">
                                            <label class="m_flo">内  容：</label>
                                            <textarea name="" id="" class="text"></textarea>
                                            <span class="tr">字数限制为5-200个</span>
                                        </div>
                                        <button class="btm" type="submit"></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--<div class="rating-box">
                        <div class="hd labels">
                             <h3>店铺动态评分</h3>
                         </div>
                       <div class=" bd">
                           <ul class="pingfenxize">
                                 <li>
                                      <div class="goods-comm">
                                             <div class="goods-comm-stars">
                                                 <span class="star_l">满意度：</span>
                                                 <div id="rate-comm-2" class="rate-comm"></div>
                                             </div>
                                         </div>
                              </li>
                              <li>2</li>
                             </ul>
                       </div>
                    </div>-->
                    <div class="submitbox">
                    </div>
                </div>
            </div>
            <div class="des_infoContent">
                <h3 class="shopDes_tit"> 其他顾客评价</h3>
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
                        <p>共18939位网友参与评分</p>
                    </div>
                </div>
                <div class="review_tab">
                    <ul class="review fl">
                        <li><a href="#" class="active">全部</a></li>
                        <li><a href="#">满意（3121）</a></li>
                        <li><a href="#">一般（321）</a></li>
                        <li><a href="#">不满意（1121）</a></li>
                    </ul>
                    <div class="review_sort fr">
                        <a href="#" class="review_time">时间排序</a><a href="#" class="review_reco">推荐排序</a>
                    </div>
                </div>
                <div class="review_listBox">
                    <div class="review_list clearfix">
                        <div class="review_userHead fl">
                            <div class="review_user">
                                <img src="/img/logo/taxyh-1.jpg" alt="">
                                <p>61***42</p>
                                <p>金色会员</p>
                            </div>
                        </div>
                        <div class="review_cont">
                            <div class="review_t clearfix">
                                <div class="starsBox fl"><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span></div>
                                <span class="stars_text fl">5分 满意</span>
                            </div>
                            <p>东西很好，好评</p>
                            <p><a href="#" class="ding">顶(0)</a><a href="#" class="cai">踩(0)</a></p>
                        </div>
                    </div>
                    <div class="review_list clearfix">
                        <div class="review_userHead fl">
                            <div class="review_user">
                                <img src="/img/logo/taxyh-2.jpg" alt="">
                                <p>61***42</p>
                                <p>金色会员</p>
                            </div>
                        </div>
                        <div class="review_cont">
                            <div class="review_t clearfix">
                                <div class="starsBox fl"><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span></div>
                                <span class="stars_text fl">5分 满意</span>
                            </div>
                            <p>东西很好，好评</p>
                            <p><a href="#" class="ding">顶(0)</a><a href="#" class="cai">踩(0)</a></p>
                        </div>
                    </div>
                    <div class="hr_25"></div>
                </div>
            </div>
    </div>
@endsection
