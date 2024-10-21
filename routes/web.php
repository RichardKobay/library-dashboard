<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/books', [
        BookController::class,
        'index'
    ])->name('dashboard.books');

    Route::get('/dashboard/my-loans', function () {
        return view('dashboard.user.my-loans');
    })->name('dashboard.my-loans');

    Route::get('/dashboard/my-reservations', function () {
        return view('dashboard.user.my-reservations');
    })->name('dashboard.my-reservations');

    Route::get('/dashboard/loans', function () {
        return view('dashboard.admin.loans');
    })->name('dashboard.loans');

    Route::get('/dashboard/users', function () {
        return view('dashboard.admin.users');
    })->name('dashboard.users');

    Route::get('/dashboard/reservations', function () {
        return view('dashboard.admin.reservations');
    })->name('dashboard.reservations');
});
