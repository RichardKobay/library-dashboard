<?php

namespace App\Livewire\User;

use App\Models\Loan;
use Livewire\Component;
use Livewire\WithPagination;

class MyLoansTable extends Component
{
    use WithPagination;

    public string $search = "";

    public function render()
    {
        $loans = Loan::with(['book'])
            ->where('user_id', auth()->id())
            ->where(function ($query) {
            $query->where('date', 'like', '%' . $this->search . '%')
                ->orWhere('return_date', 'like', '%' . $this->search . '%')
                ->orWhere('status', 'like', '%' . $this->search . '%')
                ->orWhereHas('book', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                });
        })->paginate(10);
        return view('livewire.user.my-loans-table', compact('loans'));
    }
}
