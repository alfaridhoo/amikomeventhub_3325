<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TransactionController;



// ==========================================
// RUTE PUBLIK
// ==========================================

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Detail Event
Route::get('/event/{event}', [EventController::class, 'show'])->name('events.show');

// Checkout & Tiket
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Redirect /login ke halaman login admin
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::get('/kontak', function () { return view('contact'); });
Route::get('/profil', function () { return view('profil'); });
Route::get('/katalog', function () { return view('katalog'); });
Route::get('/bantuan', function () { return view('bantuan'); });



// ==========================================
// RUTE ADMIN
// ==========================================

Route::prefix('admin')->name('admin.')->group(function () {

    // --- Rute Login (bebas akses, tanpa middleware) ---
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // --- Rute yang WAJIB login + role admin ---
    Route::middleware(['auth', 'admin'])->group(function () {

        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Events
        Route::resource('events', EventAdminController::class);

        // Categories
        Route::resource('categories', CategoryController::class);

        // Partners
        Route::resource('partners', PartnerController::class);

        // Transactions
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');

    });

});