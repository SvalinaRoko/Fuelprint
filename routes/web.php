<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/login', [WelcomeController::class, 'login'])->name('login');
Route::get('/register', [WelcomeController::class, 'register'])->name('register');
