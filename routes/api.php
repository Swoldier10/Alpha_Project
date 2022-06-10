<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('product/store/{name}/{type}', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::post('order/store/{customer_email}/{product_name}/{quantity}', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::post('product/existence/{name}', [\App\Http\Controllers\ProductController::class, 'check_product_existence'])->name('product.existence');
Route::post('product/quantity/{name}/{quantity}', [\App\Http\Controllers\ProductController::class, 'check_product_quantity'])->name('product.quantity');
Route::post('product/undo/quantity/{name}/{quantity}', [\App\Http\Controllers\ProductController::class, 'product_undo_quantity'])->name('product.undo.quantity');
Route::post('product/quantity/increase/{no_hives}/{type}', [\App\Http\Controllers\ProductController::class, 'increase_quantity'])->name('product.quantity.increase');
Route::post('store/customer/{name}/{email}/{address}', [\App\Http\Controllers\CustomerController::class, 'store'])->name('store.customer');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
