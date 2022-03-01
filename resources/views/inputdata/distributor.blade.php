@extends('layouts.dashboard')
@section('content')
<div class="row mt-4">
    <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Distributor</h4>
        <form action="/input-distributor" method="post"class="forms-sample">
        @csrf
            <div class="form-group">
            <label for="nama">Nama Perusahaan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
            @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
            </div>
            <div class="form-group">
            <label for="telepon">No.Telepon</label>
            <input type="type" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon">
            @error('telepon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
            </div>
            <div class="form-group">
            <label for="kurir">Nama Kurir</label>
            <input type="text" class="form-control @error('kurir') is-invalid @enderror" id="kurir" name="kurir">
            @error('kurir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
        </div>
    </div>
</div>
@endsection