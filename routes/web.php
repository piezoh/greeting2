<?php

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

Route::get('/comments/morning', [App\Http\Controllers\MessageController::class, 'morning']);

Route::get('/comments/afternoon', [App\Http\Controllers\MessageController::class, 'afternoon']);

Route::get('/comments/evening', [App\Http\Controllers\MessageController::class, 'evening']);

Route::get('/comments/night', [App\Http\Controllers\MessageController::class, 'night']);

Route::get('/comments/freeword/{wrd}', [App\Http\Controllers\MessageController::class, 'freeword']);

Route::get('/comments/random', [App\Http\Controllers\MessageController::class, 'random']);
