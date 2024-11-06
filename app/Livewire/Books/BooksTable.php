<?php

namespace App\Livewire\Books;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class BooksTable extends Component
{
    use WithPagination;

    public string $search = "";

    public function render()
    {
        $books = Book::with(['categories', 'authors', 'type'])
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('ISBN', 'like', '%' . $this->search . '%')
            ->orWhereHas('categories', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->orWhereHas('authors', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->orWhereHas('type', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->paginate(10);
        return view('livewire.books.books-table', compact('books'));
    }
}
