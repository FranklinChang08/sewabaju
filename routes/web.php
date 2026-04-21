<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/gambar', function () {
    return view('gambar');
});

Route::get('/list-produk', [ListProdukController::class, 'listProduk']);