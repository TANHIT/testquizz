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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class ,'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class ,'showLoginForm1'])->name('register');
Route::get('/youtube', [AuthController::class ,'showLoginForm2'])->name('youtube');
// routes/web.php
Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'AuthController@register');
Route::get('/login', [AuthController::class ,'showLoginForm'])->name('login');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout')->name('logout');
// Thêm các routes xác nhận email và reset password
