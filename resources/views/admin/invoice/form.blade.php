<div class="form-group {{ $errors->has('id_invoice') ? 'has-error' : ''}}">
    <label for="id_invoice" class="control-label">{{ 'Id Invoice' }}</label>
    <input class="form-control" name="id_invoice" type="number" id="id_invoice" value="{{ isset($invoice->id_invoice) ? $invoice->id_invoice : ''}}" >
    {!! $errors->first('id_invoice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_pengguna') ? 'has-error' : ''}}">
    <label for="id_pengguna" class="control-label">{{ 'Id Pengguna' }}</label>
    <input class="form-control" name="id_pengguna" type="number" id="id_pengguna" value="{{ isset($invoice->id_pengguna) ? $invoice->id_pengguna : ''}}" >
    {!! $errors->first('id_pengguna', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_pengguna') ? 'has-error' : ''}}">
    <label for="nama_pengguna" class="control-label">{{ 'Nama Pengguna' }}</label>
    <input class="form-control" name="nama_pengguna" type="text" id="nama_pengguna" value="{{ isset($invoice->nama_pengguna) ? $invoice->nama_pengguna : ''}}" >
    {!! $errors->first('nama_pengguna', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_pesanan') ? 'has-error' : ''}}">
    <label for="id_pesanan" class="control-label">{{ 'Id Pesanan' }}</label>
    <input class="form-control" name="id_pesanan" type="number" id="id_pesanan" value="{{ isset($invoice->id_pesanan) ? $invoice->id_pesanan : ''}}" >
    {!! $errors->first('id_pesanan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : ''}}">
    <label for="nama_produk" class="control-label">{{ 'Nama Produk' }}</label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="{{ isset($invoice->nama_produk) ? $invoice->nama_produk : ''}}" >
    {!! $errors->first('nama_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jumlah_produk') ? 'has-error' : ''}}">
    <label for="jumlah_produk" class="control-label">{{ 'Jumlah Produk' }}</label>
    <input class="form-control" name="jumlah_produk" type="number" id="jumlah_produk" value="{{ isset($invoice->jumlah_produk) ? $invoice->jumlah_produk : ''}}" >
    {!! $errors->first('jumlah_produk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
