<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\programaController;
use App\Http\Controllers\FichaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//pdf
Route::get('programas/pdf', [ProgramaController::class, 'pdf'])->name('programas.pdf');


// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/', [AuthController::class, 'index']);

//welcome 
Route::get('/welcome', function() {
    return view('welcome');
})->name('welcome');




//programa
Route::get('/programas/pdf', [programaController::class, 'generarPDF'])->name('programas.pdf');
Route::get('/programas', [ProgramaController::class, 'index'])->name('programas.index'); // Mostrar lista de programas
Route::get('/programas/create', [ProgramaController::class, 'create'])->name('programas.create'); // Formulario de creación
Route::post('/programas', [ProgramaController::class, 'store'])->name('programas.store'); // Guardar nuevo programa
Route::get('/programas/{id}', [ProgramaController::class, 'show'])->name('programas.show'); // Mostrar programa específico
Route::get('/programas/{id}/edit', [ProgramaController::class, 'edit'])->name('programas.edit'); // Formulario de edición
Route::put('/programas/{id}', [ProgramaController::class, 'update'])->name('programas.update'); // Actualizar programa
Route::delete('/programas/{id}', [ProgramaController::class, 'destroy'])->name('programas.destroy'); // Eliminar programa

//ficha
Route::get('/fichas/pdf', [FichaController::class, 'generarPDF'])->name('fichas.pdf'); // Asegúrate de que esta línea esté aquí.
Route::get('/fichas', [FichaController::class, 'index'])->name('fichas.index'); // Mostrar lista de fichas
Route::get('/fichas/create', [FichaController::class, 'create'])->name('fichas.create'); // Formulario de creación
Route::post('/fichas', [FichaController::class, 'store'])->name('fichas.store'); // Guardar nueva ficha
Route::get('/fichas/{id}', [FichaController::class, 'show'])->name('fichas.show'); // Mostrar ficha específica
Route::get('/fichas/{id}/edit', [FichaController::class, 'edit'])->name('fichas.edit'); // Formulario de edición
Route::put('/fichas/{id}', [FichaController::class, 'update'])->name('fichas.update'); // Actualizar ficha
Route::delete('/fichas/{id}', [FichaController::class, 'destroy'])->name('fichas.destroy'); // Eliminar ficha