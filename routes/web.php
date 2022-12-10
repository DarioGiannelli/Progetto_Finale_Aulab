<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;

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
//CREATA ROTTA REVISORE DARIO
Route::get('/revisor/home', [RevisorController::class , 'index'])->middleware('isRevisor')->name('revisor.index');

//Rotta accettazione
Route::patch('/accetta/annuncio/{product}',[RevisorController::class,'acceptProduct'])->middleware('isRevisor')->name('revisor.accept_product');
//Rotta rifiuto
Route::patch('/rifiuta/annuncio/{product}',[RevisorController::class,'rejectProduct'])->middleware('isRevisor')->name('revisor.reject_product');




Route::get('/nuovo/annuncio', [ProductController::class, 'createProduct'])->middleware('auth')->name('products.create');

Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/dettaglio/annuncio/{product}', [ProductController::class, 'showProduct'])->name('products.show');
Route::get('/annunci', [ProductController::class, 'indexProduct'])->name('products.index');


Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');


Route::get('/ricerca/annuncio', [PublicController::class, 'searchProducts'])->name('products.search');

Route::get('/products/dashboard',[ProductController::class, 'dashboard'])->name('products.dashboard');

Route::get('/products/{product}/edit',[ProductController::class, 'edit'])->name('products.edit');
