<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;

Route::get('/', [TransaksiController::class, 'index']);
// rute resource secara otomatis memanggil semua method yang ada di TransaksiController
Route::get('/transaksi/create', [TransaksiController::class, 'create']);
Route::post('/transaksi/transaksiBaru', [TransaksiController::class, 'store']);
Route::get('/transaksi/hapus/{id}', [TransaksiController::class, 'destroy']);
Route::get('/transaksi/detail/{id}', [TransaksiController::class, 'show']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit']);
Route::post('/transaksi/update/{id}', [TransaksiController::class, 'update']);
Route::get('/transaksi/search', [TransaksiController::class, 'cari']);