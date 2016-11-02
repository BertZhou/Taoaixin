@extends('layout.page')
@section('title', !empty($item) ? '编辑商品' : '新建商品')

@section('content')

 <div id="content" class="animated fadeIn">
   <div class="row">

     <div class="col-md-12">
                 <!-- Input Fields -->
       <div class="panel">
         <div class="panel-heading">
           <span class="panel-title">{{ !empty($item) ? '编辑商品' : '新建商品' }}</span>
         </div>
         <div class="panel-body">

         <form class="form-horizontal" role="form" action="{{ !empty($item) ? url('admin/item/'.$item->id) : url('admin/item') }}" method="POST">
            {!! csrf_field() !!}
            @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </div>
            @endif
            @if(!empty($item))
              <div class="form-group">
                  <label class="col-lg-3 control-label">ID</label>
                  <div class="col-lg-8">
                      <div class="bs-component">
                          <p class="form-control-static text-muted">{{ $item->id }}</p>
                      </div>
                  </div>
              </div>
              <input type="hidden" name="_method" value="PUT">
            @endif

             <div class="form-group">
               <label for="name" class="col-lg-3 control-label">名称</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="name" name="name" class="form-control" value="{{ !empty($item) ? $item->name : old('name') }}">
                 </div>
               </div>
             </div>

             <div class="form-group">
               <label for="price" class="col-lg-3 control-label">价格</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="price" name="price" class="form-control" value="{{ !empty($item) ? $item->price : old('price') }}">
                 </div>
               </div>
             </div>

             <div class="form-group">
               <label class="col-lg-3 control-label" for="content">介绍</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <textarea class="form-control" id="content" name="content" rows="3">{{ !empty($item) ? $item->content : old('content') }}</textarea>
                 </div>
               </div>
             </div>

             <div class="form-group">
               <label for="quantity" class="col-lg-3 control-label">库存</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="quantity" name="quantity" class="form-control" value="{{ !empty($item) ? $item->quantity : old('quantity') }}">
                 </div>
               </div>
             </div>

             <div class="text-right">
               <button type="submit" class="btn btn-default ph25">提交</button>
             </div>
             
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
