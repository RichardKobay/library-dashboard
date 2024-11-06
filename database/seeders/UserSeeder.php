<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'email' => 'ricardo.roel110@gmail.com', 'phone_number' => '+528341550967', 'password' => bcrypt('Triski123'), 'name' => 'Juan Ricardo Soriano Roel'],
            ['id' => 2, 'email' => 'john.doe@example.com', 'phone_number' => '+11234567890', 'password' => bcrypt('Password123'), 'name' => 'John Doe'],
            ['id' => 3, 'email' => 'jane.smith@example.com', 'phone_number' => '+441234567890', 'password' => bcrypt('JanePass456'), 'name' => 'Jane Smith'],
            ['id' => 4, 'email' => 'alex.johnson@example.com', 'phone_number' => '+4915123456789', 'password' => bcrypt('AlexJ789'), 'name' => 'Alex Johnson'],
            ['id' => 5, 'email' => 'maria.garcia@example.com', 'phone_number' => '+346789012345', 'password' => bcrypt('MariaG123'), 'name' => 'Maria Garcia'],
            ['id' => 6, 'email' => 'yuki.tanaka@example.com', 'phone_number' => '+819012345678', 'password' => bcrypt('YukiPass123'), 'name' => 'Yuki Tanaka'],
            ['id' => 7, 'email' => 'fatima.khan@example.com', 'phone_number' => '+923001234567', 'password' => bcrypt('FatimaK123'), 'name' => 'Fatima Khan'],
            ['id' => 8, 'email' => 'li.wei@example.com', 'phone_number' => '+8613812345678', 'password' => bcrypt('LiWei789'), 'name' => 'Li Wei'],
            ['id' => 9, 'email' => 'pierre.martin@example.com', 'phone_number' => '+331234567890', 'password' => bcrypt(value: 'PierreM123'), 'name' => 'Pierre Martin'],
            ['id' => 10, 'email' => 'sofia.rossi@example.com', 'phone_number' => '+393456789012', 'password' => bcrypt('SofiaR456'), 'name' => 'Sofia Rossi'],
        ]);
    }
}
