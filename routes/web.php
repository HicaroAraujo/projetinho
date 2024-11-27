<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\DonoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('donos', [DonoController::class, 'index']);
Route::get('donos/create', [DonoController::class, 'create']);
Route::post('donos', [DonoController::class, 'store']);
Route::get('donos/{id}/edit', [DonoController::class, 'edit']);
Route::put('donos/{id}', [DonoController::class, 'update']);
Route::delete('donos/{id}', [DonoController::class, 'destroy']);

Route::get('carros', [CarroController::class, 'index']);
Route::get('carros/create', [CarroController::class, 'create']);
Route::post('carros', [CarroController::class, 'store']);
Route::get('carros/{id}/edit', [CarroController::class, 'edit']);
Route::put('carros/{id}', [CarroController::class, 'update']);
Route::delete('carros/{id}', [CarroController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
