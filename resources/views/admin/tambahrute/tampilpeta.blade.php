@extends('layouts.main')
@section('content')

<div id="mapku" style="height:500px"></div>


<script>

</script>


<script>

 var Mymap = L.map('mapku').setView([-3.362858, 135.503811], 13);

 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
 }).addTo(Mymap);



<?php foreach($liat as $li) { 
    echo "L.marker(['$li->ltd', '$li->lngtd']).addTo(Mymap)
    .bindPopup('$li->nama'+' edit')
    .openPopup();";
 } ?>

</script>


@endsection

