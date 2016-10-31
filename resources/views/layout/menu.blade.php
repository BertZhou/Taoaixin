<aside id="sidebar_left" class="nano nano-light affix">  
  <div class="sidebar-left-content nano-content">
    <ul class="nav sidebar-menu">
      <li class="sidebar-label pt15">{{trans('view.system')}}</li>
      <li>
        <a href="{{ url('admin/user') }}">
          <span class="fa fa-user"></span>
          <span class="sidebar-title">用户</span>
        </a>
      </li>
      <li>
        <a href="{{ url('feedback') }}">
          <span class="glyphicon glyphicon-book"></span>
          <span class="sidebar-title">{{trans('view.feedback')}}</span>
        </a>
      </li>
      <li>
        <a href="{{ url('news') }}">
          <span class="fa fa-globe"></span>
          <span class="sidebar-title">{{ trans('view.news') }}</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/role') }}">
          <span class="fa fa-male"></span>
          <span class="sidebar-title">角色</span>
        </a>
      </li>
      <li>
        <a href="{{ url('report') }}">
          <span class="fa fa-terminal"></span>
          <span class="sidebar-title">{{ trans('view.report') }}</span>
        </a>
      </li>
      <li>
        <a href="{{ url('slide') }}">
          <span class="fa fa-columns"></span>
          <span class="sidebar-title">{{ trans('view.slide') }}</span>
        </a>
      </li>
      <li>
        <a href="{{ url('server') }}">
          <span class="fa fa-desktop"></span>
          <span class="sidebar-title">{{ trans('view.server') }}</span>
        </a>
      </li>
      <li>
        <a href="{{ url('zone') }}">
          <span class="fa fa-th"></span>
          <span class="sidebar-title">{{ trans('view.zone') }}</span>
        </a>
      </li>
      <li>
        <a href="{{ url('log') }}">
          <span class="glyphicon glyphicon-list-alt"></span>
          <span class="sidebar-title">{{trans('view.log')}}</span>
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