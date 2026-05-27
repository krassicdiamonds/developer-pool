<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

// Belongs to user model
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Belongs to developer model
Route::get('/', [DeveloperController::class, 'showAll'])->name('developers.index');
Route::get('/add', [DeveloperController::class, 'addNew'])->name('developers.add');
Route::get('/show/{id}', [DeveloperController::class, 'showDetails'])->name('developers.show');
Route::post('/', [DeveloperController::class, 'store'])->name('developers.store');
Route::delete('/destroy/{id}', [DeveloperController::class, 'destroy'])->name('developers.destroy');