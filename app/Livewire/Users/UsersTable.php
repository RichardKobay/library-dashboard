<?php

namespace App\Livewire\Users;

use App\Http\Controllers\UserController;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{

    use WithPagination;

    public string $search = '';

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('phone_number', 'like', '%' . $this->search . '%')
            ->orWhereHas('roles', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->paginate(10);
        return view('livewire.users.users-table', compact('users'));
    }
}
