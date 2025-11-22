<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
// Product Routes base on resources controller
Route::resource('products',ProductController::class);   

// now we add authentication routes
// login routes
Route::get('login',[SignupController::class,'ShowLoginForm'])->name('login.form');
Route::post('login',[SignupController::class,'login'])->name('login.submit');

// signup routes
Route::get('signup',[SignupController::class,'ShowSignupForm'])->name(('signup.form'));
Route::post('signup',[SignupController::class,'register'])->name('signup.submit');

// logout route
Route::post('logout',[SignupController::class,'logout'])->name('logout');