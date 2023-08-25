<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalaController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas protegidas con autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/salas', [SalaController::class, 'index'])->name('salas.index');
    Route::get('/salas/{sala}', [SalaController::class, 'showRegistros'])->name('salas.showRegistros');
});

// Resto de tus rutas o rutas adicionales si es necesario
