<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/transaksi', TransaksiController::class);
// rute resource secara otomatis memanggil semua method yang ada di TransaksiController