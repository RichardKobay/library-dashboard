<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nationalities')->insert([
            ['id' => 1, 'name' => 'Spain'],
            ['id' => 2, 'name' => 'United Kingdom'],
            ['id' => 3, 'name' => 'Russia'],
            ['id' => 4, 'name' => 'Colombia'],
            ['id' => 5, 'name' => 'United States'],
            ['id' => 6, 'name' => 'Czech Republic'],
            ['id' => 7, 'name' => 'Greece'],
            ['id' => 8, 'name' => 'Italy'],
            ['id' => 9, 'name' => 'Argentina'],
            ['id' => 10, 'name' => 'Japan'],
            ['id' => 11, 'name' => 'Nigeria'],
            ['id' => 12, 'name' => 'Czech Republic'],
        ]);
    }
}
