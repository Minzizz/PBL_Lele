<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\KolamController;
use App\Http\Controllers\LeleController;
use App\Http\Controllers\KategoriLeleController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\AkuntanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;




/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');

Route::get('/masuk', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])
    ->name('register.process');

Route::get('/product', [ProductController::class, 'index'])
    ->name('product');

Route::get('/order/{id}', [OrderController::class, 'create'])
    ->name('order.create');

Route::post('/order/store', [OrderController::class, 'store'])
    ->name('order.store');

Route::get('/akuntan', function () {
    return view('akuntan');
})->name('akuntan');

Route::get('/monitoring', [MonitoringController::class, 'index'])
    ->name('monitoring.index');
Route::post('/monitoring/store', [MonitoringController::class, 'store'])
    ->name('monitoring.store');
Route::put('/monitoring/update/{id}', [MonitoringController::class, 'update'])
    ->name('monitoring.update');
Route::delete('/monitoring/delete/{id}', [MonitoringController::class, 'destroy'])
    ->name('monitoring.destroy');

Route::get('/petugas', [PetugasController::class, 'index'])
    ->name('petugas.index');

Route::get('/monitoring', [MonitoringController::class, 'index'])
    ->name('monitoring.index');

Route::get('/kolam', [KolamController::class, 'index'])
    ->name('kolam.index');

Route::get('/lele', [LeleController::class, 'index'])
    ->name('lele.index');

Route::resource('kolam', KolamController::class);
Route::resource('lele', KategoriLeleController::class);


Route::get('/akuntan', [AkuntanController::class, 'index'])
    ->name('akuntan');

Route::resource('users', UserController::class);

//pengeluaran//
Route::get('/pengeluaran', [PengeluaranController::class, 'index'])
    ->name('pengeluaran.index');
Route::post('/pengeluaran/store', [PengeluaranController::class, 'store'])
    ->name('pengeluaran.store');
Route::get('/pengeluaran/edit/{id}', [PengeluaranController::class, 'edit'])
    ->name('pengeluaran.edit');
Route::put('/pengeluaran/update/{id}', [PengeluaranController::class, 'update'])
    ->name('pengeluaran.update');
Route::delete('/pengeluaran/delete/{id}', [PengeluaranController::class, 'destroy'])
    ->name('pengeluaran.destroy');

//penjualan//
Route::resource('pesanan', PesananController::class);
Route::get('/penjualan', [PenjualanController::class, 'index'])
    ->name('penjualan.index');
Route::post('/penjualan/store', [PenjualanController::class, 'store'])
    ->name('penjualan.store');    

//admin//


Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

