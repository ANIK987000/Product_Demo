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

Route::get('/home',[ProductController::class,'home'])->name('main.home');
Route::get('/product_list',[ProductController::class,'productList'])->name('others.form.productList');
Route::get('/form',[ProductController::class,'addProduct'])->name('others.form.addProduct');
Route::post('/form',[ProductController::class,'addProductPost'])->name('others.form.addProductPost');
Route::get('/product_details',[ProductController::class,'productDetails'])->name('others.form.productDetails');
