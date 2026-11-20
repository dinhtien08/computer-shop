<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');
    Route::post('login', [AuthController::class, 'login'])
    ->middleware('throttle:5, 1')
    ->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.submit');
});
Route::middleware('auth')->group(function () {
    Route::view('/', 'home')
    ->middleware('role:customer')
    ->name('home');
    Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {
        Route::view('/', 'admin.dashboard')->name('dashboard');
        Route::resource('categories', CategoryController::class);
    });
    Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');
});
