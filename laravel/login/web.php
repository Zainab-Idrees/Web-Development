<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('registration');
});

Route::get('/register', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/update-password', function () {
    return view('update-password');
});
Route::get('/users', function () {
    // Fetch all users from database
    $users = User::all();
    return view('users', compact('users'));
});

