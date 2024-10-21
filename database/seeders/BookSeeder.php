<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'id' => 1,
            'name' => 'Book 1',
            'amount' => 10,
            'category_id' => 1,
            'type_id' => 1,
            'description' => 'Book 1 description',
            'ISBN' => '12345678910',
            'author_id' => 1,
            'publication_year' => 2004,
        ]);
    }
}
