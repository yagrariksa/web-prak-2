<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('client.home');
Route::get('/shop',[ShopController::class,'shop'])->name('client.shop');
Route::get('/shop/{id}',[ShopController::class,'show'])->name('shop.product');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('client.login');
    Route::post('/login', [AuthController::class, 'auth'])->name('client.login');
    Route::get('/register', [AuthController::class, 'register'])->name('client.register');
    Route::post('/register', [AuthController::class, 'store'])->name('client.register');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('client.logout');
    Route::get('/profile/{id}',[AuthController::class, 'profile'])->name('client.profile');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('cart/tambah/{id}', [CartController::class, 'tambah'])->name('cart.tambah');
    Route::get('cart/hapus/{id}', [CartController::class, 'hapus'])->name('cart.hapus');
    Route::post('checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    Route::prefix('transaksi')->group(function () {
        Route::get('/', [CartController::class, 'listtrans'])->name('transaksi.list');
        Route::get('/{id}', [CartController::class, 'deatiltrans'])->name('transaksi.detail');
    });
});
