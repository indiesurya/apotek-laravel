@extends('layouts.dashboard')
@section('content')
<div class="row mt-4">
     <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kategori</h4>
                <form action="/input-kategori" method="POST" class="forms-sample">
                @csrf
                    <div class="form-group">
                    <label for="jumlah">Nama Kategori</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                    <button type="submit" name="input" value="Submit"class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection