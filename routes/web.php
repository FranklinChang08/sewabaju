<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);