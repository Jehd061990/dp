<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
use App\Http\Middleware\CheckSessionAdmin;
use App\Http\Middleware\CheckSessionSuperAdmin;
use App\Http\Middleware\CheckSessionUser;
use App\Http\Middleware\CheckSessionSuperAdminAndAdmin;

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
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/product', [ProductController::class, 'products']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/portfolio', [UserController::class, 'portfolio']);

// USER SIDE
Route::middleware(['checkSessionUser'])->group(function () {
    Route::get('/profile', [UserController::class, 'user_profile']);
    Route::post('/product', [OrderController::class, 'place_order']);
    Route::put('/profile/{id}', [UserController::class, 'edit_profile']);
    Route::get('/profile/edit/{id}', [UserController::class, 'edit_profile_form']);
    Route::get('/product/{storey_id}', [ProductController::class, 'index']);
    Route::get('/cart', [OrderController::class, 'show_cart'])->name('cart.show');
    Route::post('/cart/{product_id}', [OrderController::class, 'add_to_cart'])->name('add_to_cart');
    Route::post('/checkout', [OrderController::class, 'place_order']);
    Route::get('/checkout', [OrderController::class, 'view_orders']);
    Route::delete('/cart/delete/{id}', [OrderController::class, 'delete_cart'])->name('delete_cart');
});

// ADMIN SIDE
Route::middleware(['checkSessionAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard']);
});

// SUPERADMIN SIDE
Route::middleware(['checkSessionSuperAdmin'])->group(function () {
    Route::get('/admin/dashboard', [SuperAdminController::class, 'superadmin_dashboard']);
    Route::get('/register/admin', [SuperAdminController::class, 'show_register_admin']);
    Route::post('/admin/accounts', [SuperAdminController::class, 'register_admin']);
    Route::get('/admin/accounts', [SuperAdminController::class, 'register_admin_show']);
    Route::delete('/admin/accounts/{id}', [SuperAdminController::class, 'delete_admin']);
    Route::get('/admin/accounts/{id}', [SuperAdminController::class, 'show_admin']);
});

// SUPERADMIN AND ADMIN
Route::middleware(['checkSessionSuperAdminAndAdmin'])->group(function () {
    Route::get('/admin/products/create', [ProductController::class, 'add_product_form']);
    Route::post('/admin/products', [ProductController::class, 'add_product']);
    Route::get('/admin/products', [SuperAdminController::class, 'admin_show_products']);
    Route::delete('/admin/products/{id}', [SuperAdminController::class, 'delete_product']);
    Route::put('/admin/products/{id}', [ProductController::class, 'edit_product']);
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit_product_form']);
    Route::get('/admin/products/{id}', [ProductController::class, 'show_product']);
    Route::get('/admin/test', [ProductController::class, 'showStorey']);


    // Route::get('/admin/products', [ProductController::class, 'index']);
});
//saan dito yung route ng delee?