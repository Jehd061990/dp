<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;

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

Route::get('/product', [ProductController::class, 'products']);
Route::get('/register', [UserController::class, 'show_register']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/register/admin', [SuperAdminController::class, 'show_register_admin']);
Route::post('/register/admin', [SuperAdminController::class, 'register_admin']);
