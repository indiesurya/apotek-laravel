<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class,'index']);

Route::get('/dataobat', [ObatController::class,'index']);

Route::get('/kategori', [KategoriController::class,'index']);

Route::get('/pemasukan', [PemasukanController::class, 'index']);

Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
