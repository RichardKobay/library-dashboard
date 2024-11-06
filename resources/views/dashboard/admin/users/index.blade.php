<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <livewire:users.users-table />
</x-app-layout>

@if(Session::has('change'))
    <script>
        Swal.fire({
            title: "Success",
            text: "User changed successfully",
            icon: "success"
        });
    </script>
@endif

@if(Session::has('deleted'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Loan deleted successfully",
            icon: "success"
        });
    </script>
@endif
