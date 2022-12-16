<div class="form-group {{ $errors->has('id_pesanan') ? 'has-error' : ''}}">
    <label for="id_pesanan" class="control-label">{{ 'Id Pesanan' }}</label>
    <input class="form-control" name="id_pesanan" type="number" id="id_pesanan" value="{{ isset($pesanan->id_pesanan) ? $pesanan->id_pesanan : ''}}" >
    {!! $errors->first('id_pesanan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jumlah_produk') ? 'has-error' : ''}}">
    <label for="jumlah_produk" class="control-label">{{ 'Jumlah Produk' }}</label>
    <input class="form-control" name="jumlah_produk" type="number" id="jumlah_produk" value="{{ isset($pesanan->jumlah_produk) ? $pesanan->jumlah_produk : ''}}" >
    {!! $errors->first('jumlah_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : ''}}">
    <label for="nama_produk" class="control-label">{{ 'Nama Produk' }}</label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="{{ isset($pesanan->nama_produk) ? $pesanan->nama_produk : ''}}" >
    {!! $errors->first('nama_produk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
