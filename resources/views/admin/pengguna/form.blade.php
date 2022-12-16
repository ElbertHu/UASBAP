<div class="form-group {{ $errors->has('id_pengguna') ? 'has-error' : ''}}">
    <label for="id_pengguna" class="control-label">{{ 'Id Pengguna' }}</label>
    <input class="form-control" name="id_pengguna" type="number" id="id_pengguna" value="{{ isset($pengguna->id_pengguna) ? $pengguna->id_pengguna : ''}}" >
    {!! $errors->first('id_pengguna', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username" value="{{ isset($pengguna->username) ? $pengguna->username : ''}}" >
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($pengguna->nama) ? $pengguna->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
