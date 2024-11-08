<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.loans.index');
    }

    public function loan($id)
    {
        $loan = Loan::find($id);
        return view('dashboard.admin.loans.loan', compact('loan'));
    }

    public function create()
    {
        $books = Book::all();
        $users = User::all();
        return view('dashboard.admin.loans.create', compact('books', 'users'));
    }

    public function store(LoanRequest $request)
    {

        $user_id = $request->input('user_id');
        $book_id = $request->input('book_id');
        $date = $request->input('date');
        $return_date = $request->input('return_date');
        $status = $request->input('status');

        Book::find($book_id)->amount--;

        Loan::create([
            'user_id' => $user_id,
            'book_id' => $book_id,
            'date' => $date,
            'return_date' => $return_date,
            'status' => $status,
        ]);

        return redirect(route('dashboard.admin.loans'))->with('created', 'success');
    }

    public function edit($id)
    {
        $loan = Book::find($id);
        $users = User::all();
        $books = Book::all();
        return view('dashboard.admin.loans.edit', compact('loan', 'users', 'books'));
    }

    public function update($id, LoanRequest $request)
    {
        $loan = Loan::find($id);
        $user_id = $request->input('user_id');
        $book_id = $request->input('book_id');
        $date = $request->input('date');
        $return_date = $request->input('return_date');
        $status = $request->input('status');

        $loan->update([
            'user_id' => $user_id,
            'book_id' => $book_id,
            'date' => $date,
            'return_date' => $return_date,
            'status' => $status,
        ]);

        return redirect(route('dashboard.admin.loans.loan', $loan->id))->with('updated', 'success');
    }

    public function destroy(Request $request, $id)
    {
        $loan = Loan::find($id);
        $loan->delete();
        return redirect(route('dashboard.admin.loans'))->with('deleted', 'success');
    }

    public function make($userId, $bookId)
    {

        $user_id = $userId;
        $book_id = $bookId;
        $date = Carbon::now();
        $return_date = Carbon::now()->addDays(15);
        $status = 'pending';

        $book = Book::find($book_id);
        $book->amount--;
        $book->save();

        Loan::create([
            'user_id' => $user_id,
            'book_id' => $book_id,
            'date' => $date,
            'return_date' => $return_date,
            'status' => $status,
        ]);

        return redirect(route('dashboard.books'))->with('loaned', 'success');
    }

    public function myLoans()
    {
        $user = Auth::user();
        $loans = $user->loans;
        return view('dashboard.user.my-loans', compact('loans', 'user'));
    }
}
