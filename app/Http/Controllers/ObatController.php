<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        return view('/dataobat', [
            'title' => 'Data Obat',
            'page' => 'Data Obat',
            'data' => Obat::all()
        ]);
    }  
} 


