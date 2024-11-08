<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Loans') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center mt-12 flex-col">
        <div
            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Loan</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">User: {{ $loan->user->name }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Book: {{ $loan->book->name }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Date: {{ $loan->date }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Return date: {{ $loan->return_date }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">status: {{ $loan->status }}</p>
            @role('admin')
            <button type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Edit Loan
            </button>
            <form action="{{ route('dashboard.admin.loans.destroy', $loan->id) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                    Delete
                </button>
            </form>
            @endrole
        </div>
    </div>
</x-app-layout>

@if(Session::has('updated'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Loan updated successfully",
            icon: "success"
        });
    </script>
@endif
