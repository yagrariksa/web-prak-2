<?php

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

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\GamePublisherController;
use App\Http\Controllers\Admin\OtherController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\GuestAdminMiddleware;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('admin.welcome', [
        'page' => 'dashboard',
    ]);
})->middleware(AdminMiddleware::class)->name('admin.home');


Route::middleware('aguest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'store'])->name('admin.login');
    Route::get('/register', [AuthController::class, 'craete'])->name('admin.register');
    Route::get('/forgotpassword', [AuthController::class, 'forgotpassword'])->name('admin.forgotpassword');
});

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('logout', function () {
        Session::put('admin.login', false);
        Session::forget('admin.akun');

        return redirect()->route('admin.login');
    })->name('admin.logout');

    Route::prefix('controladmin')->group(function () {
        Route::get('/', function () {
            return view('admin.auth.add');
        })->name('admin.add');
        Route::post('/', function (Request $request) {
            Admin::create([
                'name' => $request->name,
                'email' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('admin.home');
        })->name('admin.add');
        Route::get('list', function () {
            $data = Admin::all();
            return view('admin.auth.list', [
                'admins' => $data,
            ]);
        })->name('admin.list');
    });

    Route::prefix('game')->group(function () {
        Route::get('/', [GameController::class, 'index'])->name('game.index');
        Route::get('/show/{id}', [GameController::class, 'show'])->name('game.show');
        Route::get('/create', [GameController::class, 'create'])->name('game.create');
        Route::post('/store', [GameController::class, 'store'])->name('game.store');
        Route::get('/edit/{id}', [GameController::class, 'edit'])->name('game.edit');
        Route::post('/update/{id}', [GameController::class, 'update'])->name('game.update');
        Route::get('/destroy/{id}', [GameController::class, 'destroy'])->name('game.destroy');

        Route::prefix('publisher')->group(function () {
            Route::get('/', [GamePublisherController::class, 'index'])->name('game.publisher.index');
            Route::get('/create', [GamePublisherController::class, 'create'])->name('game.publisher.create');
            Route::post('/store', [GamePublisherController::class, 'store'])->name('game.publisher.store');
            Route::put('/update/{id}', [GamePublisherController::class, 'update'])->name('game.publisher.update');
            Route::delete('/destroy/{id}', [GamePublisherController::class, 'destroy'])->name('game.publisher.destroy');
        });
    });

    Route::prefix('other')->group(function () {
        Route::get('/order', [OtherController::class, 'order'])->name('other.order');
    });
});
