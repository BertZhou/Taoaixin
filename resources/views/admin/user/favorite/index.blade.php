@extends('layout.page')

@section('content')
<div id="content">
  <div class="panel" id="spy3">
      <div class="panel-heading">
        <span class="panel-title">
          <span class="fa fa-table"></span>收藏列表</span>
      </div>
      <div class="panel-body pn">
        <div class="bs-component">
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">商品名称</th>
                <th class="text-center">商品介绍</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td><a href="{{ url('admin/item/'.$item->id.'/edit') }}">{{ $item->name }}</a></td>
                <td>{{ !empty($item->content) ? str_limit($item->content, 50) : '-' }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>
</div>
@endsection