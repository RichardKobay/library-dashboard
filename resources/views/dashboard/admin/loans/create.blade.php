<x-app-layout xmlns="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Loans') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center mt-12 flex-col">
        <div
            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 min-w-16">
            <form method="POST" action="{{ route('dashboard.admin.loans.store') }}" class="max-w-sm mx-auto min-w-12">
                @csrf
                <div class="mb-5">
                    <div>
                        <label for="user_id"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                        <select id="type" name="user_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @forelse($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('user_id')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                        <a>
                            <button type="button"
                                    class="mt-2 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                New Type
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-5">
                    <div>
                        <label for="book_id"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book</label>
                        <select id="type" name="book_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @forelse($books as $book)
                                <option value="{{ $book->id }}">{{ $book->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('book_id')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                        <a>
                            <button type="button"
                                    class="mt-2 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                New Type
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mb-5">
                    <div>
                        <label for="status"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select id="type" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="created">created</option>
                                <option value="pending">pending</option>
                                <option value="loaned">loaned</option>
                                <option value="returned">returned</option>
                        </select>
                        @error('status')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date (default today)</label>
                    <input type="date" id="date" name="date"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="YYYY-MM-DD" required/>
                    @error('date')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="return_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Return date</label>
                    <input type="date" id="return_date" name="return_date"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="YYYY-MM-DD" required/>
                    @error('return_date')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>

<script>
    const typeButton = document.getElementById('typeDropDownButton')

    typeButton.addEventListener('click', () => {
        const typeDropDownHover = document.getElementById('typeDropDownHover')
        typeDropDownHover.classList.toggle('hidden')
    })
</script>

