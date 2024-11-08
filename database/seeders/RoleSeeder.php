<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_01 = User::find(1);
        $user_01->assignRole('admin');

        $user_02 = User::find(2);
        $user_02->assignRole('user');

        $user_02 = User::find(3);
        $user_02->assignRole('user');

        $user_02 = User::find(4);
        $user_02->assignRole('librarian');

        for ($i = 4; $i <= 10; $i++) {
            $user = User::find($i);
            if ($user) {
                $user->assignRole('user');
            }
        }
    }
}
