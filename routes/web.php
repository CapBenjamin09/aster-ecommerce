<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', function () {
    return view('auth.clients.register');
});

//Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
//Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::resource('/category', CategoryController::class);

Route::resource('/product', ProductController::class);
