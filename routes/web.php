<?php


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')->group( function () {
    //RUTEO DE REGISTRO - CLIENTES
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    //RUTEO PARA INICIO DE SESIÓN
    Route::get('/login', [SessionController::class, 'index'])->name('session.index');
    Route::post('/login', [SessionController::class, 'store'])->name('session.store');
});

Route::middleware(['auth', 'admin'])->group( function () {
    //VISTA PRINCIPAL DE ADMINISTRADOR
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    //CRUD CATEGORIAS - ADMINISTRADOR
    Route::resource('/category', CategoryController::class);
    //CRUD PRODUCTOS - ADMINISTRADOR
    Route::resource('/product', ProductController::class);
    //CRUD USUARIOS - ADMINISTRADOR
    Route::resource('/users', UserController::class);
    //LOGOUT
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
});

Route::middleware(['auth', 'client'])->group( function () {
    Route::get('/home', function () {return view('client.home');})->name('home');
    //LOGOUT
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
});
