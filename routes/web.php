<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/product-index', [ProductController::class, 'index']);
Route::get('/product-pdf/export', [ProductController::class, 'pdf']);
