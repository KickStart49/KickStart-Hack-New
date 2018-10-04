<!DOCTYPE html>
<html>
<head>
  <title>Sign in - KickStart Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login2.css') }}">
  @yield('css')

</head>
<body>
  <section>
  <div class="container-fluid">
    <div class="mainlogin col-xl-4 col-sm-12 login">
      <div class="loadingline hidden"></div>
      <div class="padding">
        <img src="{{ asset('images/logo.png') }}" class="image">
        @yield('content')
     </div>
  </div>
  <div align="center" class="bot">
    <span class="bottom">
      <a href="#" class="colour">New to KickStart?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </span>
    <span class="bottom1">
      <a href="#"  class="colour">Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </span>
    <span class="bottom2">
      <a href="#"  class="colour">About us</a>
    </span>
  </span>
</section>

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
@yield('script')
</body>
</html>