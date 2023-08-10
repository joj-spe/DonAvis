<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/font', function () {
    return view('font');
})->name('font');

Route::get('/', function () {
    return view('welcome');
})->name('acceuil')->middleware(['verified', 'auth']);

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('/home', function () {
    return view('welcome');
})->name('home')->middleware(['verified', 'auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');