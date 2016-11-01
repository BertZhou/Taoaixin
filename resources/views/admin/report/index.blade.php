@extends('layout.page')
@section('title', '举报列表')

@section('content')
<div id="content">
  <div class="panel" id="spy3">
      <div class="panel-heading">
        <span class="panel-title">
          <span class="fa fa-table"></span>举报列表</span>
      </div>
      <div class="panel-body pn">
        <div class="bs-component">
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">举报者</th>
                <th class="text-center">描述</th>
                <th class="text-center">时间</th>
                <th class="text-center">操作</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reports as $report)
              <tr>
                <td>{{ $report->id }}</td>
                <td>{{ !empty($users[$report->reporter_id]) ? $users[$report->reporter_id]['name'] : $report->reporter_id }}</td>
                <td>{{ !empty($report->content) ? str_limit($report->content, 50) : '-' }}</td>
                <td>{{ $report->created_at }}</td>
                <td>
                  <a href="{{ url('admin/order/'.$report->order_id.'/edit') }}">查看订单</a>
                  <a href="{{ url('admin/report/'.$report->id.'/edit') }}">编辑</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>
<div class="text-right">{!! $reports->render() !!}</div>
</div>
@endsection