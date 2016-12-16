<!-- Start: Header -->
<header class="navbar navbar-fixed-top navbar-shadow">
  <div class="navbar-branding">
    <a class="navbar-brand" href="{{ url('/') }}">
      <b>Taoaixin</b>Portal
    </a>
    <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
  </div>
  <form class="navbar-form navbar-left navbar-search alt" role="search" action="#" method="GET">
    <div class="form-group">
      <input name="subject" type="text" class="form-control" value="">
    </div>
  </form>
  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown menu-merge">
      <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
        <img src="#" alt="avatar" class="mw30 br64">
        <span class="hidden-xs pl15"> {{ !empty(Session::get("name")) ? Session::get("name"): '' }} </span>
        <span class="caret caret-tp hidden-xs"></span>
      </a>
      <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
        <li class="list-group-item">
          <a href="#" class="animated animated-short fadeInUp">
            <span class="w20 fa fa-bell"></span> {{ trans('view.hp') }}</a>
        </li>
        <li class="list-group-item">
          <a href="/log?user_id={{ Auth::user()->id }}" class="animated animated-short fadeInUp">
            <span class="w20 fa fa-user"></span> {{ trans('view.log') }}</a>
        </li>
        <li class="list-group-item">
          <a href="/user/{{ Auth::user()->id }}/edit" class="animated animated-short fadeInUp">
            <span class="w20 fa fa-gear"></span> {{ trans('view.profile') }}</a>
        </li>
        <li class="list-group-item">
          <a href="javascript:void(0)" data-delete-id="0" data-delete-url="tfa" class="delete-btn animated animated-short fadeInUp">
            <span class="w20 fa fa-lock"></span> {{ trans('view.lock') }}</a>
        </li>
        <li class="dropdown-footer">
          <a href="{{ url('logout') }}" class="">
          <span class="fa fa-power-off pr5"></span> {{ trans('view.logout') }} </a>
        </li>
      </ul>
    </li>
  </ul>
</header>
<!-- End: Header -->