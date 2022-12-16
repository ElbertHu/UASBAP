@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">invoice {{ $invoice->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/invoice') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/invoice/' . $invoice->id . '/edit') }}" title="Edit invoice"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/invoice' . '/' . $invoice->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete invoice" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <a href="{{ url('admin/invoice/cetak_pdf' ) }}" title="Print invoice"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                        <br/>
                        <br/>
                    

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $invoice->id }}</td>
                                    </tr>
                                    <tr><th> Id Invoice </th>
                                        <td> {{ $invoice->id_invoice }} </td>
                                    </tr>
                                    <tr><th> Nama Pengguna </th>
                                        <td> {{ $invoice->nama_pengguna }} </td>
                                    </tr>
                                    <tr><th> Nama Produk </th>
                                        <td> {{ $invoice->nama_produk }} </td>
                                    </tr>
                                    <tr><th> Jumlah Produk </th>
                                        <td> {{ $invoice->jumlah_produk }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
