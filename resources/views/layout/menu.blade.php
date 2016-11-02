<aside id="sidebar_left" class="nano nano-light affix">  
  <div class="sidebar-left-content nano-content">
    <ul class="nav sidebar-menu">
      <li class="sidebar-label pt15">系统</li>
      <li>
        <a href="{{ url('admin/user') }}">
          <span class="fa fa-user"></span>
          <span class="sidebar-title">用户</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/role') }}">
          <span class="fa fa-male"></span>
          <span class="sidebar-title">角色</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/item') }}">
          <span class="glyphicon glyphicon-book"></span>
          <span class="sidebar-title">商品</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/report') }}">
          <span class="fa fa-globe"></span>
          <span class="sidebar-title">举报</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/verification') }}">
          <span class="fa fa-terminal"></span>
          <span class="sidebar-title">审核</span>
        </a>
      </li>
    </ul>
    <div class="sidebar-toggle-mini">
      <a href="#">
        <span class="fa fa-sign-out"></span>
      </a>
    </div>
  </div>
</aside>