<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
  </head>
  <body>

    @yield('content')




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
      async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv2ct01-Nd8vzgRYN2pnUNbMsi2Rfa6Bg&libraries=places"
    >
    </script>
    <script
      async defer
      type="text/javascript"
      src="{{asset('js/script.js')}}"
    >
    </script>

    <script
      async defer
      type="text/javascript"
      src="{{asset('js/search.js')}}"
    >
    </script>
  </body>
</html>
