<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

//registration
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/edit-profile', [ProfileController::class, 'update'])->name('profile.update');



Route::get('/edit-password', [PasswordController::class, 'edit'])->name('password.edit');
Route::post('/edit-password', [PasswordController::class, 'update'])->name('password.update');


Route::get('/users', [UserController::class, 'index'])->name('user.list');