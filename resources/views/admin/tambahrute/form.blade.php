<div class="form-group {{ $errors->has('node_awal') ? 'has-error' : ''}}">
    <label for="node_awal" class="control-label">{{ 'Awal' }}</label>
    <select class="browser-default form-control" name="node_awal" id="awal" onchange="setAwal()">
        <option value="">Pilih Node Awal</option>
        @foreach($graph as $graph)
        <option value="{{ $graph->nama_node }}" data-graph="{{ $graph->ltd }},{{ $graph->lngtd }}">{{ $graph->nama_node }}</option>
        @endforeach
</select>
    {!! $errors->first('node_awal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('node_tujuan') ? 'has-error' : ''}}">
    <label for="node_tujuan" class="control-label">{{ 'Tujuan' }}</label>
    <select class=" browser-default form-control" name="node_tujuan" id="tujuan" onchange="setTujuan()">
        <option value="">Pilih Node Tujuan</option>
        @foreach($t as $t)
        <option value="{{  $t->nama_node }}" data-graph="{{ $t->ltd }}, {{ $t->lngtd }}">{{ $t->nama_node }}</option>
        @endforeach
</select>
    {!! $errors->first('node_tujuan', '<p class="help-block">:message</p>') !!}
</div>
<div id="mapku" style="height:400px ">
</div>
<div class="form-group {{ $errors->has('jalur') ? 'has-error' : ''}}">
    <label for="jalur" class="control-label">{{ 'jalur' }}</label>
    <input class="form-control" name="jalur" type="text" id="jalur" value="{{ isset($datas->jalur) ? $datas->jalur : ''}}">
    {!! $errors->first('ltd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lngtd') ? 'has-error' : ''}}">
    <label for="bobot" class="control-label">{{ 'jarak' }}</label>
    <input class="form-control" name="bobot" type="text" id="bobot" value="{{ isset($datas->bobot) ? $datas->bobot : ''}}" >
     {!! $errors->first('lngtd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('temp') ? 'has-error' : ''}}">
    <label for="temp" class="control-label">{{ 'temp' }}</label>
    <input class="form-control" name="temp" type="text" id="temp" value="{{ isset($datas->temp) ? $datas->temp : 'N'}}">
     {!! $errors->first('temp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
<input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

@section('script')
<script type='text/javascript'>

var Mymap = L.map('mapku').setView([-3.362858, 135.503811], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(Mymap);

var a;
function setAwal(){
  a = $('#awal').find('option:selected').attr('data-graph');
  a = a.split(',').map(Number);
}

var b;
function setTujuan(){
  b = $('#tujuan').find('option:selected').attr('data-graph');
  b = b.split(',').map(Number);

    var polylinePoints = [ 
       a, b
    ]
      var polylineOptions = {
               color: 'blue',
               weight: 6,
               opacity: 0.9
             };

             var polyline = new L.Polyline(polylinePoints, polylineOptions);
             Mymap.addLayer(polyline);                        
             
             // zoom the map to the polyline
             Mymap.fitBounds(polyline.getBounds());
            
             var distance = $('#bobot').val(L.GeometryUtil.distance(Mymap, a, b));
             var hasil = $('#jalur').val(JSON.stringify(polyline.toGeoJSON()));
            }
   
</script>


@endsection