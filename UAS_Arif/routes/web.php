<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\NilaiController;

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


// Data siswa
Route::middleware(['auth:siswa'])->group(function () {
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
});

//Data Pelajaran
Route::middleware(['auth:siswa'])->group(function () {
    Route::get('/pelajaran', [PelajaranController::class, 'index'])->name('pelajaran.index');
});

//Data Pembayaran
Route::middleware(['auth:siswa'])->group(function () {
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
});

//Data Nilai
Route::middleware(['auth:siswa'])->group(function () {
    Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
});

