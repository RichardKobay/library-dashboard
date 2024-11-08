<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Prompts\Note;

class BookController extends Controller
{
    public function index(): View
    {
        return view('dashboard.books.index');
    }

    public function book($id): View
    {
        $book = Book::find($id);

        return view('dashboard.books.book', compact('book'));
    }

    public function create(): View
    {
        $authors = Author::all();
        $categories = Category::all();
        $types = Type::all();
        return view('dashboard.books.create', compact('authors', 'categories', 'types'));
    }

    public function store(BookRequest $request)
    {

        $name = $request->input('name');
        $amount = $request->input('amount');
        $type_id = $request->input('type');
        $category_id = $request->input('category');
        $authors_id = $request->input('authors');
        $isbn = $request->input('isbn');
        $publication_year = $request->input('publication_year');
        $description = $request->input('description');

        $book = Book::create([
            'name' => $name,
            'amount' => $amount,
            'type_id' => $type_id,
            'ISBN' => $isbn,
            'description' => $description,
            'publication_year' => $publication_year,
        ]);

        $book->authors()->sync($authors_id);
        $book->categories()->sync($category_id);

        return redirect(route('dashboard.books'))->with('created', 'success');
    }

    public function edit($id): View
    {
        $book = Book::find($id);
        $authors = Author::all();
        $categories = Category::all();
        $types = Type::all();
        return view('dashboard.books.edit', compact('book', 'authors', 'categories', 'types'));
    }

    public function update($id, BookRequest $request)
    {
        $book = Book::find($id);
        $name = $request->input('name');
        $amount = $request->input('amount');
        $type_id = $request->input('type');
        $category_id = $request->input('category');
        $authors_id = $request->input('authors');
        $isbn = $request->input('isbn');
        $publication_year = $request->input('publication_year');
        $description = $request->input('description');

        $book->update([
            'name' => $name,
            'amount' => $amount,
            'type_id' => $type_id,
            'ISBN' => $isbn,
            'description' => $description,
            'publication_year' => $publication_year,
        ]);

        $book->authors()->sync($authors_id);
        $book->categories()->sync($category_id);

        return redirect(route('dashboard.books.book', $book->id))->with('updated', 'success');
    }

    public function destroy(Request $request, $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect(route('dashboard.books'))->with('deleted', 'success');
    }
}
