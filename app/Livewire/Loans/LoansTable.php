<?php

namespace App\Livewire\Loans;

use App\Models\Loan;
use Livewire\Component;
use Livewire\WithPagination;

class LoansTable extends Component
{

    use WithPagination;

    public string $search = "";

    public function render()
    {
        $loans = Loan::with(['user', 'book'])->where(function ($query) {
            $query->where('date', 'like', '%' . $this->search . '%')
                ->orWhere('return_date', 'like', '%' . $this->search . '%')
                ->orWhere('status', 'like', '%' . $this->search . '%')
                ->orWhereHas('user', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                })->orWhereHas('book', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                });
        })->paginate(10);
        return view('livewire.loans.loans-table', compact('loans'));
    }
}
