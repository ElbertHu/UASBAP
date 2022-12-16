@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
 

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">stokproduk {{ $stokproduk->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/stokproduk') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/stokproduk/' . $stokproduk->id . '/edit') }}" title="Edit stokproduk"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/stokproduk' . '/' . $stokproduk->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete stokproduk" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $stokproduk->id }}</td>
                                    </tr>
                                    <tr><th> Id Produk </th><td> {{ $stokproduk->id_produk }} </td></tr><tr><th> Nama Produk </th><td> {{ $stokproduk->nama_produk }} </td></tr><tr><th> Stok Produk </th><td> {{ $stokproduk->stok_produk }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
