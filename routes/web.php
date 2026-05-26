<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

// Belongs to developer model
Route::get('/', [DeveloperController::class, 'showAll'])->name('developers.index');
Route::get('/add', [DeveloperController::class, 'addNew'])->name('developers.add');
Route::get('/show/{id}', [DeveloperController::class, 'showDetails'])->name('developers.show');
Route::post('/', [DeveloperController::class, 'store'])->name('developers.store');
Route::delete('/destroy/{id}', [DeveloperController::class, 'destroy'])->name('developers.destroy');