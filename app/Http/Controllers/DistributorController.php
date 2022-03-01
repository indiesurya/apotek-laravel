<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
    public function index()
    {
        return view('distributor',[
            'title' => 'Distributor',
            'page' => 'Distributor',
            'data' => Distributor::all()
        ]);
    }
}
