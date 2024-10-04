<?php

use App\Http\Controllers\ContohController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/pertemuan2', [ContohController::class, 'TampilContoh']);
