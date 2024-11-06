<?php

namespace App\Livewire\Reservations;

use App\Models\Reservation;
use Livewire\Component;
use Livewire\WithPagination;

class ReservationsTable extends Component
{

    use WithPagination;

    public string $search = "";

    public function render()
    {
        $reservations = Reservation::with(['user', 'book'])
            ->where(function ($query) {
                $query->where('date', 'like', '%' . $this->search . '%')
                    ->orWhereHas('book', function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%');
                    })->orWhereHas('user', function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%');
                    });
            })->paginate(10);
        return view('livewire.reservations.reservations-table', compact('reservations'));
    }
}
