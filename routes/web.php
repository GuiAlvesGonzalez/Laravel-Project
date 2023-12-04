<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
})->name('home');
Route::get('/Login', [AuthManager::class, 'Login'])->name('Login');
Route::post('/Login', [AuthManager::class, 'LoginPost'])->name('Login.post');
Route::get('/Registration', [AuthManager::class, 'Registration'])->name('Registration');
Route::post('/Registration', [AuthManager::class, 'RegistrationPost'])->name('Registration.post');
Route::get('/logout', [AuthManager::class, 'Logout'])->name('Logout');
