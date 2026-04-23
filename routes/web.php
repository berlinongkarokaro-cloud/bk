<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Landing page (tidak perlu login)
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

// Halaman yang butuh login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/products', function () {
        return view('products.index');
    })->name('products.index');

    Route::get('/orders', function () {
        return view('orders.index');
    })->name('orders.index');

    Route::get('/users', function () {
        return view('users.index');
    })->name('users.index');

    Route::prefix('reports')->group(function () {
        Route::get('/daily', function () {
            return view('reports.daily');
        })->name('reports.daily');

        Route::get('/monthly', function () {
            return view('reports.monthly');
        })->name('reports.monthly');

        Route::get('/top-products', function () {
            return view('reports.top-products');
        })->name('reports.top-products');
    });

    Route::get('/settings', function () {
        return view('settings.index');
    })->name('settings.index');
});
