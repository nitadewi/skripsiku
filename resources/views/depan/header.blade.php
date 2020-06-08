
<div class="navbar">
    <nav class="blue lighten-3">
    <div class="container">
    <div class="nav-wrapper">
      <a href="#!" class="logo" style="color: white"> 
      <img src="{{ asset('/foto/logo.png')}}" style="height:40px; "alt="materialize logo">Kabupaten Nabire</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/daftarwisata') }}">Daftar Wisata</a></li>
        <li><a href="{{ url('/kontak') }}">Hubungi Kami</a></li>
      </ul>
    </div>
    </div>
  </nav>
</div>
   <ul class="side-nav" id="mobile-demo">
   <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/daftarwisata') }}">Daftar Wisata</a></li>
        <li><a href="{{ url('/kontak') }}">Hubungi Kami</a></li>
    </ul>