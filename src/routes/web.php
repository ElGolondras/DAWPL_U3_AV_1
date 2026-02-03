<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DispositivoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Listado principal
Route::get('/dispositivos', [DispositivoController::class, 'index'])->name('dispositivos.index');

// Crear nuevo dispositivo
Route::get('/dispositivos/altas', [DispositivoController::class, 'create'])->name('dispositivos.create');
Route::post('/dispositivos', [DispositivoController::class, 'store'])->name('dispositivos.store');

// Editar dispositivo
Route::get('/dispositivos/{dispositivo}/editar', [DispositivoController::class, 'edit'])->name('dispositivos.edit');
Route::put('/dispositivos/{dispositivo}', [DispositivoController::class, 'update'])->name('dispositivos.update');

// Eliminar dispositivo
// Esta muestra tu vista de confirmación
Route::get('/dispositivos/{dispositivo}/eliminar', [DispositivoController::class, 'confirmDelete'])->name('dispositivos.confirm');
// Esta ejecuta el borrado real
Route::delete('/dispositivos/{dispositivo}', [DispositivoController::class, 'destroy'])->name('dispositivos.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
