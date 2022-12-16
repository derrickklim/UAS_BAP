<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username" value="{{ isset($alamat->username) ? $alamat->username : ''}}" >
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="alamat" type="text" id="alamat" value="{{ isset($alamat->alamat) ? $alamat->alamat : ''}}" >
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
    <label for="provinsi" class="control-label">{{ 'Provinsi' }}</label>
    <input class="form-control" name="provinsi" type="text" id="provinsi" value="{{ isset($alamat->provinsi) ? $alamat->provinsi : ''}}" >
    {!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kota') ? 'has-error' : ''}}">
    <label for="kota" class="control-label">{{ 'Kota' }}</label>
    <input class="form-control" name="kota" type="text" id="kota" value="{{ isset($alamat->kota) ? $alamat->kota : ''}}" >
    {!! $errors->first('kota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kecamatan') ? 'has-error' : ''}}">
    <label for="kecamatan" class="control-label">{{ 'Kecamatan' }}</label>
    <input class="form-control" name="kecamatan" type="text" id="kecamatan" value="{{ isset($alamat->kecamatan) ? $alamat->kecamatan : ''}}" >
    {!! $errors->first('kecamatan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kode_pos') ? 'has-error' : ''}}">
    <label for="kode_pos" class="control-label">{{ 'Kode Pos' }}</label>
    <input class="form-control" name="kode_pos" type="number" id="kode_pos" value="{{ isset($alamat->kode_pos) ? $alamat->kode_pos : ''}}" >
    {!! $errors->first('kode_pos', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
