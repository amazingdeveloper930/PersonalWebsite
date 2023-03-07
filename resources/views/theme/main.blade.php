<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{{ env('APP_NAME') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  @yield('before-css')
  <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/docs.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/js/google-code-prettify/prettify.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/color/success.css') }}" rel="stylesheet">
  @yield('page-css')

  @yield('bottom-css')


  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico') }}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Scaffold
    Theme URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
    @include('theme.navbar')
    @if(strtolower(request() -> route('controller')) != 'home')
      @include('theme.description')
    @endif
    @yield('page-content')
    @include('theme.footer')
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/6405b24c31ebfa0fe7f0e9af/1gqr40vl4';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
    <!--End of Tawk.to Script-->



  <script src="{{ asset('assets/js/jquery-1.8.2.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('assets/js/modernizr.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.elastislide.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/js/application.js') }}"></script>
  @foreach($tplConfig -> script as $js)
    <script src="{{ asset('assets/js/' . $js) }}"></script>
  @endforeach
  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  @yield('bottom-js')
  

</body>

</html>