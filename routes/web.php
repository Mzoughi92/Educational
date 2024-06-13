<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'showRegistrationForm'])->name('home'); 
Route::get('register', [HomeController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [HomeController::class, 'register'])->name('register.submit');