<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/product', [ProductController::class, 'index']);

Route::get('/checkout/{id}', [ProductController::class, 'checkout'])->name('checkout');

Route::get('/order/{id}', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');