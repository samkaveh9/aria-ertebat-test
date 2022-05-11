<?php

use Illuminate\Support\Facades\Route;


// change directory if not exist create it. HOS QA

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group([], function (){
    Route::get('/', [\App\Http\Controllers\Main\MainController::class, 'index'])->name('home');
    Route::get('dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);

    Route::get('products/{product}/single', [\App\Http\Controllers\Main\MainController::class, 'single'])->name('product.single');
    Route::get('dashboard/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products.all');

});

