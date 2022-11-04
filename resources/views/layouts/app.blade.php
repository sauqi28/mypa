<!doctype html>
<html lang="en">

<head>
  <title>Manage Apps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
  <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/jvectormap/jquery-jvectormap-2.0.3.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/morrisjs/morris.css')}}" />


  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">



</head>


<body data-theme="light" class="font-nunito">

  <div id="wrapper" class="theme-cyan">

    @include('components.navbar')

    @yield('contents')

  </div>
  <script src="{{asset('bundles/libscripts.bundle.js')}}"></script>
  <script src="{{asset('bundles/vendorscripts.bundle.js')}}"></script>
  <script src="{{asset('bundles/apexcharts.bundle.js')}}"></script>
  <script src="{{asset('bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
  <script src="{{asset('bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
  <!-- page js file -->
  <script src="{{asset('bundles/mainscripts.bundle.js')}}"></script>
  <script src="{{asset('js/pages/blog.js')}}"></script>
</body>

</html>
