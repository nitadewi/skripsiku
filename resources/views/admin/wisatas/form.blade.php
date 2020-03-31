<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($wisata->nama) ? $wisata->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($wisata->foto) ? $wisata->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="alamat" type="text" id="alamat" value="{{ isset($wisata->alamat) ? $wisata->alamat : ''}}" >
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <label for="keterangan" class="control-label">{{ 'Keterangan' }}</label>
    <textarea class="form-control" rows="5" name="keterangan" type="textarea" id="keterangan" >{{ isset($wisata->keterangan) ? $wisata->keterangan : ''}}</textarea>
    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
<div class="map-embed" id="map-get-location">
</div>
<strong id="l"></strong>
</div>
<div class="form-group {{ $errors->has('ltd') ? 'has-error' : ''}}">
    <label for="ltd" class="control-label">{{ 'Ltd' }}</label>
    <input class="form-control" name="ltd" type="text" id="ltd" value="{{ isset($wisata->ltd) ? $wisata->ltd : ''}}" >
    {!! $errors->first('ltd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lngtd') ? 'has-error' : ''}}">
    <label for="lngtd" class="control-label">{{ 'Lngtd' }}</label>
    <input class="form-control" name="lngtd" type="text" id="lngtd" value="{{ isset($wisata->lngtd) ? $wisata->lngtd : ''}}" >
    {!! $errors->first('lngtd', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
