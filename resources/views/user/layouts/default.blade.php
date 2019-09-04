<!doctype html>
<html @lang('en')>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>

    <link href="{{asset('user/vendors/mdi/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendors/mdi/css/vendor.bundle.base.css')}}" rel="stylesheet">

    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body class="rtl">
  <div class="container-scroller">
    @include('user.includes.nav')
    <div class="container-fluid page-body-wrapper">
      @include('user.includes.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="{{asset('user/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('user/js/off-canvas.js')}}"></script>
  <script src="{{asset('user/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('user/js/misc.js')}}"></script>

</body>
</html>