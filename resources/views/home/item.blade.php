@foreach ($items as $item)
<div class="col-lg-3 col-md-3 col-sm-6" style="padding: 0px;">
    <div class="product-item">
        <div class="product-img">
            <a href="details.html" class="link-dark">
                <img src="{{$item->url}}" class="img-responsive">
            </a>
        </div>
        <div class="product-info">
            <div class="title">
                <a href="" class="link-dark">{{$item->content }}</a>
            </div>
            <p class="text-double"></p>
            <div class="metas clearfix">
                <span class="price">{{$item->price}}</span>
                <span class="num">{{$item->sold}}人已付款</span>
            </div>
        </div>
    </div>
</div>
@endforeach