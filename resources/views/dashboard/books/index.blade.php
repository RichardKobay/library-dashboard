<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <livewire:books.books-table />
</x-app-layout>

@if(Session::has('created'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Book created successfully",
            icon: "success"
        });
    </script>
@endif

@if(Session::has('deleted'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Book deleted successfully",
            icon: "success"
        });
    </script>
@endif

@if(Session::has('loaned'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Book was available, created a loan instead",
            icon: "warning"
        });
    </script>
@endif

@if(Session::has('reserved'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Reservation created successfully",
            icon: "success"
        });
    </script>
@endif

