<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['id' => 1, 'name' => 'Miguel de Cervantes', 'bio' => 'This is a biography of Miguel de Cervantes', 'birthday' => '1547-09-29', 'nationality_id' => 1],
            ['id' => 2, 'name' => 'William Shakespeare', 'bio' => 'This is a biography of William Shakespeare', 'birthday' => '1564-04-26', 'nationality_id' => 2],
            ['id' => 3, 'name' => 'Leo Tolstoy', 'bio' => 'This is a biography of Leo Tolstoy', 'birthday' => '1828-09-09', 'nationality_id' => 3],
            ['id' => 4, 'name' => 'Gabriel García Márquez', 'bio' => 'This is a biography of Gabriel García Márquez', 'birthday' => '1927-03-06', 'nationality_id' => 4],
            ['id' => 5, 'name' => 'Jane Austen', 'bio' => 'This is a biography of Jane Austen', 'birthday' => '1775-12-16', 'nationality_id' => 2],
            ['id' => 6, 'name' => 'Fyodor Dostoevsky', 'bio' => 'This is a biography of Fyodor Dostoevsky', 'birthday' => '1821-11-11', 'nationality_id' => 3],
            ['id' => 7, 'name' => 'Mark Twain', 'bio' => 'This is a biography of Mark Twain', 'birthday' => '1835-11-30', 'nationality_id' => 5],
            ['id' => 8, 'name' => 'Charles Dickens', 'bio' => 'This is a biography of Charles Dickens', 'birthday' => '1812-02-07', 'nationality_id' => 2],
            ['id' => 9, 'name' => 'Franz Kafka', 'bio' => 'This is a biography of Franz Kafka', 'birthday' => '1883-07-03', 'nationality_id' => 6],
            ['id' => 10, 'name' => 'Homer', 'bio' => 'This is a biography of Homer', 'birthday' => '1883-07-03', 'nationality_id' => 7],
            ['id' => 11, 'name' => 'Virgil', 'bio' => 'This is a biography of Virgil', 'birthday' => '1883-07-03', 'nationality_id' => 8],
            ['id' => 12, 'name' => 'Jorge Luis Borges', 'bio' => 'This is a biography of Jorge Luis Borges', 'birthday' => '1899-08-24', 'nationality_id' => 9],
            ['id' => 13, 'name' => 'Haruki Murakami', 'bio' => 'This is a biography of Haruki Murakami', 'birthday' => '1949-01-12', 'nationality_id' => 10],
            ['id' => 14, 'name' => 'Chinua Achebe', 'bio' => 'This is a biography of Chinua Achebe', 'birthday' => '1930-11-16', 'nationality_id' => 11],
            ['id' => 15, 'name' => 'Toni Morrison', 'bio' => 'This is a biography of Toni Morrison', 'birthday' => '1931-02-18', 'nationality_id' => 5],
            ['id' => 16, 'name' => 'Milan Kundera', 'bio' => 'This is a biography of Milan Kundera', 'birthday' => '1929-04-01', 'nationality_id' => 12],
        ]);
    }
}
