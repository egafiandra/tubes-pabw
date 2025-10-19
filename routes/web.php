<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/kasir', function () {
    return view('kasir.index');
});

Route::get('/pembayaran', function () {
    return view('pembayaran.index');

});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
