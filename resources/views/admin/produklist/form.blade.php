<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label">{{ 'Id Produk' }}</label>
    <input class="form-control" name="id_produk" type="number" id="id_produk" value="{{ isset($produklist->id_produk) ? $produklist->id_produk : ''}}" >
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : ''}}">
    <label for="nama_produk" class="control-label">{{ 'Nama Produk' }}</label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="{{ isset($produklist->nama_produk) ? $produklist->nama_produk : ''}}" >
    {!! $errors->first('nama_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
    <label for="harga" class="control-label">{{ 'Harga' }}</label>
    <input class="form-control" name="harga" type="text" id="harga" value="{{ isset($produklist->harga) ? $produklist->harga : ''}}" >
    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input type="file" name="image" id="image">
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('deskripsi_produk') ? 'has-error' : ''}}">
    <label for="deskripsi_produk" class="control-label">{{ 'Deskripsi Produk' }}</label>
    <input class="form-control" name="deskripsi_produk" type="text" id="deskripsi_produk" value="{{ isset($produklist->deskripsi_produk) ? $produklist->deskripsi_produk : ''}}" >
    {!! $errors->first('deskripsi_produk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
