<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::get('/tienda', [TiendaController::class, 'tienda'])->name('tienda');