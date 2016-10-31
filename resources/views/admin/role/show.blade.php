@extends('layout.page')

@section('content')

 <div id="content" class="animated fadeIn">
   <div class="row">

     <div class="col-md-12">
                 <!-- Input Fields -->
       <div class="panel">
         <div class="panel-heading">
           <span class="panel-title">{{ !empty($role) ? trans('view.edit').trans('view.role') : trans('view.create').trans('view.role') }}</span>
         </div>
         <div class="panel-body">

         <form class="form-horizontal" role="form" action="{{ !empty($role) ? url('admin/role/'.$role->id) : url('admin/role') }}" method="POST">
            {!! csrf_field() !!}
            @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </div>
            @endif
            @if(!empty($role))
              <div class="form-group">
                  <label class="col-lg-3 control-label">ID</label>
                  <div class="col-lg-8">
                      <div class="bs-component">
                          <p class="form-control-static text-muted">{{ $role->id }}</p>
                      </div>
                  </div>
              </div>
              <input type="hidden" name="_method" value="PUT">
            @endif

             <div class="form-group">
               <label for="name" class="col-lg-3 control-label">{{ trans('view.name') }}</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="name" name="name" class="form-control" value="{{ !empty($role) ? $role->name : old('name') }}">
                 </div>
               </div>
             </div>

             <div class="form-group">
               <label for="slug" class="col-lg-3 control-label">{{ trans('view.slug') }}</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="slug" name="slug" class="form-control" value="{{ !empty($role) ? $role->slug : old('slug') }}">
                 </div>
               </div>
             </div>

             <div class="form-group">
               <label class="col-lg-3 control-label" for="description">{{ trans('view.description') }}</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <textarea class="form-control" id="description" name="description" rows="3">{{ !empty($role) ? $role->description : old('description') }}</textarea>
                 </div>
               </div>
             </div>

             <div class="form-group">
               <label for="level" class="col-lg-3 control-label">{{ trans('view.level') }}</label>
               <div class="col-lg-8">
                 <div class="bs-component">
                   <input type="text" id="level" name="level" class="form-control" value="{{ !empty($role) ? $role->level : old('level') }}">
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
