@extends('layouts.app')
@section('content')

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Username</th><th>Nama</th><th>Komentar</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($review as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->komentar }}</td>
                <td>
                    <a href="{{ url(' ') }}" title="print"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection