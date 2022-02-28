@extends('layouts.dashboard')
@section('content')
<div class="row mt-4">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Bordered table</h4>
            <p class="card-description"> Add class <code>.table-bordered</code>
            </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th> No </th>
                    <th> Nama Produk </th>
                    <th> Jumlah </th>
                    <th> Harga </th>
                    <th> Total </th>
                    <th> Pegawai </th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($data as $item) 
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->total }}</td>
                    <td>{{ $item->user->name }}</td>
                </tr>
                @php
                    $no++
                @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection