<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\JentransaksiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TukarpromoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RiwayattranController;

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
    return view('dashboard');
})->name( 'dashboard');

// Route::get('/konsumen', function () {
//     return view('konsumen');
// })->name( 'konsumen');

Route::resource('/konsumen', KonsumenController::class);  
Route::get('/pdf-konsumen', [KonsumenController::class, 'exportpdf'])->name('pdfkonsumen');

// Route::get('/Barang', function () {
//     return view('barang');
// })->name( 'barang');

Route::resource('/Barang', BarangController::class); 
Route::get('/pdf-barang', [BarangController::class, 'exportpdf'])->name('pdfbarang');

// Route::get('/Distributor', function () {
//     return view('distributor');
// })->name( 'distributor');

Route::resource('/Distributor', DistributorController::class);
Route::get('/pdf-distributor', [DistributorController::class, 'exportpdf'])->name('pdfdistributor');

// Route::get('/Transaksi', function () {
//     return view('transaksi');
// })->name( 'transaksi');

Route::resource('/Transaksi', TransaksiController::class);
Route::get('/pdf-transaksi', [TransaksiController::class, 'exportpdf'])->name('pdftransaksi');

Route::resource('/RiwayatTran', RiwayattranController::class);

// Route::get('/pdf-distributor', [DistributorController::class, 'exportpdf'])->name('pdfdistributor');

// Route::get('/JenisTransaksi', function () {
//     return view('JenTransaksi');
// })->name( 'JenTransaksi');

Route::resource('/JenisTransaksi', JentransaksiController::class);

// Route::get('/Pelanggan', function () {
//     return view('/Customer Service/pelanggan');
// })->name( 'pelanggan');

// Route ::get('/Pelanggan',[pelanggancon::class,'tampil'])->name('pelanggan');
Route::resource('/Pelanggan', PelangganController::class);
Route::get('/pdf-pelanggan', [PelangganController::class, 'exportpdf'])->name('pdfpelanggan');

// Route::get('/Promo', function () {
//     return view('/Customer Service/promo');
// })->name( 'promo');

Route::resource('/Promo', PromoController::class);

Route::resource('/TukarPromo', TukarpromoController::class);

// Route::get('/Review', function () {
//     return view('/Customer Service/review');
// })->name( 'review');

Route::resource('/Review', ReviewController::class);
