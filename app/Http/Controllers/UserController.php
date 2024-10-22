<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function makeAdmin($id)
    {
        User::find($id)->assignRole('admin');
        User::find($id)->removeRole('user');
        return redirect(route('dashboard.admin.users'))->with('change', 'success');
    }

    public function makeUser($id)
    {
        User::find($id)->assignRole('user');
        User::find($id)->removeRole('admin');
        return redirect(route('dashboard.admin.users'))->with('change', 'success');
    }
}
