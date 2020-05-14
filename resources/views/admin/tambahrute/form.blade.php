<div class="form-group {{ $errors->has('node_awal') ? 'has-error' : ''}}">
    <label for="node_awal" class="control-label">{{ 'Awal' }}</label>
    <select class=" browser-default form-control ">
        @foreach($item as $item)
        <option value=""></option>
        <option value="{{ $item->nama_node }}">{{ $item->nama_node }}</option>
        @endforeach
</select>
    {!! $errors->first('node_awal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('node_tujuan') ? 'has-error' : ''}}">
    <label for="node_tujuan" class="control-label">{{ 'Tujuan' }}</label>
    <select class=" browser-default form-control ">
        @foreach($t as $t)
        <option value=""></option>
        <option value="{{ $t->nama_node }}">{{ $t->nama_node }}</option>
        @endforeach
</select>
    {!! $errors->first('node_tujuan', '<p class="help-block">:message</p>') !!}
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
    <input class="form-control" name="lngtd" type="text" id="lngtd" value="{{ isset($datas->lngtd) ? $datas->lngtd : ''}}" >
     {!! $errors->first('lngtd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
<input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>