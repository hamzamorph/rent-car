<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CommController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommandController;

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

Route::get('/', [CarController::class,'index']);
Route::resource('/cars',CarController::class);
Route::post('/add/cars', [CarController::class,'store'])->name('cars.store');
Route::post('store', [CarController::class, 'store']);
Route::resource('/commands', CommandController::class);
Route::get('/commands/{id}/create', [CommandController::class, 'create'])->name('command.create');

Route::delete('/commands/{commandId}/{carId}/delete', [CommandController::class, 'deleteC'])->name('commands.delete');

Route::post('/send', [CommController::class, 'send'])->middleware('auth');
Route::get('/login', [UsersController::class,'login'])->name('users.login');
Route::post('/auth', [UsersController::class,'auth'])->name('users.auth');
Route::get('/logout', [UsersController::class,'login'])->name('users.logout');
Route::get('/register', [UsersController::class, 'register'])->name('users.register');
Route::post('/register', [UsersController::class, 'register']);
Route::get('/register', [UsersController::class, 'create'])->name('users.register');
Route::get('/user/{id}/profile', [UsersController::class, 'show'])->name('users.profile');
Route::get('/admin', [AdminsController::class, 'index'])->name('admins.index');
Route::get('/end', [UsersController::class, 'end']);


