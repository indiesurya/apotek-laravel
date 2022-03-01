@extends('layouts.dashboard')
@section('content')

<div class="row mt-4">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Obat Baru</h4>
                <form action="/input-data-obat" method="POST" class="forms-sample">
                    @csrf
                    <div class="form-group">
                    <label for="nama">Nama Obat</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="kategori_id">Kategori</label>
                    <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id">
                        <option selected>Choose...</option>
                        @foreach($data['kategori'] as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="kegunaan">Kegunaan</label>
                    <input type="text" class="form-control @error('kegunaan') is-invalid @enderror" id="kegunaan" name="kegunaan">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="distributor">Distributor</label>
                    <select class="form-control @error('distributor') is-invalid @enderror" id="distributor" name="distributor">
                        <option selected>Choose...</option>
                        @foreach($data['distributor'] as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('distributor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok">
                    @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="harga">Harga Jual</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga">
                    @error('harga')
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
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card" style="height:60%;">
            <div class="card-body">
                <h4 class="card-title">Data Obat</h4>
                <form class="forms-sample">
                    <div class="form-group">
                    <label for="kode">Kode Obat</label>
                    <select class="form-control" id="kode">
                        <option selected>Choose...</option>
                        @foreach($data['obat'] as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->kategori->nama }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah">
                    </div>
                    <div class="form-group">
                    <label for="harga">Harga Beli</label>
                    <input type="text" class="form-control" id="harga">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection