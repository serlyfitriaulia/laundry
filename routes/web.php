<?php

use App\Http\Controllers\AntarJemputController;
use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::resource('layanan', LayananController::class);
    Route::resource('pesanan', PesananController::class);
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('detailpesanan', DetailPesananController::class);
    Route::resource('antarjemput', AntarJemputController::class);
    Route::resource('user', UserController::class);
    
    
});

