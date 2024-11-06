<div>
    <div class="flex flex-col items-center justify-center p-12 pb-16">
        @role('admin')
        <div>
            <a href="{{ route('dashboard.books.create') }}">
                <button type="button"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Add Book
                </button>
            </a>
        </div>
        @endrole

        <div class="flex w-full max-w-7xl mb-6">
            <input wire:model.live="search" type="search" id="search"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Search by Name, ISBN, Author, etc." required/>
        </div>

        <div class="max-w-7xl">
            @if($books->isEmpty())
                <p class="text-2xl text-gray-900 dark:text-white">No books to show</p>
            @else
                <div class="relative overflow-x-auto rounded">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Authors
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Categories
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ISBN
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $book->name }}
                                </th>
                                <td class="px-6 py-4">
                                    @forelse(collect($book->authors) as $author)
                                        <p>{{ $author->name }}</p>
                                    @empty
                                        <p>No authors</p>
                                    @endforelse
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->publication_year }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->amount }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->type->name }}
                                </td>
                                <td class="px-6 py-4">
                                    @forelse(collect($book->categories) as $category)
                                        <p>{{ $category->name }}</p>
                                    @empty
                                        <p>No categories to show</p>
                                    @endforelse
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->ISBN }}
                                </td>
                                <td class="px-6 py-4">
                                    @role('admin')
                                    <div>
                                        <a href="{{ route('dashboard.books.book', $book->id) }}">
                                            <button type="button"
                                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                More details
                                            </button>
                                        </a>
                                        <a href="{{ route('dashboard.books.edit', $book->id) }}">
                                            <button type="button"
                                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Edit
                                            </button>
                                        </a>
                                        <a>
                                            <button type="button"
                                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Loan
                                            </button>
                                        </a>
                                        <form action="{{ route('dashboard.books.destroy', $book->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                    @endrole
                                    @role('user')
                                    <div>
                                        No actions available
                                    </div>
                                    @endrole
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            @if($books->hasPages())
                <div class="max-w-7xl m-6">
                    {{ $books->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
