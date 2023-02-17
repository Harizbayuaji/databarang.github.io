<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

// Route Landing Page
Route::get('/',[BarangController::class, 'landing_page'])->name('landing_page');

// Route Login
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginStore'])->name('loginStore');
// Route Register
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerStore',[AuthController::class, 'registerStore']);
// Route Logout
route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Home Ds
Route::get('home',[BarangController::class, 'home'])->name('home');
// Route Table Ds
Route::resource('index', BarangController::class);
Route::get('/index/hapus/{id}',[BarangController::class, 'delete']);

