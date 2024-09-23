<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/', [AuthController::class, 'loginIndex']);
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/custom-login', [AuthController::class, 'loginAuth'])->name('custom.login');
Route::get('/register', [AuthController::class, 'registerIndex'])->name('register');
Route::post('/custom-registration', [AuthController::class, 'registerAuth'])->name('custom.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');