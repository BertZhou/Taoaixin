@extends('layout.page')

@section('content')

 <div id="content" class="animated fadeIn">
   <div class="row">

     <div class="col-md-12">
                 <!-- Input Fields -->
       <div class="panel">
         <div class="panel-heading">
           <span class="panel-title">测试</span>
         </div>
         <div class="panel-body">

         <form class="form-horizontal" role="form" action="{{ url('my/order') }}" method="POST">
            {!! csrf_field() !!}
            @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </div>
            @endif
             <div class="form-group">
               <label for="item_id" class="col-lg-3 control-label">Item_id</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="item_id" name="item_id" class="form-control" value="{{ old('name') }}">
                 </div>
               </div>
             </div>

             <div class="form-group">
               <label for="note" class="col-lg-3 control-label">Note</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="note" name="note" class="form-control" value="{{ old('note') }}">
                 </div>
               </div>
             </div>

             <div class="text-right">
               <button type="submit" class="btn btn-default ph25">{{ trans('view.submit') }}</button>
             </div>
             
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
