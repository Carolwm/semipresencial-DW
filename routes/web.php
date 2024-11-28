<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pokemon', [PokemonController::class, 'index']);
Route::get('pokemon/create', [PokemonController::class, 'create']);
Route::post('pokemon', [PokemonController::class, 'store']);
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemon/{id}', [PokemonController::class, 'update']);
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);

Route::get('coaches', [CoachController::class, 'index'])->middleware(['auth', 'verified'])->name('index-pokemon');
Route::get('coaches/create', [CoachController::class, 'create'])->middleware(['auth', 'verified'])->name('create-pokemon');
Route::post('coaches', [CoachController::class, 'store'])->middleware(['auth', 'verified'])->name('store-pokemon');
Route::get('coaches/{id}/edit', [CoachController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-pokemon');
Route::put('coaches/{id}', [CoachController::class, 'update'])->middleware(['auth', 'verified'])->name('update-pokemon');
Route::delete('coaches/{id}', [CoachController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-pokemon');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
