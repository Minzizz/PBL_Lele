<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PetugasController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/masuk', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/product', [ProductController::class, 'index'])
    ->name('product');

Route::get('/checkout/{id}', [ProductController::class, 'checkout'])
    ->name('checkout');

Route::get('/order/{id}', [OrderController::class, 'create'])
    ->name('order.create');

Route::post('/order/store', [OrderController::class, 'store'])
    ->name('order.store');

Route::get('/akuntan', function () {
    return view('akuntan');
})->name('akuntan');

Route::get('/petugas', [PetugasController::class, 'index']);