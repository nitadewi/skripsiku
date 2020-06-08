<div class="form-group {{ $errors->has('nama_node') ? 'has-error' : ''}}">
    <label for="nama_node" class="control-label">{{ 'Node' }}</label>
    <select class="browser-default form-control" name="nama_node" id="node" onchange="setNama()">
        <option value="">Pilih Node Awal</option>
        @foreach($graph as $graph)
        <option value="{{ $graph->nama }}" data-ltd="{{ $graph->ltd }}" data-lngtd="{{ $graph->lngtd }}" >{{ $graph->nama }}</option>
        @endforeach
</select>
    {!! $errors->first('node_awal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_node') ? 'has-error' : ''}}">
    <label for="nama_node" class="control-label">{{ 'Node' }}</label>
    <input class="form-control" name="nama_node" type="text" id="namanode" value="{{ isset($datas->nama_node) ? $datas->nama_node : ''}}" >
    {!! $errors->first('nama_node', '<p class="help-block">:message</p>') !!}
</div>
<div id="mapL" style="{{ $formMode === 'edit' ? 'height:400px' : 'height:500px' }} ">
</div>
<div class="form-group {{ $errors->has('ltd') ? 'has-error' : ''}}">
    <label for="ltd" class="control-label">{{ 'Ltd' }}</label>
    <input class="form-control" name="ltd" type="text" id="ltd" value="{{ isset($datas->ltd) ? $datas->ltd : ''}}">
    {!! $errors->first('ltd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lngtd') ? 'has-error' : ''}}">
    <label for="lngtd" class="control-label">{{ 'Lngtd' }}</label>
    <input class="form-control" name="lngtd" type="text" id="lngtd" value="{{ isset($datas->lngtd) ? $datas->lngtd : ''}}">
     {!! $errors->first('lngtd', '<p class="help-block">:message</p>') !!}
</div>
<div>
<button class="btn btn-primary" type="button" onclick="getInputValue();">Get Jalur</button>
</div>
<div class="form-group {{ $errors->has('jalur') ? 'has-error' : ''}}">
    <label for="jalur" class="control-label">{{ 'jalur' }}</label>
    <input class="form-control" name="jalur" type="text" id="jalur" value="{{ isset($datas->jalur) ? $datas->jalur : ''}}">
    {!! $errors->first('ltd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
<input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

@section('script')
<script>
<?php foreach($liat as $li) { 
    echo "L.marker(['$li->ltd', '$li->lngtd']).addTo(map)
    .bindPopup('$li->nama_node').openPopup();";
 } ?>


var node, ltd, lngtd;
function setNama(){
  nama = $('#node').val();
  ltd = $('#node').find('option:selected').attr('data-ltd');
  lngtd = $('#node').find('option:selected').attr('data-lngtd');

  $('#namanode').val(nama);
  $('#ltd').val(ltd);
  $('#lngtd').val(lngtd);


var jalur 	= '"'+nama+'":{"coord":[' +ltd+ ','+ lngtd+']}';
var hasil = $('#jalur').val(jalur);
}


function getInputValue(){
            // Selecting the input element and get its value 
            nama = document.getElementById("namanode").value;
            ltd = document.getElementById("ltd").value;
            lngtd = document.getElementById("lngtd").value;
            
            var jalur 	= '"'+nama+'":{"coord":[' +ltd+ ','+ lngtd+']}';
            var hasil = $('#jalur').val(jalur);
        }
</script>
@endsection