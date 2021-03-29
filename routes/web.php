<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/acesso',[App\Http\Controllers\LoginController::class, 'authenticate'])->name('_login_');
Route::get('/Biemvenido',[App\Http\Controllers\EjemploController::class, 'index'])->name('inicio');
Route::get('/Registrarusuario',[App\Http\Controllers\RegistroController::class, 'index'])->name('Registro');
Route::post('/Registrar',[App\Http\Controllers\RegistroController::class, 'create'])->name('_Registro_');