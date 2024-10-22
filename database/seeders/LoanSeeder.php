<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loans')->insert([
            ['id' => 1, 'user_id' => 2, 'book_id' => 5, 'date' => '2024-10-20', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 2, 'user_id' => 3, 'book_id' => 1, 'date' => '2024-10-15', 'return_date' => '2024-10-19', 'status' => 'returned'],
            ['id' => 3, 'user_id' => 4, 'book_id' => 3, 'date' => '2024-10-10', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 4, 'user_id' => 5, 'book_id' => 7, 'date' => '2024-10-17', 'return_date' => '2024-10-20', 'status' => 'returned'],
            ['id' => 5, 'user_id' => 6, 'book_id' => 6, 'date' => '2024-10-13', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 6, 'user_id' => 7, 'book_id' => 9, 'date' => '2024-10-11', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 7, 'user_id' => 8, 'book_id' => 2, 'date' => '2024-10-12', 'return_date' => '2024-10-18', 'status' => 'returned'],
            ['id' => 8, 'user_id' => 9, 'book_id' => 4, 'date' => '2024-10-09', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 9, 'user_id' => 10, 'book_id' => 8, 'date' => '2024-10-16', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 10, 'user_id' => 1, 'book_id' => 15, 'date' => '2024-10-05', 'return_date' => '2024-10-10', 'status' => 'returned'],
            ['id' => 11, 'user_id' => 2, 'book_id' => 12, 'date' => '2024-10-18', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 12, 'user_id' => 3, 'book_id' => 14, 'date' => '2024-10-03', 'return_date' => '2024-10-15', 'status' => 'returned'],
            ['id' => 13, 'user_id' => 4, 'book_id' => 10, 'date' => '2024-10-06', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 14, 'user_id' => 5, 'book_id' => 11, 'date' => '2024-10-19', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 15, 'user_id' => 6, 'book_id' => 13, 'date' => '2024-10-08', 'return_date' => '2024-10-16', 'status' => 'returned'],
            ['id' => 16, 'user_id' => 7, 'book_id' => 16, 'date' => '2024-10-02', 'return_date' => '2024-10-09', 'status' => 'returned'],
            ['id' => 17, 'user_id' => 8, 'book_id' => 19, 'date' => '2024-10-11', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 18, 'user_id' => 9, 'book_id' => 17, 'date' => '2024-10-01', 'return_date' => '2024-10-14', 'status' => 'returned'],
            ['id' => 19, 'user_id' => 10, 'book_id' => 18, 'date' => '2024-10-04', 'return_date' => null, 'status' => 'loaned'],
            ['id' => 20, 'user_id' => 1, 'book_id' => 20, 'date' => '2024-10-07', 'return_date' => null, 'status' => 'loaned'],
        ]);
    }
}
