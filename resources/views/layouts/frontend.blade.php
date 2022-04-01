<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    @yield('title') | Iron Box
    </title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{asset('home/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <!-- themify icon -->
  <link href="{{asset('home/plugins/themify-icons/themify-icons.css')}}" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{asset('home/plugins/slick/slick.css')}}" rel="stylesheet">
  <!-- Slick Carousel Theme -->
  <link href="{{asset('home/plugins/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{asset('home/css/style.css')}}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{asset('home/images/favicon.png')}}" rel="stylesheet">
</head>
<body>

    <div class="content">
    @yield('content')
    @include('layouts.inc.footer')
    </div>



    <script src="{{asset('frontend/js/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>
</html>
