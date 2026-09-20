<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'dashboard']);
Route::get('/barang/add',[BarangController::class, 'store']);
Route::get('/barang/update/{id}',[BarangController::class, 'update_view'])->name('barang.edit');
Route::put('/barang/update/{id}',[BarangController::class, 'update'])->name('barang.update');
Route::get('/barang/delete/{id}',[BarangController::class, 'destroy'])->name('barang.delete');
Route::get('/barang',[BarangController::class, 'index']);
Route::get('/barang/add',[BarangController::class, 'store_view'])->name('barang.tambah');
Route::post('/barang/add',[BarangController::class, 'store'])->name('barang.kirim');