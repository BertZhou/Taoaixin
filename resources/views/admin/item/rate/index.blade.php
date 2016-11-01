@extends('layout.page')
@section('title', '商品列表')

@section('content')
<div id="content">
  <div class="panel" id="spy3">
      <div class="panel-heading">
        <span class="panel-title">
          <span class="fa fa-table"></span>商品列表</span>
      </div>
      <div class="panel-body pn">
        <div class="bs-component">
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">商品</th>
                <th class="text-center">买家</th>
                <th class="text-center">评分</th>
                <th class="text-center">描述</th>
                <th class="text-center">时间</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($rates as $rate)
              <tr>
                <td>{{ $rate->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ !empty($users[$rate->buyer_user_id]) ? $users[$rate->buyer_user_id]->name : $rate->buyer_user_id }}</td>
                <td>{{ $rate->stars }}</td>
                <td>{{ !empty($rate->content) ? str_limit($rate->content, 50) : '-' }}</td>
                <td>{{ $rate->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>
<div class="text-right">{!! $rates->render() !!}</div>
</div>
@endsection