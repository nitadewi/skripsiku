<!DOCTYPE html>
  <html>
    <head>
    
    
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}} " media="screen,projection"/>
      <link type="text/css"  rel="stylesheet" href="{{ asset('css/style.css')}}" media="screen,projection"/>
      <!--Maps-->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      @section('css')

    @show
    </head>

    <body>
    @section('header')
    @include('depan.header')
    @show

   @section('menu')
   @show

    @yield('content')

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="{{asset('js/map.js') }}" type="text/javascript"></script>
      <script src="{{asset('js/materialize.min.js')}}"></script>
      <script src="{{asset('js/init.js')}}"></script>
      <script type="text/javascript">
       // navbar
       $(document).ready(function(){
           $('.sidenav').sidenav();
           });
    </script>
   
    </body>
  </html>