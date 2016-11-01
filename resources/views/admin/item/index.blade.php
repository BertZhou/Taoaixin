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
                <th class="text-center">名称</th>
                <th class="text-center">卖家</th>
                <th class="text-center">描述</th>
                <th class="text-center">价格</th>
                <th class="text-center">浏览</th>
                <th class="text-center">销量</th>
                <th class="text-center">库存</th>
                <th class="text-center">操作</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ !empty($users[$item->user_id]) ? $users[$item->user_id]['name'] : $item->user_id }}</td>
                <td>{{ !empty($item->content) ? str_limit($item->content, 50) : '-' }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->view }}</td>
                <td>{{ $item->sold }}</td>
                <td>{{ $item->quantity }}</td>
                <td>
                  <a href="{{ url('admin/item/'.$item->id.'/rate') }}">评分</a>
                  <a href="{{ url('admin/item/'.$item->id.'/edit') }}">编辑</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>
<div class="text-right">{!! $items->render() !!}</div>
</div>
@endsection