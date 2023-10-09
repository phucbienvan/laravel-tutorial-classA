<?php

use App\Http\Controllers\UserController;
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

Route::get('/123', function () {
    return "hello world";
});

Route::get('/me', [UserController::class, 'index']);

Route::get('/me/{id}', [UserController::class, 'show'])->name('show.me');

// Route::group(['prefix' => 'me'], function () {
//     Route::get('', [UserController::class, 'index']);
//     Route::get('{id}', [UserController::class, 'show'])->name('show.me');
// });
