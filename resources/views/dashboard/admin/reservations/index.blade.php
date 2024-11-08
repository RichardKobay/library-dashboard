<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <livewire:reservations.reservations-table />
</x-app-layout>

@if(Session::has('created'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Reservation created successfully",
            icon: "success"
        });
    </script>
@endif

@if(Session::has('deleted'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Reservation deleted successfully",
            icon: "success"
        });
    </script>
@endif
