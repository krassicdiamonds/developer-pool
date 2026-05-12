<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DeveloperController::class, 'showAll']);

Route::get('/add', [DeveloperController::class, 'addNew']);