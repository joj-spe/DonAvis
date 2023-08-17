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
Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {  return view('welcome');  })
    ->name('home');

    /*Route::prefix('admin')->group(function () {
    });*/

});

Route::get('/home', function () {
    return view('includes.menu');
})->middleware(['auth', 'verified']);

Route::get('/organisateur', function () {
    return view('starter');
})->name('starter');

Route::get('/profilOrganisateur', function () {
    return view('orgView.profilOrganisateur');
})->name('profilOrganisateur');