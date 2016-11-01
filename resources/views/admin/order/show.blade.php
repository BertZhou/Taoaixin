@extends('layout.page')
@section('title', '订单详情')

@section('content')

 <div id="content" class="animated fadeIn">
   <div class="row">

     <div class="col-md-12">
                 <!-- Input Fields -->
       <div class="panel">
         <div class="panel-heading">
           <span class="panel-title">订单详情</span>
         </div>
         <div class="panel-body">
         <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-lg-3 control-label">ID</label>
              <div class="col-lg-8">
                  <div class="bs-component">
                      <p class="form-control-static text-muted">{{ $order->id }}</p>
                  </div>
              </div>
            </div>

            <div class="form-group">
              <label for="type" class="col-lg-3 control-label">状态</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $order->type }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="item" class="col-lg-3 control-label">商品</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $item->name }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="buyer" class="col-lg-3 control-label">买家</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $buyer->name }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="seller" class="col-lg-3 control-label">卖家</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $seller->name }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="price" class="col-lg-3 control-label">价格</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $order->price }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="note" class="col-lg-3 control-label">备注</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $order->note }}</p>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
