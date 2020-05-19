@extends('depan.main')
@section('menu')

    
    
@endsection
@section('style')
<style>
      .tes {
      position: relative;
      width: 100%;
      height: 100%;
      }

      #mapku {
      position: absolute;
      background: #eee;
      }

      .kontener {
      position: absolute;
      padding: 50px;
      top: 100px;
      left: 100px;
      background: white;
      }
      </style>
@endsection

@section('content')
		<div class="tes">
    <div id="mapku"style="height: 100%">
    
    </div>
    <div class="kontener">
    sasasaaaaaaaaaa
    </div>   
@endsection
@section('script')
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
$(".leaflet-control-zoom").css("visibility", "hidden");
</script>

@endsection

