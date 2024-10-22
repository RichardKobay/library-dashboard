<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['id' => 1, 'name' => 'book'],
            ['id' => 2, 'name' => 'thesis'],
            ['id' => 3, 'name' => 'newspaper'],
        ]);
    }
}
