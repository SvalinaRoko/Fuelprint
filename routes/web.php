<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoggedInController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/login', [WelcomeController::class, 'showLogin'])->name('show.login');
Route::get('/register', [WelcomeController::class, 'showRegister'])->name('show.register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', [LoggedInController::class, 'showMain'])->name('show.main');
