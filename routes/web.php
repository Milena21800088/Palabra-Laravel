<?php

use App\Http\Controllers\JugadorModelController;
use App\Http\Controllers\ListaPalabrasModelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('jugadores', [JugadorModelController::class, 'index'])->name('jugadores.index');  
Route::post('jugadores/add', [JugadorModelController::class, 'store'])->name('jugadores.store');

Route::get('palabras', [ListaPalabrasModelController::class, 'index'])->name('palabras.index');
Route::post('palabras/ingresar', [ListaPalabrasModelController::class, 'store'])->name('palabras.store');