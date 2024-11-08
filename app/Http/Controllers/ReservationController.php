<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.reservations.index');
    }

    public function reservation($id)
    {
        $reservation = Reservation::find($id);
        return view('dashboard.admin.reservations.reservation', compact('reservation'));
    }

    public function create()
    {
        $books = Book::all();
        $users = User::all();
        return view('dashboard.admin.reservations.create', compact('books', 'users'));
    }

    public function store(ReservationRequest $request)
    {
        $user_id = $request->input('user_id');
        $book_id = $request->input('book_id');
        $date = $request->input('date');

        Reservation::create([
            'user_id' => $user_id,
            'book_id' => $book_id,
            'date' => $date,
        ]);

        return redirect(route('dashboard.admin.reservations'))->with('created', 'success');
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);
        $users = User::all();
        $books = Book::all();
        return view('dashboard.admin.reservations.edit', compact('reservation', 'users', 'books'));
    }

    public function update($id, ReservationRequest $request)
    {
        $reservation = Reservation::find($id);
        $user_id = $request->input('user_id');
        $book_id = $request->input('book_id');
        $date = $request->input('date');

        $reservation->update([
            'user_id' => $user_id,
            'book_id' => $book_id,
            'date' => $date,
        ]);

        return redirect(route('dashboard.admin.reservations'))->with('created', 'success');
    }

    public function make(Request $request)
    {
        $userId = $request->input('user_id');
        $bookId = $request->input('book_id');
        $date = date('Y-m-d');

        $book = Book::find($bookId);
        if ($book->amount > 0) {
            return app(LoanController::class)->make($userId, $bookId);
        }

        Reservation::create([
            'user_id' => $userId,
            'book_id' => $bookId,
            'date' => $date,
        ]);

        return redirect(route('dashboard.books'))->with('reserved', 'success');
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect(route('dashboard.admin.reservations'))->with('deleted', 'success');
    }

    public function myReservations()
    {
        $reservations = Auth::user()->reservations;
        return view('dashboard.user.my-reservations', compact('reservations'));
    }
}
