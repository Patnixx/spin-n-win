<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

/*SECTION - Home Routes*/
Route::get('/', [HomeController::class, 'homeIndex']);
Route::get('/home', [HomeController::class, 'homeIndex'])->name('home');

/* SECTION - Profile Routes*/
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile-update-pass', [UserController::class, 'updateProfile'])->name('profile.updatepass');
Route::post('/profile-get-tkn', [UserController::class, 'addBalance'])->name('profile.get.tkn');
Route::post('/profile-lost-tkn', [UserController::class, 'withdrawBalance'])->name('profile.lost.tkn');


/* SECTION - Auth Routes */
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/custom-login', [AuthController::class, 'loginAuth'])->name('custom.login');
Route::get('/register', [AuthController::class, 'registerIndex'])->name('register');
Route::post('/custom-registration', [AuthController::class, 'registerAuth'])->name('custom.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/coinflip', [GameController::class, 'coinflip'])->name('coinflip');
Route::post('/coinflip-toss', [GameController::class, 'cf_toss'])->name('coinflip.toss');
/* SECTION - Games Routes */