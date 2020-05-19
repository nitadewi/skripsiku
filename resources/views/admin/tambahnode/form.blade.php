<div class="form-group {{ $errors->has('nama_node') ? 'has-error' : ''}}">
    <label for="nama_node" class="control-label">{{ 'Node' }}</label>
    <input class="form-control" name="nama_node" type="text" id="nama_node" value="{{ isset($node->nama_node) ? $node->nama_node : ''}}" >
    {!! $errors->first('nama_node', '<p class="help-block">:message</p>') !!}
</div>
<div id="mapL" style="{{ $formMode === 'edit' ? 'height:400px' : 'height:500px' }} ">
</div>
<div class="form-group {{ $errors->has('ltd') ? 'has-error' : ''}}">
    <label for="ltd" class="control-label">{{ 'Ltd' }}</label>
    <input class="form-control" name="ltd" type="text" id="ltd" value="{{ isset($node->ltd) ? $node->ltd : ''}}">
    {!! $errors->first('ltd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lngtd') ? 'has-error' : ''}}">
    <label for="lngtd" class="control-label">{{ 'Lngtd' }}</label>
    <input class="form-control" name="lngtd" type="text" id="lngtd" value="{{ isset($node->lngtd) ? $node->lngtd : ''}}">
     {!! $errors->first('lngtd', '<p class="help-block">:message</p>') !!}
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
</script>
@endsection