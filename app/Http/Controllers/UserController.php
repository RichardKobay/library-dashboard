<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.users.index');
    }

    public function user($id)
    {
        $user = User::find($id);
        return view ('dashboard.admin.users.user', compact('user'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

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
