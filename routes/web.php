<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/transaksi', TransaksiController::class)->except([
	'destroy', 'show'
]);
// rute resource secara otomatis memanggil semua method yang ada di TransaksiController
Route::get('/transaksi/hapus/{id}', [TransaksiController::class, 'destroy']);
Route::get('/transaksi/detail/{id}', [TransaksiController::class, 'show']);