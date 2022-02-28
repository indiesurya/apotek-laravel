<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Apotek Kubu Anyar',
            'page' => 'Dashboard'
        ]);
    }  
}
