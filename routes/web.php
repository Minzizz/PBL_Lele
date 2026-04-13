<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;

Route::get('/', function () {
    return view('welcome');
});

// Route Resource untuk Monitoring Kolam
Route::resource('monitoring', MonitoringController::class);