<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Computer Science'],
            ['id' => 2, 'name' => 'Terror'],
            ['id' => 3, 'name' => 'Philosophy'],
            ['id' => 4, 'name' => 'History'],
            ['id' => 5, 'name' => 'Mathematics'],
            ['id' => 6, 'name' => 'Psychology'],
            ['id' => 7, 'name' => 'Economics'],
            ['id' => 8, 'name' => 'Literature'],
            ['id' => 9, 'name' => 'Sociology'],
            ['id' => 10, 'name' => 'Physics'],
            ['id' => 11, 'name' => 'Biology'],
            ['id' => 12, 'name' => 'Law'],
        ]);
    }
}
