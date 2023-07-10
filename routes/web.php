<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

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

Route::get('/home', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/users', [UserController::class, 'index']);

Route::post('/users', [UserController::class, 'store']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::get('/users/{user}/edit', [UserController::class, 'edit']);
