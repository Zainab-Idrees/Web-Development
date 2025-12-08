<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

Route::get('/register', [formController::class,'showRegister'])->name('register');
Route::get('/login', [formController::class,'showLogin'])->name('login');
Route::get('/welcome', [formController::class,'showWelcome']);
// Route::get('/dashboard', [formController::class,'showDashboard']);
// Route::get('/users', [formController::class,'showUsers']);
// Route::get('/update-password', [formController::class,'showUpdatePassword']);
