<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaxpayerController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/taxpayers', [TaxpayerController::class, 'index'])->name('taxpayers');
Route::post('/taxpayers', [TaxpayerController::class, 'store']);
Route::get('/taxpayers/add', [TaxpayerController::class, 'create'])->name('add');
Route::delete('/taxpayers/{taxpayer}', [TaxpayerController::class, 'destroy'])->name('taxpayers.destroy');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
