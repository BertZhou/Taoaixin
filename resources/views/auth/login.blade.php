@extends('layout.auth')

@section('content')
<form method="POST" action="{{ url('admin/login') }}" id="contact">
  {!! csrf_field() !!}
  <div class="panel-body bg-light p30">
    @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
          </div>
      @endif
    <div class="row">
      <div class="col-sm-12 pr30">
        <div class="section">
          <label for="email" class="field-label text-muted fs18 mb10">Username</label>
          <label for="email" class="field prepend-icon">
            <input type="text" name="email" id="email" class="gui-input" placeholder="Enter youremail">
            <label for="email" class="field-icon">
              <i class="fa fa-user"></i>
            </label>
          </label>
        </div>
        <div class="section">
          <label for="email" class="field-label text-muted fs18 mb10">Password</label>
          <label for="password" class="field prepend-icon">
            <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
            <label for="password" class="field-icon">
              <i class="fa fa-lock"></i>
            </label>
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-footer clearfix p10 ph15">
    <button type="submit" class="button btn-primary mr10 pull-right">Sign In</button>
    <label class="switch ib switch-primary pull-left input-align mt10">
      <input type="checkbox" name="remember" id="remember" checked>
      <label for="remember" data-on="YES" data-off="NO"></label>
      <span>Remember me</span>
    </label>
  </div>
</form>
@endsection