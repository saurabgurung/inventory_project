<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories',[\App\Http\Controllers\CategoryController::class,'create'])->name('categories');
Route::post('/categories-store',[\App\Http\Controllers\CategoryController::class,'store'])->name('categories.store');
Route::get('/suppliers',[\App\Http\Controllers\CategoryController::class,'create'])->name('categories');
