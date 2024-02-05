<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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
Route::get('/product', [ProductController::class, 'products']);

// USER SIDE
Route::get('/profile', [UserController::class, 'user_profile']);
Route::get('/register', [UserController::class, 'show_register']);
Route::post('/register', [UserController::class, 'register']);

// ADMIN SIDE
Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard']);

// SUPERADMIN SIDE
Route::get('/admin/dashboard', [SuperAdminController::class, 'superadmin_dashboard']);
Route::get('/register/admin', [SuperAdminController::class, 'show_register_admin']);
Route::post('/register/admin', [SuperAdminController::class, 'register_admin']);

// SUPERADMIN AND ADMIN
Route::get('/admin/products/create', [ProductController::class, 'add_product_form']);
Route::post('/admin/products', [ProductController::class, 'add_product']);
Route::get('/admin/products', [SuperAdminController::class, 'admin_show_products']);

// Route::get('/profile/upload', [UserController::class, 'upload_profile_picture_form']);
//Route::post('/profile/upload', [UserController::class, 'upload_profile_picture']);
