
<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Formulario donde el usuario pone su email para que le enviemos el email de resetear la contraseña
Route::get('/formulario-recuperar-contrasenia', [AuthController::class, 'formularioRecuperarContrasenia'])->name('formulario-recuperar-contrasenia');

// Función que se ejecuta al enviar el formulario y que enviará el email al usuario
Route::post('/enviar-recuperar-contrasenia', [AuthController::class, 'enviarRecuperarContrasenia'])->name('enviar-recuperacion');

// Formulario donde se modificará la contraseña
Route::get('/reiniciar-contrasenia/{token}', [AuthController::class, 'formularioActualizacion'])->name('formulario-actualizar-contrasenia');

// Función que actualiza la contraseña del usuario
Route::post('/actualizar-contrasenia', [AuthController::class, 'actualizarContrasenia'])->name('actualizar-contrasenia');

