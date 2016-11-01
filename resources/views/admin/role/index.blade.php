@extends('layout.page')
@section('title', '角色列表')

@section('content')
<div id="content">
  <div class="panel" id="spy3">
      <div class="panel-heading">
        <span class="panel-title">
          <span class="fa fa-table"></span>角色列表</span>
        <div class="pull-right hidden-xs">
          <span><a href="{{ url('admin/role/create') }}">添加角色</a></span>
        </div>
      </div>
      <div class="panel-body pn">
        <div class="bs-component">
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">名称</th>
                <th class="text-center">标签</th>
                <th class="text-center">描述</th>
                <th class="text-center">等级</th>
                <th class="text-center">操作</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $role)
              <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->slug }}</td>
                <td>{{ !empty($role->description) ? str_limit($role->description, 50) : '-' }}</td>
                <td>{{ $role->level }}</td>
                <td>
                  <a href="{{ url('admin/role/'.$role->id.'/edit') }}">编辑</a>
                  <a href="{{ url('admin/role/'.$role->id.'/permission') }}">权限</a>
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