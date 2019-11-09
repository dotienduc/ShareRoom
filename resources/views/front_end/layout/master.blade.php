<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{ asset('front_end/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/fl-bigmug-line.css') }}">
    
  
    <link rel="stylesheet" href="{{ asset('front_end/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('front_end/css/style.css') }}">
    @yield('css')
    </head>
  <body>
  
  @include('front_end.partial.header')
  

    @yield('content')
    
    @include('front_end.partial.footer');

  </div>

  <script src="{{ asset('front_end/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('front_end/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('front_end/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('front_end/js/popper.min.js') }}"></script>
  <script src="{{ asset('front_end/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front_end/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front_end/js/mediaelement-and-player.min.js') }}"></script>
  <script src="{{ asset('front_end/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('front_end/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('front_end/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('front_end/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('front_end/js/aos.js') }}"></script>

  <script src="{{ asset('front_end/js/main.js') }}"></script>
  <script>
    $.ajaxSetup({
    headers: { "X-CSRF-Token": $("meta[name=_token]").attr("content") }
});
    </script>
  @yield('javascript')
  </body>
</html>