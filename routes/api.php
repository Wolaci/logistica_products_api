<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::post('products_add', [App\Http\Controllers\ProductController::class, 'store'])->name('products');

Route::put('products_update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('products');

Route::delete('products_delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products');
