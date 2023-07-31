<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('destroy');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login_do', [UserController::class, 'login_do'])->name('login.do');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');




