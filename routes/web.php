<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Halaman Kasir
Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');

// Halaman Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');



Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
