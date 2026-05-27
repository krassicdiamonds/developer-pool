<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

// Belongs to user model
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');

});

// Belongs to developer model
Route::middleware('auth')->controller(DeveloperController::class)->group(function(){
    Route::get('/', 'showAll')->name('developers.index');
    Route::get('/add', 'addNew')->name('developers.add');
    Route::get('/show/{id}', 'showDetails')->name('developers.show');
    Route::post('/', 'store')->name('developers.store');
    Route::delete('/destroy/{id}', 'destroy')->name('developers.destroy');
});