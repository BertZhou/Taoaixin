<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Authentication - {{ config('setting.site_name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' type='text/css' href='//fonts.lug.ustc.edu.cn/css?family=Open+Sans:300,400,600,700'>
  <link rel="stylesheet" type="text/css" href="{{ url('assets/skin/default_skin/css/theme.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/admin-tools/admin-forms/css/admin-forms.css') }}">
  <link rel="shortcut icon" href="{{ url('assets/img/favicon.ico') }}">
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">
  <div id="main" class="animated fadeIn">
    <section id="content_wrapper">
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>
      <section id="content">
        <div class="admin-form theme-info" id="login1">
          <div class="row mb15 table-layout">
            <div class="col-xs-6 va-m pln">
              <a href="dashboard.html" title="Return to Dashboard">
                <img src="{{ url('assets/img/logos/logo_white.png') }}" title="AdminDesigns Logo" class="img-responsive w250">
              </a>
            </div>

            <div class="col-xs-6 text-right va-b pr5">
              <div class="login-links">
                <a href="{{ url('login') }}" class="active" title="Sign In">Sign In</a>
                <span class="text-white"> | </span>
                <a href="{{ url('register') }}" class="" title="Register">Register</a>
              </div>
            </div>
          </div>

          <div class="panel panel-info mt10 br-n">
            @yield('content')
          </div>
        </div>

      </section>

    </section>

  </div>
  <script src="{{ url('vendor/jquery/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ url('vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>
  <script src="{{ url('vendor/plugins/canvasbg/canvasbg.js') }}"></script>
  <script src="{{ url('assets/js/utility/utility.js') }}"></script>
  <script src="{{ url('assets/js/main.js') }}"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    Core.init();
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2,
        y: window.innerHeight / 3.3
      },
    });

  });
  </script>
</body>

</html>
