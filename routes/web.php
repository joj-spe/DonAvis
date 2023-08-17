<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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


//Travailler ici , ça veut dire qu'on doit acceder à ces paes si et seulement si on se connecte
Route::middleware(['auth' ,'verified'])->group(function () {

    Route::get('/home', function () {
        if(Auth::user()->role == 1){  return redirect()->route('admin.home'); }
        if(Auth::user()->role == 2){  return redirect()->route('user.home'); }
        if(Auth::user()->role == 3){  return redirect()->route('organisation.home'); }
    })->name('home');

    //Pour les liens de l'admin
    Route::prefix('admin')->group(function () {

        Route::get('/home', function () {
            return view('admin.dashboard');
        })->name('admin.home');

    });

    //Pour les liens de l'ornaisation
    Route::prefix('organisation')->group(function () {

        Route::get('/home', function () {
            return view('admin.dashboard');
        })->name('organisation.home');

    });

    //Pour les liens des utilisateurs
    Route::prefix('users')->group(function () {

        Route::get('/home', function () {
            return view('admin.dashboard');
        })->name('user.home');

    });

});



