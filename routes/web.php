<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('product/list', [ProductController::class, 'index'])->name('products.index');
Route::get('product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('product/store/guardar', [ProductController::class, 'store'])-> name('product.store');
Route::get('products/list',[ProductController::class,'index'])-> name('products.index');

Route::get('potsfind',[ProductController::class,'postfind']);