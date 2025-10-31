<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/category', CategoryController::class);
Route::resource('/item', ItemController::class);
Route::resource('/transaction', TransactionController::class);