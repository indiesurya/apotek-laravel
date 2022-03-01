<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputDataController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\DistributorController;
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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dataobat', [ObatController::class, 'index']);
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/pemasukan', [PemasukanController::class, 'index']);
    Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
    Route::get('/distributor', [DistributorController::class, 'index']);
    Route::get('/input-data-obat', [InputDataController::class, 'obat']);
    Route::post('/input-data-obat', [InputDataController::class, 'insertobat']);
    Route::get('/input-kategori', [InputDataController::class, 'kategori']);
    Route::post('/input-kategori', [InputDataController::class, 'insertkategori']);
    Route::get('/input-distributor', [InputDataController::class, 'distributor']);
    Route::post('/input-distributor', [InputDataController::class, 'insertdistributor']);
    Route::get('/input-pengeluaran', [InputDataController::class, 'pengeluaran']);
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class,'index']);
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
});
