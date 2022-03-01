@extends('layouts.dashboard')
@section('content')
<div class="row mt-4">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Pengeluaran</h4>
        <form class="forms-sample">
            <div class="form-group">
            <label for="nama">Deskripsi</label>
            <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
            <label for="alamat">Total Pengeluaran</label>
            <input type="text" class="form-control" id="alamat">
            </div>
            <div class="form-group">
            <label for="telepon">Pegawai</label>
            <input type="type" class="form-control" id="telepon">
            </div>
            <div class="form-group">
            <label for="kurir">Bukti</label>
            <input type="text" class="form-control" id="kurir">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
        </div>
    </div>
</div>
@endsection