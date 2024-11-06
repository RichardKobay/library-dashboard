<?php

namespace App\Livewire\User;

use App\Models\Reservation;
use Livewire\Component;
use Livewire\WithPagination;

class MyReservationsTable extends Component
{
    use WithPagination;

    public string $search = "";

    public function render()
    {
        $reservations = Reservation::with(['book'])
            ->where('user_id', auth()->id())
            ->where(function ($query) {
                $query->where('date', 'like', '%' . $this->search . '%')
                    ->orWhereHas('book', function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%');
                    });
            })->paginate(10);

        return view('livewire.user.my-reservations-table', compact('reservations'));
    }
}
