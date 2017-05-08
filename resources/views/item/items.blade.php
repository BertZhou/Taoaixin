@extends('layout.tao.index')
@section('title','商品列表')

@section('content')
    <div class="product container">
        <div class="row">
            <div class="col-md-2 side-screen no-padding">
                <div class="product-left">
                    <div class="top">
                        <h5>全部商品分类</h5>
                    </div>
                    <div class="content">
                        {{--<h5>爱心商品</h5>--}}
                        <div class="content-item">
                            <h5>爱心商品</h5>
                            <ul class="content-ul">
                                <li><a href="{{url('item/5')}}">第六版高数上</a></li>
                                <li><a href="{{url('item/8')}}">会计学二手书</a></li>
                            </ul>
                        </div>
                        <div class="content-item">
                            <h5>校园岗位</h5>
                            <ul class="content-ul">
                                <li><a href="{{url('item/21')}}">图书馆勤工</a></li>
                                <li><a href="{{url('item/20')}}">保卫室勤工</a></li>
                            </ul>
                        </div>
                        <div class="content-item">
                            <h5>学生时间</h5>
                            <ul class="content-ul">
                                <li><a href="{{url('item/9')}}">擅长PS</a></li>
                                <li><a href="{{url('item/12')}}">精通编程</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 product-list">
                <div class="col-lg-12">
                    <ul class="product-nav-bar clearfix">
                        <li class="col-lg-3 "><a href="{{url('item?type=0')}} " data-type="0">爱心推荐</a></li>
                        <li class="col-lg-3 "><a href="{{url('item?type=1')}}" data-type="1">爱心商品</a></li>
                        <li class="col-lg-3"><a href="{{url('item?type=3')}}" data-type="3">爱心岗位</a></li>
                        <li class="col-lg-3"><a href="{{url('item?type=2')}}" data-type="2">爱心时间</a></li>
                    </ul>
                    <div style="margin:-10px 0 10px 95%">
                        <a class="viewgallery"><img src="img/icon/ViewGallery.png"></a>
                        <a class="viewlist"><img src="img/icon/Viewlist.png"></a>
                    </div>
                </div>
                @foreach($items as $item)
                <!-- 商品网格显示和列表显示js写在layout.tao.index下 -->
                    <input type="hidden" id="selectedMenu" value="{{$type}}">
                <div class="col-lg-4 col-md-4 col-sm-6 item_lists">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="{{url('item',$item->id)}}" class="link-dark">
                                <img src="{{url($item->url)}}" class="img-responsive">
                            </a>
                            <!-- 图片路径和商品链接 -->
                        </div>
                        <div class="product-info">
                            <div class="title">
                                <a href="{{url('item',$item->id)}}" class="link-dark">{{$item->content}}</a>
                            </div>
                            <!-- 商品描述 -->
                            <p class="text-line"></p>
                            <div class="metas clearfix">
                                @if($item->type == 2 || $item->type == 3)
                                    <span class="price">￥{{$item->price}}/小时</span>
                                    @else
                                    <span class="price">￥{{$item->price}}</span>
                                    <!-- 商品价格 --> 
                                @endif
                            </div>
                            <div class="metas clearfix">
                                @if($item->type == 3)
                                    <span class="num">{{$item->sold}}人已申请</span>
                                    @else
                                    <span class="num">{{$item->sold}}人已付款</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class=" col-md-8 col-md-offset-2  text-center">
                    {{ $items->appends(["type" => $type])->links() }}
                </div>
                
            </div>

           
        </div>
    </div>
@endsection