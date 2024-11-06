<div>
    <div class="flex justify-center items-center mt-12 flex-col pb-16">
        <div>
            <a href="{{ route('dashboard.admin.reservations.create') }}">
                <button type="button"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Add Reservation
                </button>
            </a>
        </div>

        <div class="flex w-full max-w-7xl mb-6">
            <input wire:model.live="search" type="search" id="search"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Search by user, book, date or status" required/>
        </div>

        <div class="max-w-7xl">
            @if($reservations->isEmpty())
                <p class="text-2xl text-gray-900 dark:text-white">No reservations to show</p>
            @else
                <div class="relative overflow-x-auto rounded">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Book
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                date
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ optional($reservation->book)->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ optional($reservation->user)->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $reservation->date }}
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <a href="{{ route('dashboard.admin.reservations.reservation', $reservation->id) }}">
                                            <button type="button"
                                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                More details
                                            </button>
                                        </a>
                                        <a href="{{ route('dashboard.admin.reservations.edit', $reservation->id) }}">
                                            <button type="button"
                                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Edit
                                            </button>
                                        </a>
                                        <form
                                            action="{{ route('dashboard.admin.reservations.destroy', $reservation->id) }}"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            @if($reservations->hasPages())
                <div class="max-w-7xl m-6">
                    {{ $reservations->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
