<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index'])->name('dashb.index');

Route::get('/form', [HomeController::class, 'form'])->name('dashb.form');
Route::get('/sukses', [HomeController::class, 'sukses'])->name('dashb.sukses');
Route::get('/review', [HomeController::class, 'review'])->name('dashb.review');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('dashb.gallery');
Route::get('/about', [HomeController::class, 'about'])->name('dashb.about');
Route::get('/product', [HomeController::class, 'product'])->name('dashb.product');

Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');
Route::resource('/order', OrderController::class);

Route::middleware('auth')->group(function () {
    Route::get('/welcome', [HomeController::class, 'welcome'])->name('dash.welcome');
    Route::resource('/galeri', GaleriController::class);
    Route::resource('/produk', ProdukController::class);
});
