<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    * Dashboard index
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['middleware' => ['role:admin']], function () {
        // Books modification
        Route::put('/dashboard/books/update/{id}', [
//*    Books
        BookController::class,
        'update'
    ])->name('dashboard.books.update');
        Route::get('/dashboard/books/create', [
            BookController::class,
            'create'
        ])->name('dashboard.books.create');
        Route::post('/dashboard/books/store', [
            BookController::class,
            'store'
        ])->name('dashboard.books.store');
        Route::get('/dashboard/books/edit/{id}', [
            BookController::class,
            'edit'
        ])->name('dashboard.books.edit');
        Route::delete('/dashboard/books/destroy/{id}', [
            BookController::class,
            'destroy'
        ])->name('dashboard.books.destroy');

        // Loan modification
        Route::get('/dashboard/loans/create', [
            LoanController::class,
            'create'
        ])->name('dashboard.admin.loans.create');
        Route::post('/dashboard/loans/store', [
            LoanController::class,
            'store'
        ])->name('dashboard.admin.loans.store');
        Route::get('/dashboard/loans/edit/{id}', [
            LoanController::class,
            'edit'
        ])->name('dashboard.admin.loans.edit');
        Route::put('/dashboard/loans/update/{id}', [
            LoanController::class,
            'update'
        ])->name('dashboard.admin.loans.update');
        Route::delete('/dashboard/loans/destroy/{id}', [
            LoanController::class,
            'destroy'
        ])->name('dashboard.admin.loans.destroy');

        // User management
        Route::get('/dashboard/users', [
            UserController::class,
            'index'
        ])->name('dashboard.admin.users');
        Route::get('/dashboard/users/user/{id}', [
            UserController::class,
            'user'
        ])->name('dashboard.admin.users.user');
        Route::get('/dashboard/users/create', [
            UserController::class,
            'create'
        ])->name('dashboard.admin.users.create');
        Route::post('/dashboard/users/store', [
            UserController::class,
            'store'
        ])->name('dashboard.admin.users.store');
        Route::get('/dashboard/users/edit/{id}', [
            UserController::class,
            'edit'
        ])->name('dashboard.admin.users.edit');
        Route::put('/dashboard/users/update/{id}', [
            UserController::class,
            'update'
        ])->name('dashboard.admin.users.update');
        Route::delete('/dashboard/users/delete/{id}', [
            UserController::class,
            'destroy'
        ])->name('dashboard.admin.users.destroy');
        Route::post('/dashboard/users/make-admin/{id}', [
            UserController::class,
            'makeAdmin'
        ])->name('dashboard.admin.users.make-admin');
        Route::post('/dashboard/users/make-user/{id}', [
            UserController::class,
            'makeUser'
        ])->name('dashboard.admin.users.make-user');

        // Reservation modification
        Route::get('/dashboard/reservations/create', [
            ReservationController::class,
            'create'
        ])->name('dashboard.admin.reservations.create');
        Route::post('/dashboard/reservations/store', [
            ReservationController::class,
            'store'
        ])->name('dashboard.admin.reservations.store');
        Route::get('/dashboard/reservations/edit/{id}', [
            ReservationController::class,
            'edit'
        ])->name('dashboard.admin.reservations.edit');
        Route::put('/dashboard/reservations/update/{id}', [
            ReservationController::class,
            'update'
        ])->name('dashboard.admin.reservations.update');
        Route::delete('/dashboard/reservations/destroy/{id}', [
            ReservationController::class,
            'destroy'
        ])->name('dashboard.admin.reservations.destroy');
    });

    // Books show
    Route::get('/dashboard/books', [
        BookController::class,
        'index'
    ])->name('dashboard.books');
    Route::get('/dashboard/books/book/{id}', [
        BookController::class,
        'book'
    ])->name('dashboard.books.book');

    // Loans show
    Route::get('/dashboard/loans', [
        LoanController::class,
        'index'
    ])->name('dashboard.admin.loans');
    Route::get('/dashboard/loans/loan/{id}', [
        LoanController::class,
        'loan'
    ])->name('dashboard.admin.loans.loan');

    // Reservations management
    Route::get('/dashboard/reservations', [
        ReservationController::class,
        'index'
    ])->name('dashboard.admin.reservations');
    Route::post('/dashboard/reservations/make', [
        ReservationController::class,
        'make'
    ])->name('dashboard.reservations.make');
    Route::get('/dashboard/reservations/reservation/{id}', [
        ReservationController::class,
        'reservation'
    ])->name('dashboard.admin.reservations.reservation');


    // User Loans
    Route::get('/dashboard/my-loans', [
        LoanController::class,
        'myLoans'
    ])->name('dashboard.my-loans');

    // User reservations
    Route::get('/dashboard/my-reservations', [
        ReservationController::class,
        'myReservations'
    ])->name('dashboard.my-reservations');
});
