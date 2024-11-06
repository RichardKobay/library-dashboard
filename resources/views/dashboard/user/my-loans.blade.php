<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My loans') }}
        </h2>
    </x-slot>

    <livewire:user.my-loans-table />
</x-app-layout>

@if(Session::has('created'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Loan created successfully",
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
