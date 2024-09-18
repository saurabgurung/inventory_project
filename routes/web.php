<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\PersonController;
use \App\Http\controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/brands',[BrandController::class,'create'])->name('brands');
Route::post('/brands-store',[BrandController::class,'store'])->name('brands.store');
Route::get('/brands-index',[BrandController::class,'index'])->name('brands.index');
Route::get('brands-view/{id}',[BrandController::class,'show'])->name('brands.show');
Route::put('brands-update/{id}',[BrandController::class,'update'])->name('brands.update');
Route::delete('/brands-destroy/{id}',[BrandController::class,'destroy'])->name('brands.destroy');


Route::get('/categories',[CategoryController::class,'create'])->name('categories');
Route::post('/categories-store',[CategoryController::class,'store'])->name('categories.store');
Route::get('/categories-index',[CategoryController::class,'index'])->name('categories.index');
Route::get('categories-view/{id}',[CategoryController::class,'show'])->name('categories.show');
Route::put('categories-update/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories-destroy/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');


Route::get('/person',[PersonController::class,'create'])->name('person');
Route::post('/person-store',[PersonController::class,'store'])->name('person.store');
Route::get('/person-index',[PersonController::class,'index'])->name('person.index');


Route::get('/products',[ProductController::class,'create'])->name('products');
Route::post('/products-store',[ProductController::class,'store'])->name('products.store');
Route::get('/products-index',[ProductController::class,'index'])->name('products.index');
Route::get('/products-view/{id}',[ProductController::class,'show'])->name('products.show');
Route::put('/products-update/{id}',[ProductController::class,'update'])->name('products.update');
Route::delete('/products-destroy',[ProductController::class,'destroy'])->name('products.destroy');


Route::get('/transactions',[\App\Http\Controllers\TransactionController::class,'create'])->name('transactions');
Route::post('/transactions-store',[\App\Http\Controllers\TransactionController::class,'store'])->name('transactions.store');
Route::get('/transactions-index',[\App\Http\Controllers\TransactionController::class,'index'])->name('transactions.index');


Route::get('/orders',[\App\Http\Controllers\OrderController::class,'create'])->name('orders');
Route::post('/orders-store',[\App\Http\Controllers\OrderController::class,'store'])->name('orders.store');
Route::get('/orders-index',[\App\Http\Controllers\OrderController::class,'index'])->name('orders.index');


Route::get('/order_product',[\App\Http\Controllers\Order_ProductController::class,'create'])->name('order_product');
Route::post('/order_product-store',[\App\Http\Controllers\Order_ProductController::class,'store'])->name('order_product.store');
Route::get('/order_product-index',[\App\Http\Controllers\Order_ProductController::class,'index'])->name('order_product.index');



