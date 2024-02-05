<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
    return view('home');
});
// PUBLIC SIDE
Route::get('/login', [UserController::class, 'show_login']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

// USER SIDE
Route::get('/profile', [UserController::class, 'user_profile']);

// ADMIN SIDE
Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard']);

// SUPERADMIN SIDE
Route::get('/admin/dashboard', [SuperAdminController::class, 'superadmin_dashboard']);

Route::get('/product', [ProductController::class, 'products']);
Route::get('/register', [UserController::class, 'show_register']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/register/admin', [SuperAdminController::class, 'show_register_admin']);
Route::post('/register/admin', [SuperAdminController::class, 'register_admin']);
// Route::get('/register/admin', [SuperAdminController::class, 'show_register_admin']);
//Route::post('/register/admin', [SuperAdminController::class, 'register_admin']);
