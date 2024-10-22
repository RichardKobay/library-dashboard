<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            ['id' => 1, 'user_id' => 2, 'book_id' => 3, 'date' => '2024-09-19'],
            ['id' => 2, 'user_id' => 3, 'book_id' => 7, 'date' => '2024-09-18'],
            ['id' => 3, 'user_id' => 4, 'book_id' => 10, 'date' => '2024-09-20'],
            ['id' => 4, 'user_id' => 5, 'book_id' => 12, 'date' => '2024-09-21'],
            ['id' => 5, 'user_id' => 6, 'book_id' => 4, 'date' => '2024-09-22'],
            ['id' => 6, 'user_id' => 7, 'book_id' => 14, 'date' => '2024-09-23'],
            ['id' => 7, 'user_id' => 8, 'book_id' => 16, 'date' => '2024-09-24'],
            ['id' => 8, 'user_id' => 9, 'book_id' => 19, 'date' => '2024-09-25'],
            ['id' => 9, 'user_id' => 10, 'book_id' => 21, 'date' => '2024-09-26'],
            ['id' => 10, 'user_id' => 2, 'book_id' => 6, 'date' => '2024-09-27'],
            ['id' => 11, 'user_id' => 3, 'book_id' => 8, 'date' => '2024-09-28'],
            ['id' => 12, 'user_id' => 4, 'book_id' => 15, 'date' => '2024-09-29'],
            ['id' => 13, 'user_id' => 5, 'book_id' => 22, 'date' => '2024-09-30'],
            ['id' => 14, 'user_id' => 6, 'book_id' => 25, 'date' => '2024-10-01'],
            ['id' => 15, 'user_id' => 7, 'book_id' => 28, 'date' => '2024-10-02'],
            ['id' => 16, 'user_id' => 8, 'book_id' => 18, 'date' => '2024-10-03'],
            ['id' => 17, 'user_id' => 9, 'book_id' => 30, 'date' => '2024-10-04'],
            ['id' => 18, 'user_id' => 10, 'book_id' => 9, 'date' => '2024-10-05'],
        ]);
    }
}
