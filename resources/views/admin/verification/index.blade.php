@extends('layout.page')
@section('title', '审核列表')

@section('content')
<div id="content">
  <div class="panel" id="spy3">
      <div class="panel-heading">
        <span class="panel-title">
          <span class="fa fa-table"></span>审核列表</span>
        <div class="pull-right hidden-xs">
          <ul class="nav panel-tabs-border panel-tabs">
            <li class="{{ isset($search['type']) ? '' : 'active' }}">
              <a href="{{ url('admin/verification') }}">个人</a>
            </li>
            <li class="{{ (isset($search['type']) && $search['type'] == 'enterprise') ? 'active' : '' }}">
              <a href="{{ url('admin/verification?type=enterprise') }}">企业</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="panel-body pn">
        <div class="bs-component">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>用户</th>
                <th>类型</th>
                <th>证件号</th>
                <th>证件名称</th>
                <th>证件到期时间</th>
                <th>时间</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($verifications as $verification)
              <tr>
                <td>{{ !empty($users[$verification->user_id]) ? $users[$verification->user_id]['name'] : $verification->user_id }}</td>
                <td>{{ $verification->type }}</td>
                <td>{{ $verification->license_no }}</td>
                <td>{{ $verification->license_name }}</td>
                <td>{{ $verification->license_expire_date }}</td>
                <td>{{ $verification->created_at }}</td>
                <td>
                  <a href="{{ url('admin/verification/'.$verification->user_id.'/edit') }}">编辑</a>
                  <a href="javascript:void(0)" data-delete-id="{{ $verification->user_id }}" data-delete-url="admin/verification" class="delete-btn">删除</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>
<div class="text-right">{!! $verifications->render() !!}</div>
</div>
@endsection