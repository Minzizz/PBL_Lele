<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\KolamController;
use App\Http\Controllers\LeleController;


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