@extends('layout.page')

@section('content')
<div id="content">
  <div class="panel" id="spy3">
      <div class="panel-heading">
        <span class="panel-title">
          <span class="fa fa-table"></span>{{ trans('view.role').trans('view.list') }}</span>
        <div class="pull-right hidden-xs">
          <span><a href="{{ url('admin/role/create') }}">{{ trans('view.add').trans('view.role') }}</a></span>
        </div>
      </div>
      <div class="panel-body pn">
        <div class="bs-component">
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">{{ trans('view.name') }}</th>
                <th class="text-center">{{ trans('view.slug') }}</th>
                <th class="text-center">{{ trans('view.description') }}</th>
                <th class="text-center">{{ trans('view.level') }}</th>
                <th class="text-center">{{ trans('view.action') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $role)
              <tr>
                <td>{{ $role->id }}</td>
                <td><a href="{{ url('role/'.$role->id.'/edit') }}">{{ $role->name }}</a></td>
                <td>{{ $role->slug }}</td>
                <td>{{ !empty($role->description) ? str_limit($role->description, 50) : '-' }}</td>
                <td>{{ $role->level }}</td>
                <td>
                  <a href="{{ url('admin/role/'.$role->id.'/edit') }}">编辑</a>
                  <a href="{{ url('admin/role/'.$role->id.'/permission') }}">{{ trans('view.permission') }}</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>
</div>
@endsection