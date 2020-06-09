<!DOCTYPE html>
  <html>
    <head>
    
    
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    
      <!--Import Google Icon Font-->
      <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

     <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

     
      <link type="text/css"  rel="stylesheet" href="{{ asset('css/style.css')}}" media="screen,projection"/>
      <!--Maps-->
      <link rel="stylesheet" href="{{ asset('leaflet.css')}}" />
      <script src="{{ asset('/leaflet.js')}}"></script>
   
    <script src="https://npmcdn.com/leaflet-geometryutil"> </script>
  

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script>
  $(document).ready(function () {
      	$(".button-collapse").sideNav();
      });
</script>
    </head>

    <body>

    @yield('header')
    
    @yield('content')


   
    </body>
    <script src="{{ asset('js/scroll.js')}}"></script>
  </html>