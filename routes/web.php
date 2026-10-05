<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'dashboard']);
Route::get('/barang',[BarangController::class, 'index']);
Route::get('/barang/add',[BarangController::class, 'store']);
Route::get('/barang/add',[BarangController::class, 'store_view'])->name('barang.tambah');
Route::post('/barang/add',[BarangController::class, 'store'])->name('barang.kirim');
Route::get('/barang/update/{id}',[BarangController::class, 'update_view'])->name('barang.edit');
Route::put('/barang/update/{id}',[BarangController::class, 'update'])->name('barang.update');
Route::get('/barang/delete/{id}',[BarangController::class, 'destroy'])->name('barang.delete');
Route::get('/siswa',[SiswaController::class, 'index']);
Route::get('/siswa/add',[SiswaController::class, 'store']);
Route::get('/siswa/add', [SiswaController::class, 'store_view'])->name('siswa.tambah');
Route::post('/siswa/add', [SiswaController::class, 'store'])->name('siswa.kirim');
Route::get('/siswa/update/{id}', [SiswaController::class, 'update_view'])->name('siswa.edit');
Route::put('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
Route::get('/buku',[BukuController::class, 'index']);
Route::get('/buku/add',[BukuController::class, 'store']);
Route::get('/buku/add',[BukuController::class, 'store_view'])->name('buku.tambah');
Route::post('/buku/add',[BukuController::class, 'store'])->name('buku.kirim');
Route::get('/buku/update/{id}',[BukuController::class, 'update_view'])->name('buku.edit');
Route::put('/buku/update/{id}',[BukuController::class, 'update'])->name('buku.update');
Route::get('/buku/delete/{id}',[BukuController::class, 'destroy'])->name('buku.delete');
Route::resource('pegawai', PegawaiController::class);
Route::get('/laporan', [LaporanController::class, 'index']);