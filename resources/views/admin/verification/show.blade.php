@extends('layout.page')
@section('title', '审核资料')

@section('content')

 <div id="content" class="animated fadeIn">
   <div class="row">

     <div class="col-md-12">
       <div class="panel">
         <div class="panel-heading">
           <span class="panel-title">审核资料</span>
         </div>
         <div class="panel-body">

         <form class="form-horizontal" role="form" action="{{ url('admin/verification/'.$verification->user_id) }}" method="POST">
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
                <label class="col-lg-3 control-label">ID</label>
                <div class="col-lg-8">
                    <div class="bs-component">
                        <p class="form-control-static text-muted">{{ $verification->id }}</p>
                    </div>
                </div>
            </div>
            <input type="hidden" name="_method" value="PUT">

            @if($verification->type == 'enterprise')
            <div class="form-group">
              <label for="license_name" class="col-lg-3 control-label">证书名称</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $verification->license_name }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="license_no" class="col-lg-3 control-label">证书编号</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $verification->license_no }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="license_expire_date" class="col-lg-3 control-label">证书过期时间</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $verification->license_expire_date }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="license_expire_date" class="col-lg-3 control-label">证书照片</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <img src="{{ $verification->license_image }}">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="contact_name" class="col-lg-3 control-label">联系人姓名</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $verification->contact_name }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="contact_mobile" class="col-lg-3 control-label">联系方式</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <p class="form-control-static text-muted">{{ $verification->contact_mobile }}</p>
                </div>
              </div>
            </div>
            @else

            @endif
             

            <div class="form-group">
              <label for="realname" class="col-lg-3 control-label">真实姓名</label>
              <div class="col-lg-8">
                <div class="bs-component">
                   <p class="form-control-static text-muted">{{ $verification->realname }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="idcard_no" class="col-lg-3 control-label">身份证号</label>
              <div class="col-lg-8">
                <div class="bs-component">
                   <p class="form-control-static text-muted">{{ $verification->idcard_no }}</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="idcard_no" class="col-lg-3 control-label">身份证正面</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <img src="{{ $verification->idcard_front_image }}">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="idcard_no" class="col-lg-3 control-label">身份证反面</label>
              <div class="col-lg-8">
                <div class="bs-component">
                  <img src="{{ $verification->idcard_back_image }}">
                </div>
              </div>
            </div>

             <div class="text-right">
               <button type="submit" name="status" value="accept" class="btn btn-default ph25">通过</button>
               <button type="submit" name="status" value="decline" class="btn btn-default ph25">拒绝</button>
             </div>

           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
