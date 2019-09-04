<!doctype html>
<html @lang('en')>
<head>
  @include('front.includes.head')
  @include('front.includes.css')
</head>

<body >
  @include('front.includes.header')
  @include('front.includes.login')
  @yield('content')
  @include('front.includes.script')
  </body>
</html>