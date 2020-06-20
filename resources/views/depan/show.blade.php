@extends('depan.main')
@section('title','Beranda')

@section('header')
<div class="navbar">
    <nav class="blue lighten-3">
    <div class="container">
    <div class="nav-wrapper">
      <a href="#!" class="logo" style="color: white"> 
      <img src="{{ asset('/foto/logo.png')}}" style="height:40px; "alt="materialize logo">
      Kabupaten Nabire</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="/">Beranda</a></li>
        <li><a href="#wisata">Daftar Wisata</a></li>
        <li><a href="#hubungikami">Hubungi Kami</a></li>
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
@endsection


@section('content')
<div id="beranda">
    <div class="container">
        <div class="row center">
          <h3 style="color: #ffca28">Mau Kemana?</h3>
          <div class="col s12 m4">
            <div class="input-field">
              <input type="text" id="autocomplete-input-awal" class="autocomplete">
              <label for="autocomplete-input">Awal</label>
            </div>
          </div>

          <div class="col s12 m4">
              <div class="input-field">
                <input type="text" id="autocomplete-input-tujuan" class="autocomplete">
                <label for="autocomplete-input">Tujuan</label>
              </div>
          </div>

          <div class="col s12 m4">
            <div class="input-field">
              <button class="btn btn-primary blue lighten-3" type="button" id="cari">Cari Jalur</button>
            </div>
          </div>
        </div>
    </div>

    <div>
      <div id="mapku">    
      
      </div>
    </div>
</div>

<div id="wisata" class="container">
    <div class="section">
      <div class="row">
          @foreach($daftar as $data)
          <div class="col s12 m4">
              <div class="card" >
                <div class="card-image">
                  <img src="{{url('/images/'.$data->foto) }}" style="height:200px; object-fit: cover">  
                </div>

                <div class="card-content">
                  <span class="card-title">{{ $data->nama }}</span>
                  <p>{!!substr($data->keterangan,0,200)!!}...</p>
                </div>

                <div class="card-action">
                    <a href="{{ url('read', $data->id_wisatas) }}">lebih lanjut</a>
                  <!-- <a href="{{ url('read', $data->id_wisatas) }}" class="btn btn-flat blue lighten-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a> -->
                </div>

              </div>
          </div>
          @endforeach
      </div>
    </div>

    <div class="section">  
      <div class="row right">
        <a href="{{ url('/daftarwisata')}}">LIHAT SEMUA ></a>
        </div>
      </div>
    </div>
</div>

<div class="section">
</div>

<div class="blue lighten-3">
<div id="hubungikami" class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons">location_on</i></h2>
            <h5 class="center">Alamat</h5>

            <p class="light center">Jalan Merdeka Nabire Papua</p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons">call</i></h2>
            <h5 class="center">Kontak</h5>

            <p class="light center">xxx-xxx-xxx-xxx</p>
          </div>
        </div>

       
      </div>

    </div>
</div>

</div>






<script>
var map = L.map('mapku').setView([-3.362858, 135.503811], 15);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map); 

map.touchZoom.disable();
map.doubleClickZoom.disable();
map.scrollWheelZoom.disable();
map.boxZoom.disable();
map.keyboard.disable();


$(document).ready(function(){
  $.ajax({
    type:'get',
    url: 'http://dijkstra-nita.herokuapp.com/autocomplete',
    success:function(response){

      var custWisata = response;
      var dataWisata= {}
      for (var i=0; i< custWisata.length; i++) {
        dataWisata[custWisata[i].nama]=null;
      }
      $('input.autocomplete').autocomplete({
       data: dataWisata,
       });
    }
    })
  });
    

var url = "http://dijkstra-nita.herokuapp.com/graph";
  $.get(url, function(data, status){
      var basicGraph = data.graph;
      var nodes = data.node;

showNodes(nodes);
function showNodes(nodes){
  for(var a in nodes){
    L.circleMarker(nodes[a].coord,{radius:5,color:"#0000ff",fillOpacity:1}).bindPopup(a+' Point').addTo(map);
  }
}


    
    document.getElementById('cari').addEventListener("click", function(){ 
          var graph = readyGraph(basicGraph);
          start = document.getElementById('autocomplete-input-awal').value;
          finish = document.getElementById('autocomplete-input-tujuan').value;
          
          var shortestPath = solve(graph,start,finish);
          showPath(start,shortestPath.path);
          showNodes(nodes);
          showStartFinish(start,finish);

        function showStartFinish(start,finish){
          L.circleMarker(nodes[start].coord,{radius:8,color:"#00ff00",fillOpacity:1}).bindPopup(start+'  Start Point').addTo(map);
          L.circleMarker(nodes[finish].coord,{radius:8,color:"#ff0000",fillOpacity:1}).bindPopup(finish+'  Finish Point').addTo(map);}

    function showPath(start,path){
      var lineCoords = [];
      lineCoords.push(nodes[start].coord);
              for(var i=0;i<path.length;i++){
                  var nodeName =path[i];
                  lineCoords.push(nodes[nodeName].coord);}
      var polyline = L.polyline(lineCoords, {color: 'blue'}).addTo(map);
          }

   
   
    function solve(graph,s,f) {
      var solutions = {};
      solutions[s] = [];
      solutions[s].dist = 0;
      while(true) {
          var parent = null;
          var nearest = null;
          var dist = Infinity;
          for(var n in solutions) {
              if(!solutions[n])
                  continue
              var ndist = solutions[n].dist;
              var adj = graph[n];
              for(var a in adj) {
                  if(solutions[a])
                      continue;
                  var d = adj[a] + ndist;
                  if(d < dist) {
                      parent = solutions[n];
                      nearest = a;
                      dist = d;
                  }
              }
          }
          if(dist === Infinity) {
              break;
          }
          solutions[nearest] = parent.concat(nearest);
          solutions[nearest].dist = dist;
      }
      var finish = solutions[f];
      return {results:solutions,path:finish,distance:finish.dist};
    }

    function readyGraph(paths) {
      var graph = {};
      for(var i in paths){
          var path = paths[i];
          var start=path["start"];
          var finish=path["finish"];
          var distance=path["distance"];
          if(typeof graph[start]=="undefined"){
              graph[start]={};
              graph[start][finish]=distance;
          }else{
              graph[start][finish]=distance;
          }
          if(typeof graph[finish]=="undefined"){
              graph[finish]={};
              graph[finish][start]=distance;
          }else{
              graph[finish][start]=distance;
          }
      }
      return graph;
    }


  });





});

</script>

@endsection

