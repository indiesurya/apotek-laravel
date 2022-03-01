<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Kategori;
use \App\Models\Obat;
use \App\Models\Distributor;

class InputDataController extends Controller
{
    //obat
    public function obat()
    {
        $data = [
            'kategori' => Kategori::all(),
            'obat' => Obat::all(),
            'distributor' => Distributor::all()
        ];
        return view('inputdata.obat', [
            'title' => 'Input Data Obat',
            'page' => 'Input Data Obat',
            'data' => $data
        ]);
    }
    public function insertobat(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|min:5|unique:obats',
            'kategori_id' => 'required',
            'kegunaan' => 'required',
            'distributor' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        Obat::create($validatedData);
        return redirect('/dataobat');
    }

    //kategori
    public function kategori()
    {
        return view('inputdata.kategori', [
            'title' => 'Input Kategori',
            'page' => 'Input Kategori',
        ]);
    }
    public function insertkategori(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|min:5|unique:kategoris'
        ]);

        Kategori::create($validatedData);
        return redirect('/kategori');
    }



    //distributor
    public function distributor()
    {
        return view('inputdata.distributor', [
            'title' => 'Input Distributor',
            'page' => 'Input Distributor',
        ]);
    }
    public function insertdistributor(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|min:5|unique:obats',
            'alamat' => 'required',
            'telepon' => 'required',
            'kurir' => 'required'
        ]);

        Distributor::create($validatedData);
        return redirect('/dataobat');
    }
    public function pengeluaran()
    {
        return view('inputdata.pengeluaran', [
            'title' => 'Input Pengeluaran',
            'page' => 'Input Pengeluaran',
        ]);
    }
}
