<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label">{{ 'Id Produk' }}</label>
    <input class="form-control" name="id_produk" type="number" id="id_produk" value="{{ isset($stokproduk->id_produk) ? $stokproduk->id_produk : ''}}" >
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : ''}}">
    <label for="nama_produk" class="control-label">{{ 'Nama Produk' }}</label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="{{ isset($stokproduk->nama_produk) ? $stokproduk->nama_produk : ''}}" >
    {!! $errors->first('nama_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stok_produk') ? 'has-error' : ''}}">
    <label for="stok_produk" class="control-label">{{ 'Stok Produk' }}</label>
    <input class="form-control" name="stok_produk" type="number" id="stok_produk" value="{{ isset($stokproduk->stok_produk) ? $stokproduk->stok_produk : ''}}" >
    {!! $errors->first('stok_produk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
