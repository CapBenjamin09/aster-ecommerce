<?php


use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
//LOGOUT
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //CRUD CATEGORIAS - ADMINISTRADOR
    Route::resource('/category', CategoryController::class);
    //CRUD PRODUCTOS - ADMINISTRADOR
    Route::resource('/product', ProductController::class);
    //CRUD USUARIOS - ADMINISTRADOR
    Route::resource('/users', UserController::class);
    //INDEX CLIENTES - ADMINISTRADOR
    Route::get('/clients', [ClientController::class, 'index'])->name('client.index');
});

Route::middleware(['auth', 'client'])->group( function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/{category}/category', [HomeController::class, 'showCategory'])->name('home.category');
    Route::get('/home/{product}/product', [HomeController::class, 'showProduct'])->name('home.product');
});

require __DIR__.'/auth.php';
