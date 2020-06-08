<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>GIS</title>
  

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('template/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('template/images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
     <!-- Bootstrap Core CSS -->
     <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Custom Fonts -->
     <!-- MetisMenu CSS -->
     <link href="{{ asset('template/css/metisMenu.min.css')}}" rel="stylesheet">
     <!-- DataTables CSS -->
     <link href="{{ asset('template/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
     <!-- DataTables Responsive CSS -->
     <link href="{{ asset('template/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
     <!-- Custom CSS -->
     <link href="{{ asset('template/css/startmin.css')}}" rel="stylesheet">
     <!-- Custom Fonts -->
     <link href="{{ asset('template/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- CORE CSS-->
    <link href="{{ asset('template/css//materialize.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('template/css//style.css')}}" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="{{ asset('template/css/custom/custom.css')}}" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('template/vendors/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('template/vendors/flag-icon/css/flag-icon.min.css')}}" type="text/css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="{{ asset('template/css/dataTables/dataTables.bootstrap.css')}}" type="text/css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('template/css/dataTables/dataTables.responsive.css')}}" type="text/css" rel="stylesheet">
    <!-- Maps -->
    <link rel="stylesheet" href="{{ asset('leaflet.css')}}" />
    <script src="{{ asset('/leaflet.js')}}"></script>
    <script src="https://npmcdn.com/leaflet-geometryutil"> </script>
    

    
  </head>

  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo darken-1">
                    <img src="{{ asset('foto/logo.png')}}" alt="logo">
                    <span class="logo-text hide-on-med-and-down">Dinas Pariwisata Kab Nabire</span>
                  </a>
                </h1>
              </li>
            </ul>
            <ul class="right">
              <li>
              <i class="material-icons">keyboard_tab</i> 
              </li>
            <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </li>
           
              </ul>
      
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>

    <!-- START MAIN -->
<div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
                <div class="col col s4 m4 l4">
                <img src="{{ asset('template/images/avatar/avatar-7.png')}}" alt="" class="circle responsive-img valign profile-image cyan">
                </div>
                <div class="col col s8 m8 l8">
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav"> {{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                  <p class="user-roal">Administrator</p>
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                <a href="{{ url('/tampilpeta') }}" class="waves-effect waves-cyan">
                      <i class="material-icons">map</i>
                      <span class="nav-text">Pemetaan</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="{{ url('admin/wisatas') }}" class="waves-effect waves-cyan">
                      <i class="material-icons">create</i>
                      <span class="nav-text">List Data</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="{{ url('/tambahnode') }}" class="waves-effect waves-cyan">
                      <i class="material-icons">add_location</i>
                      <span class="nav-text">buat node</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="{{ url('/tambahrute') }}" class="waves-effect waves-cyan">
                      <i class="material-icons">add_location</i>
                      <span class="nav-text">Tambah Rute Wisata</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="{{ url('/register') }}" class="waves-effect waves-cyan">
                      <i class="material-icons">add</i>
                      <span class="nav-text">Tambah Admin</span>
                    </a>
                </li>
                </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>

        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title"> </h5>
                </div>

                 <!--start container-->
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <div class="section">
                @yield ('content')
                </div>
                
</div>
                </div>
                </div>
<footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span>
            <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-2" href="https://pixinvent.com/">PIXINVENT</a></span>
          </div>
        </div>
    </footer>
   <!-- =========    Scripts ================== -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('template/vendors/jquery-3.2.1.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('template/js/materialize.min.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('template/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('template/js/plugins.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset('template/js/custom-script.js')}}"></script>
  
     <!-- DataTables JavaScript -->
     <script src="{{ asset('template/js/bootstrap.min.js')}}"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('template/js/metisMenu.min.js')}}"></script>
     <script src="{{ asset('template/js/dataTables/jquery.dataTables.min.js')}}"></script>
     <script src="{{ asset('template/js/dataTables/dataTables.bootstrap.min.js')}}"></script>
     <script src="{{ asset('template/js/startmin.js')}}"></script>
     <script type="text/javascript" src="{{ asset('/js/map.js')}}"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });

        </script>
        
        @yield ('script')

  </body>
</html>