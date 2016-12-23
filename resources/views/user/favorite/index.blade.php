@extends('user.favorite.layout')
@section('title','收藏夹')


@section('content')
    <div class="fav-cont">
    <div class="fav-bar">
        <div class="fav-var-top">
            <div class="fav-var-left">
                <div class="fav-baobei">
                    <a href="#" class="left-item fl"><span class="icon-down"></span><span>全部爱心宝贝<em>{{count($items)}}</em></span></a>
                    <ul class="menu" id="baobei-menu">
                        <li class="baobei-item"><a href="#">全部爱心宝贝<em>{{count($items)}}</em></a></li>
                        <li><a href="#">原厂地时令果蔬<i>4</i></a></li>
                        <li><a href="#">二手书籍<em>2</em></a></li>
                        <li><a href="#">数码产品<em>3</em></a></li>
                        <li><a href="#">天使公益<em>1</em></a></li>
                        <li><a href="#">勤工助学<em>2</em></a></li>
                        <li><a href="#">其他<em>1</em></a></li>
                    </ul>
                </div>
                <a href="#" class="left-item2 fl">失效<em>0</em></a>
            </div>

            <div class="fav-var-right clearfix">
                <div class="right-search">
                    <input type="button" class="fav-search-right fr">
                    <input type="text" class="fav-search fr" value="宝贝搜索" onfocus="if(value=='宝贝搜索') {value=''}"
                           onblur="if(value==''){value='宝贝搜索'}">
                </div>
                <div class="fr right-manage">
                    <ul class="manage-cancel">
                        <li class="fl chooseAll"><span class="rr icon-all">&#xe60e;</span>全选</li>
                        <li class="fl deleteManage"><span class="icon-delete">&#xe60d;</span>删除</li>
                    </ul>
                    <ul class="manage-batch">
                        <li class="fl productCmp">宝贝对比</li>
                        <li class="fl batchManage">批量管理</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="fav-item clearfix">
        @if(count($items) == 0)
            <div class="text-center" style="margin:20px;text-align: center;">
                <img src="/img/icon/icon_empty_content.png" alt="">
            </div>
            @else
            @foreach($items as $item)
                <div class="fav-list">
                    <input type="hidden" name="favorite_id" value="{{$item['favorite_id']}}">
                    <div class="list-mask">
                        <div class="mask"></div>
                        <span class="icon-choose">&#xe612;</span>
                    </div>
                    <a href="{{url('item',$item['id'])}}"><img src="{{url($item['url'])}}" alt="taoaixin">
                        <h3>{{$item['content']}}</h3>
                        <p class="xianjia fl">￥{{$item['price']}}</p>

                    </a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="fav-var-top">
        <div class="var2-top clearfix">
            <a href="#" class="var2-left fl">热卖爱心宝贝</a>
            <ul class="var2-right">
                <li><a href="#">时令水果</a><i></i></li>
                <li><a href="#">图书笔记</a></li>
                <li><a href="#">户外运动</a></li>
                <li><a href="#">百货</a></li>
                <li><a href="#">服装</a></li>
                <li><a href="#">勤工岗位</a></li>
            </ul>
            <a href="#" class="more fr">更多</a>
        </div>
    </div>
        <div class="fav-item clearfix  ">
            <div class="fav-list2">
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
            <div class="fav-list2">
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
            <div class="fav-list2">
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
            <div class="fav-list2">
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

        {{--<div class="fav-bottom clearfix">--}}
        <div class="fav-var-top">
            <div class="var3-top">
                <ul>
                    <li><a href="#" class="var2-left fl">猜你喜欢</a></li>
                    <li><a href="#" class="var2-left fl">淘爱心发现</a></li>
                    <!-- <li><span><hr/></span></li> -->
                    <li><a href="#" class="var2-left fr">根据你最近的浏览发现</a></li>
                </ul>
            </div>
        </div>
        <div class="fav-item">
            {{--@foreach($items as $item)--}}
                <div class="fav-list3">
                    <a href="{{'/item/15'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/waiter.jpg"  alt="taoaixin">
                    </a>
                    <div class="list3-guess">
                        <div class="list3-line"></div>
                        <div class="list3-price">
                            ￥15.00/小时
                        </div>
                        <div class="pro-detail">
                            <p>金沙湖新发现服务员</p>
                        </div>
                    </div>
                </div>
            <div class="fav-list3">
                <a href="{{'/item/6'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/si.jpg"  alt="taoaixin">
                </a>
                <div class="list3-guess">
                    <div class="list3-line"></div>
                    <div class="list3-price">
                        ￥25.00
                    </div>
                    <div class="pro-detail">
                        <p>Spark全真试题+标准模拟</p>
                    </div>
                </div>
            </div>
            <div class="fav-list3">
                <a href="{{'/item/21'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/library-q.jpg"  alt="taoaixin">
                </a>
                <div class="list3-guess">
                    <div class="list3-line"></div>
                    <div class="list3-price">
                        ￥15.00/小时
                    </div>
                    <div class="pro-detail">
                        <p>学校图书馆需要勤工30名</p>
                    </div>
                </div>
            </div>
            <div class="fav-list3">
                <a href="{{'/item/25'}}"><img src="http://o7jajeu9a.bkt.clouddn.com/lemon.jpg"  alt="taoaixin">
                </a>
                <div class="list3-guess">
                    <div class="list3-line"></div>
                    <div class="list3-price">
                        ￥10.00
                    </div>
                    <div class="pro-detail">
                        <p>新疆产芒果</p>
                    </div>
                </div>
            </div>
            {{--@endforeach--}}
        </div>

    </div>
    {{--</div>--}}
@endsection