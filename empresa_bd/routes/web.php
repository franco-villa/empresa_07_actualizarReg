<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::view('/', 'home')->name('home');

Route::get('personas', [PersonasController::class, 'index'])->name('personas.index');
Route::get('personas/crear', [PersonasController::class, 'create'])->name('personas.create');
Route::post('personas/store', [PersonasController::class, 'store'])->name('personas.store');

Route::get('personas/{id}', [PersonasController::class, 'show'])->name('personas.show');

Route::get('personas/{persona}/editar', [PersonasController::class, 'edit'])->name('personas.edit');
Route::patch('personas/{id}', [PersonasController::class, 'update'])->name('personas.update');

Route::view('contacto', 'contacto')->name('contacto');

