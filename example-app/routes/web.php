<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('Product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('Product.create');
Route::post('/product', [ProductController::class, 'store'])->name('Product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('Product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('Product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('Product.destroy');