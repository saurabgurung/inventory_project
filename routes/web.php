<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories',[\App\Http\Controllers\CategoryController::class,'create'])->name('categories');
Route::post('/categories-store',[\App\Http\Controllers\CategoryController::class,'store'])->name('categories.store');
Route::get('/categories-index',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');
Route::put('/categories-update',[\App\Http\Controllers\CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories-destroy',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categories.destroy');


Route::get('/suppliers',[\App\Http\Controllers\SuppliersController::class,'create'])->name('suppliers');
Route::post('/suppliers-store',[\App\Http\Controllers\SuppliersController::class,'store'])->name('suppliers.store');
Route::get('/suppliers-index',[\App\Http\Controllers\SuppliersController::class,'index'])->name('suppliers.index');


Route::get('/person',[\App\Http\Controllers\PersonController::class,'create'])->name('person');
Route::post('/person-store',[\App\Http\Controllers\PersonController::class,'store'])->name('person.store');
Route::get('/person-index',[\App\Http\Controllers\PersonController::class,'index'])->name('person.index');


Route::get('/products',[\App\Http\Controllers\ProductController::class,'create'])->name('products');
Route::post('/products-store',[\App\Http\Controllers\ProductController::class,'store'])->name('products.store');
Route::get('/products-index',[\App\Http\Controllers\ProductController::class,'index'])->name('products.index');


Route::get('/transactions',[\App\Http\Controllers\TransactionController::class,'create'])->name('transactions');
Route::post('/transactions-store',[\App\Http\Controllers\TransactionController::class,'store'])->name('transactions.store');
Route::get('/transactions-index',[\App\Http\Controllers\TransactionController::class,'index'])->name('transactions.index');


Route::get('/orders',[\App\Http\Controllers\OrderController::class,'create'])->name('orders');
Route::post('/orders-store',[\App\Http\Controllers\OrderController::class,'store'])->name('orders.store');
Route::get('/orders-index',[\App\Http\Controllers\OrderController::class,'index'])->name('orders.index');


Route::get('/order_product',[\App\Http\Controllers\Order_ProductController::class,'create'])->name('order_product');
Route::post('/order_product-store',[\App\Http\Controllers\Order_ProductController::class,'store'])->name('order_product.store');
Route::get('/order_product-index',[\App\Http\Controllers\Order_ProductController::class,'index'])->name('order_product.index');



