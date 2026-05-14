<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DeveloperController::class, 'showAll'])->name('developers.index');

Route::get('/add', [DeveloperController::class, 'addNew'])->name('developers.add');

Route::get('/show/{id}', [DeveloperController::class, 'showDetails'])->name('developers.show');