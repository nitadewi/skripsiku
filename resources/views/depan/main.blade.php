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
      <link rel="stylesheet" href="{{ asset('leaflet.css')}}" />
    <script src="{{ asset('/leaflet.js')}}"></script>
    <script src="https://npmcdn.com/leaflet-geometryutil"> </script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     
      
      @yield('css')

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
      @yield('script')
      <script type="text/javascript" src="{{ asset('template/vendors/jquery-3.2.1.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('template/js/materialize.min.js')}}"></script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="{{asset('js/init.js')}}"></script>
      <script type="text/javascript">
       // navbar
       $(document).ready(function(){
           $('.sidenav').sidenav();
           });
    </script>
   
    </body>
  </html>