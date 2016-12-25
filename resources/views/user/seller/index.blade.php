@extends('user.seller.layout')
@section('title','卖家中心')
@section('content')
    <div class="sell-main comWidth">
        <div class="col-main">
            <div class="main-wrap">
                <div class="seller-info clearfix">
                    <div class="shop-avatar">
                        <div class="avatar-box">
                            <s class="vl"></s>
                            <img src="/img/seller center/sell-2.gif" alt="店铺图片">
                        </div>
                        <div class="avatar-operation">

                        </div>
                    </div>
                    <div class="shop-information">
                        <div class="hd">
                            <h1 title="良心珠宝特卖">良心珠宝特卖</h1>
                            <ul class="icons">
                                <li>
                                	<span class="rank-words">
                                    	累计信用评价
                                        <a href="#">0</a>
                                        <span class="seller-icon">&#xe621</span>

                                    </span>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="bd">
                            <div class="basic-info clearfix">
                                <a class="shop-setup">店铺设置</a>
                                <span class="view-shop no-offcial-shop">
                                    <a href="#">查看淘爱心店铺</a>
                                </span>
                            </div>
                            <div class="payment clearfix">
                                我的支付宝：<a href="#">xrg1227@163.com</a>
                            </div>
                            <div class="warranty">
                                保证金金额：
                                <span class="count">0元</span>
                                <a href="#">缴纳现金/加入保证金计划</a>
                                <a href="#">解冻/退保</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-ratings">
                        <ul class="shop-ratings-slide">
                            <li>
                                <h2>店铺动态评分</h2>
                                <ol class="dynamic-ratings clearfix">
                                    <li class="equal">
                                        <div class="sell-title">描述相符：</div>
                                        <div class=" value">暂无评分</div>
                                    </li>
                                    <li class="equal">
                                        <div class="sell-title">服务态度：</div>
                                        <div class=" value">暂无评分</div>
                                    </li>
                                    <li class="equal">
                                        <div class="sell-title">物流服务：</div>
                                        <div class=" value">暂无评分</div>
                                    </li>
                                    <li class="lower">
                                        <div class="sell-title">售后态度：</div>
                                        <div class=" value">暂无评分</div>
                                    </li>
                                    <li class="lower last">
                                        <div class="sell-title">售后速度：</div>
                                        <div class=" value">暂无评分</div>
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="daibanshixiang">
                    <div class="left-panel">
                        <div class="shixiang">
                            <div class="hd">
                                <h1>待办事项</h1>

                            </div>
                            <div class="bd">
                                <ul class="todo-list">
                                    <li class="category ">
                                        <h2> 违规提醒</h2>
                                        <ol class="clearfix">
                                            <li>
                                                <a href="#">
                                                    <span class="todo-item-title">认证复核：</span>
                                                    <span class="todo-item-value">1</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="category ">
                                        <h2> 宝贝管理</h2>
                                        <ol class="clearfix">
                                            <li>
                                                <a href="#">
                                                    <span class="todo-item-title">认证复核：</span>
                                                    <span class="todo-item-value">1</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="category ">
                                        <h2> 订单提醒</h2>
                                        <ol class="clearfix">
                                            <li>
                                                <a href="#">
                                                    <span class="todo-item-title">认证复核：</span>
                                                    <span class="todo-item-value">1</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="category ">
                                        <h2> 橱窗管理</h2>
                                        <ol class="clearfix">
                                            <li>
                                                <a href="#">
                                                    <span class="todo-item-title">认证复核：</span>
                                                    <span class="todo-item-value">1</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="category ">
                                        <h2> 活动管理</h2>
                                        <ol class="clearfix">
                                            <li>
                                                <a href="#">
                                                    <span class="todo-item-title">认证复核：</span>
                                                    <span class="todo-item-value">1</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="category ">
                                        <h2> 服务订购</h2>
                                        <ol class="clearfix">
                                            <li>
                                                <a href="#">
                                                    <span class="todo-item-title">认证复核：</span>
                                                    <span class="todo-item-value">1</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zjgl">
                            <div class="hd">
                                <h1>资金管理</h1>
                            </div>
                            <div class="zjcont">
                                <div class="panel panel-zfb">
                                    <h2>淘爱心余额</h2>
                                    <a class="available-amount-wrap">
                                        <span class="money"></span>
                                        <span class="txt txt-show">显示余额</span>
                                        <span></span>
                                    </a>
                                    <div class="sub-links">
                                        <a>转账</a>
                                        <a>提现</a>
                                        <a>交易记录</a>
                                    </div>

                                </div>
                                <div class="panel panel-tbdk">
                                    <h2>淘爱心贷款</h2>
                                    <a>查看金额</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="right-panel">
                        <div class="jinritoutiao">
                            <div class="hd">
                                <h1>今日必读</h1>
                            </div>
                            <div class="seller_news">
                                <div class="seller_news_hd">
                                    <ul class="seller_news_tabs">
                                        <li class="tab tab-selected">滚动头条</li>
                                        <li class="tab tab-selected">淘宝规则</li>
                                    </ul>
                                </div>
                                <div class="seller_news_content">
                                    <li class="content">
                                        <ol>
                                            <li>
                                                <h2><a href="#"> 创变未来，淘爱心新一年战略方向</a></h2>
                                                <span class="date">
                                                	04-09
                                                </span>
                                            </li>
                                            <li>
                                                <h2><a href="#"> 创变未来，淘爱心新一年战略方向</a></h2>
                                                <span class="date">
                                                	04-09
                                                </span>
                                            </li>
                                            <li>
                                                <h2><a href="#"> 创变未来，淘爱心新一年战略方向</a></h2>
                                                <span class="date">
                                                	04-09
                                                </span>
                                            </li>
                                            <li>
                                                <h2><a href="#"> 创变未来，淘爱心新一年战略方向</a></h2>
                                                <span class="date">
                                                	04-09
                                                </span>
                                            </li>
                                            <li>
                                                <h2><a href="#"> 创变未来，淘爱心新一年战略方向</a></h2>
                                                <span class="date">
                                                	04-09
                                                </span>
                                            </li>

                                        </ol>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="dianpushuju">
                            <div class="hd movable J_MoveMod">
                                <h1>店铺数据</h1>
                            </div>
                            <div class="bd">
                                <div class="shop-content-sell">
                                    <div class="rank-content">
                                        <div class="rank-title">
                                            <span>行业排名</span>
                                            <a class="fr">2016-04-15</a>
                                        </div>
                                        <div class="rank-type">
                                            <p>
                                                根据淘宝集市商家最近30天的支付宝成交金额计算，您的店铺在淘宝饰品/流行首饰/时尚饰品新类目排名如下，了解更多<a>请点击查看行业排名趋势</a>
                                            </p>
                                        </div>
                                        <div class="rank-num">
                                            <span class="normal"></span>
                                            <span class="rank-num-01">
                                            	<span>第一层级</span>
                                            </span>
                                            <span class="rank-num-02">
                                            	<span>第116479名</span>
                                            </span>
                                            <span class="rank-num-03">
                                            	<span>较前日上升68名</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="trading-situation-general">
                                        <div class="rank-title">
                                            <span>交易概况</span>
                                            <a class="fr">查看交易分析</a>
                                        </div>
                                        <div class="jiaoyiimg">
                                            <img src="/img/seller center/jygk.png">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sub">
            <div class="sidebar">
                <div class="seller-title">
                    <a href="#">
                        <span class="title">卖家中心</span>
                        <span class="seller-icon fr">&#xe628</span>
                    </a>
                </div>
                <div class="app-list J_AppList has-shop">
                    <ul>
                        <li class="category">
                            <div class="category-name">
                                <span class="category-icon">&#xe90c</span>
                                我的淘爱心生活
                                <a href="#"></a>
                                <span class="J_AppToggle"></span>
                            </div>
                            <ol class="category-app clearfix J_Category_59">
                                <li class="common-app">
                                    <a href="#">外卖管理</a>
                                </li>
                            </ol>
                        </li>
                        <li class="category">
                            <div class="category-name">
                                <span class="category-icon">&#xe902</span>
                                交易管理
                                <a href="#"></a>
                                <span class="J_AppToggle"></span>
                            </div>
                            <ol class="category-app clearfix J_Category_59">
                                <li class="common-app">
                                    <a href="#">评价管理</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">已卖出宝贝</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">采购租手</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">提前收款</a>
                                </li>
                            </ol>
                        </li>
                        <li class="category">
                            <div class="category-name">
                                <span class="category-icon">&#xe909</span>
                                物流管理
                                <a href="#"></a>
                                <span class="J_AppToggle"></span>
                            </div>
                            <ol class="category-app clearfix J_Category_59">
                                <li class="common-app">
                                    <a href="#">发货</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">物流工具</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">我要寄快递</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">物流服务</a>
                                </li>
                            </ol>
                        </li>
                        <li class="category">
                            <div class="category-name">
                                <span class="category-icon">&#xe624</span>
                                宝贝管理
                                <a href="#"></a>
                                <span class="J_AppToggle"></span>
                            </div>
                            <ol class="category-app clearfix J_Category_59">
                                <li class="common-app">
                                    <a href="#">橱窗推荐</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">出售中宝贝</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">体检中心</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">发布宝贝</a>
                                </li>
                            </ol>
                        </li>
                        <li class="category">
                            <div class="category-name">
                                <span class="category-icon">&#xe626</span>
                                店铺管理
                                <a href="#"></a>
                                <span class="J_AppToggle"></span>
                            </div>
                            <ol class="category-app clearfix J_Category_59">
                                <li class="common-app">
                                    <a href="#">淘爱心店铺</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">店铺推销</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">图片中心</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">店铺装修</a>
                                </li>
                            </ol>
                        </li>
                        <li class="category">
                            <div class="category-name">
                                <span class="category-icon">&#xe903</span>
                                营销中心
                                <a href="#"></a>
                                <span class="J_AppToggle"></span>
                            </div>
                            <ol class="category-app clearfix J_Category_59">
                                <li class="common-app">
                                    <a href="#">手机营销专区</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">活动报名</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">我要推广</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">生意参谋</a>
                                </li>
                            </ol>
                        </li>
                        <li class="category">
                            <div class="category-name">
                                <span class="category-icon">&#xe908</span>
                                客户服务
                                <a href="#"></a>
                                <span class="J_AppToggle"></span>
                            </div>
                            <ol class="category-app clearfix J_Category_59">
                                <li class="common-app">
                                    <a href="#">售后管理</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">违规记录</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">退款管理</a>
                                </li>
                                <li class="common-app">
                                    <a href="#">消费者保障服务</a>
                                </li>
                            </ol>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
@endsection