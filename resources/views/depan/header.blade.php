<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/carirute') }}">Cari Rute</a></li>
        <li><a href="{{ url('/kontak') }}">Hubungi Kami</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="{{ url('/home') }}">Beranda</a></li>
    <li><a href="badges.html">Cari Rute</a></li>
    <li><a href="collapsible.html">Hubungi Kami</a></li>
  </ul>