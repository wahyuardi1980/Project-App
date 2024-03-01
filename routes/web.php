<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboard;
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

// Route::get('/', function () {
//     return view('home');
// });


// halaman utama saat diakses route
Route::get('/', [mainController::class, 'home'])->name('/');
Route::get('/product', [mainController::class, 'product'])->name('/product');
Route::get('/produk/{id}', [mainController::class, 'show'])->name('produk.show');
Route::get('/produk', [mainController::class, 'search'])->name('produk.search');

// halaman dashboard admin only route menggunakan resource
// Route::get('/admin/dashboard_admin', [dashboard::class, 'index'])->name('/admin/dashboard_admin');
// Route::get('/admin/input_data', [dashboard::class, 'create'])->name('/admin/input_data');

Route::resource('admin', dashboard::class)->middleware('isLogin');


// login and logout route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
