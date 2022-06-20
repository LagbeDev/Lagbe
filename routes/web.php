<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// external requests
Route::get('/login', [AuthController::class, 'login'])->middleware('auth.check');
Route::get('/register', [AuthController::class, 'register'])->middleware('auth.check');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth.check');

//internal requests
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');

// session requests
Route::get('/logout', [AuthController::class, 'logout']);