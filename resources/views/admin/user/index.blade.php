@extends('layout.page')

@section('content')
<div id="content">
  <div class="panel">
    <div class="panel-heading">
      <span class="panel-title">{{trans('view.search')}}</span>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" action="{{ url('user') }}" method="GET">
        @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </div>
        @endif
        <div class="form-group">
          <label for="id" class="col-lg-3 control-label">ID</label>
          <div class="col-lg-8">
            <div class="bs-component">
              <input type="text" id="id" class="form-control" name="id" value="{{ isset($search['id']) ? $search['id'] : old('id') }}">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-lg-3 control-label">邮箱</label>
          <div class="col-lg-8">
            <div class="bs-component">
              <input type="text" id="email" class="form-control" name="email" value="{{ isset($search['email']) ? $search['email'] : old('email') }}">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-lg-3 control-label">名称</label>
          <div class="col-lg-8">
            <div class="bs-component">
              <input type="text" id="name" class="form-control" name="name" value="{{ isset($search['name']) ? $search['name'] : old('name') }}">
            </div>
          </div>
        </div>

        <input type="hidden" name="status" value="{{ isset($search['status']) ? $search['status'] : null }}">

        <div class="text-right">
          <button type="submit" class="btn btn-default ph25">{{ trans('view.submit') }}</button>
        </div>

      </form>
    </div>
  </div>

  <div class="panel" id="spy3">
      <div class="panel-heading">
        <span class="panel-title">
          <span class="fa fa-table"></span>用户列表</span>
        <div class="pull-right hidden-xs">
          <ul class="nav panel-tabs-border panel-tabs">
            <li><a href="{{ url('user/create') }}">{{ trans('view.add') }}{{ trans('view.user') }}</a></li>
          </ul>
        </div>
      </div>
      <div class="panel-body pn">
        <div class="bs-component">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>{{ trans('view.name') }}</th>
                <th>{{ trans('view.email') }}</th>
                <th>{{ trans('view.action') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a href="{{ url('admin/user/'.$user->id.'/favorite') }}">收藏</a>
                  <a href="{{ url('admin/user/'.$user->id.'/edit') }}">编辑</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>
<div class="text-right">{!! $users->appends(['search' => $search])->render() !!}</div>
</div>
@endsection