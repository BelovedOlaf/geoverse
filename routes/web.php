<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Registration\RegistrationController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Admin

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/registration', [AdminController::class, 'users']);

Route::post('/custom-login', [AdminController::class, 'customLogin'])->name('login.custom');
Route::post('/custom-registration', [AdminController::class, 'customRegistration'])->name('register.custom');

Route::get('signout', [AdminController::class, 'signOut'])->name('signout');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/profile', [AdminController::class, 'profile']);


// 

Route::get('/', [HomeController::class, 'index']);

Route::get('/database', [DatabaseController::class, 'index']);

// registration page
Route::get('/volunteer-registration', [RegistrationController::class, 'volunteer']);
Route::post('/volunteer-registration', [RegistrationController::class, 'volunteer_register']);
Route::get('/driver-registration', [RegistrationController::class, 'driver']);
Route::post('/driver-registration', [RegistrationController::class, 'volunteer_register']);
Route::get('/organization-registration', [RegistrationController::class, 'organization']);
