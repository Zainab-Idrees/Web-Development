<?php

use Illuminate\Support\Facades\Route;

// ----------------------
//  Registration Page
// ----------------------
Route::get('/register', function () {
    return view('layout.register');
});

// Registration Form Submit (POST)
Route::post('/register', function () {
    return "Registration Completed Successfully!";
});


// ----------------------
//  Login Page
// ----------------------
Route::get('/login', function () {
    return view('layout.login');
});

// Login Submit
Route::post('/login', function () {
    return "You are logged in!";
});


// ----------------------
//  Dashboard Page
// ----------------------
Route::get('/dashboard', function () {
    return view('layout.dashboard');
});


// ----------------------
//  User List Page
// ----------------------
Route::get('/users', function () {

    // Example dummy data
    $users = [
        ['id' => 1, 'name' => 'Sahiba', 'email' => 'sahiba@example.com'],
        ['id' => 2, 'name' => 'Ali', 'email' => 'ali@example.com'],
        ['id' => 3, 'name' => 'Fatima', 'email' => 'fatima@example.com'],
    ];

    return view('layout.userlist', compact('users'));
});


// ----------------------
//  Update Password Page
// ----------------------
Route::get('/update-password', function () {
    return view('layout.update-password');
});

// Update Password Submit
Route::post('/update-password', function () {
    return "Password Updated Successfully!";
});
