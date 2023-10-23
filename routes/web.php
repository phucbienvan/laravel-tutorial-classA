<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
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

Route::get('form-login', [AuthController::class, 'getFormLogin'])->name('get_form_login');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('form-register', [AuthController::class, 'getFormRegister'])->name('get_form_register');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::group(['prefix' => 'customers'], function () {
    Route::get('/create', [CustomerController::class, 'create']);
    Route::post('', [CustomerController::class, 'insert'])->name('customers.insert');
    Route::get('', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/{customer}', [CustomerController::class, 'show'])->name('customers.show');
    Route::get('/edit/{customer}', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('/update/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('delete/{customer}', [CustomerController::class, 'delete'])->name('customers.delete');
});
