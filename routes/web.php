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


Route::get('/', function () {
    return redirect()->route('home');
})->name('welcome');


//Travailler ici , ça veut dire qu'on doit acceder à ces paes si et seulement si on se connecte
Route::middleware(['auth' ,'verified'])->group(function () {

    Route::get('/home', function () {
        if(Auth::user()->role == 1){  return redirect()->route('admin.home'); }
        if(Auth::user()->role == 2){  return redirect()->route('user.home'); }
        if(Auth::user()->role == 3){  return redirect()->route('organisateur.home'); }
    })->name('home');

    //Pour les liens de l'admin
    Route::prefix('admin')->group(function () {

        Route::get('/home', function () {
            return view('admin.dashboard');
        })->name('admin.home');

        Route::get('list-user', function ($id) {

        })->name('admin.user_list');

        Route::get('list-oran', [COntrol::class , 'funciont'])->name('admin.organisateut_list');

    });

    //Pour les liens de l'organisation
    Route::prefix('organisateur')->group(function () {

        Route::get('/home', function () {
            return view('starter');
        })->name('organisateur.home');

        Route::get('/profilOrg', function () {
            return view('orgView.profilOrganisateur');
        })->name('profilOrganisateur');

    });

    //Pour les liens des utilisateurs
    Route::prefix('users')->group(function () {

        Route::get('/home', function () {
            return view('starter');
        })->name('user.home');

    });

});




