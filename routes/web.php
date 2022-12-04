<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class , 'home'])->name('home');

Route::get('/nuovo/annuncio', [ProductController::class, 'createProduct'])->middleware('auth')->name('products.create');

Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/dettaglio/annuncio/{product}', [ProductController::class, 'showProduct'])->name('products.show');
Route::get('/annunci', [ProductController::class, 'indexProduct'])->name('products.index');