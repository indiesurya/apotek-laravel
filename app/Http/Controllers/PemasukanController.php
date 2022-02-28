<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;

class PemasukanController extends Controller
{
    public function index()
    {
        return view('pemasukan', [
            'title' => 'Total Pemasukan',
            'page' => 'Pemasukan',
            'data' => Pemasukan::all()
        ]);
    }  
}
