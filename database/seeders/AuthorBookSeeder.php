<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('author_book')->insert([
            ['id' => 1, 'author_id' => 1, 'book_id' => 1],  // Miguel de Cervantes - Don Quixote
            ['id' => 2, 'author_id' => 2, 'book_id' => 27],  // William Shakespeare - Hamlet
            ['id' => 3, 'author_id' => 2, 'book_id' => 7],   // William Shakespeare - A Tale of Two Cities
            ['id' => 4, 'author_id' => 3, 'book_id' => 2],   // Leo Tolstoy - War and Peace
            ['id' => 5, 'author_id' => 3, 'book_id' => 26],  // Leo Tolstoy - Anna Karenina
            ['id' => 6, 'author_id' => 4, 'book_id' => 4],   // Gabriel García Márquez - One Hundred Years of Solitude
            ['id' => 7, 'author_id' => 5, 'book_id' => 3],   // Jane Austen - Pride and Prejudice
            ['id' => 8, 'author_id' => 6, 'book_id' => 5],   // Fyodor Dostoevsky - Crime and Punishment
            ['id' => 9, 'author_id' => 6, 'book_id' => 28],  // Fyodor Dostoevsky - The Brothers Karamazov
            ['id' => 10, 'author_id' => 7, 'book_id' => 6],  // Mark Twain - The Adventures of Tom Sawyer
            ['id' => 11, 'author_id' => 8, 'book_id' => 7],  // Charles Dickens - A Tale of Two Cities
            ['id' => 12, 'author_id' => 9, 'book_id' => 8],  // Franz Kafka - The Trial
            ['id' => 13, 'author_id' => 10, 'book_id' => 9], // Homer - The Iliad
            ['id' => 14, 'author_id' => 11, 'book_id' => 10], // Virgil - The Aeneid
            ['id' => 15, 'author_id' => 12, 'book_id' => 11], // Jorge Luis Borges - The Garden of Forking Paths
            ['id' => 16, 'author_id' => 13, 'book_id' => 12], // Haruki Murakami - Kafka on the Shore
            ['id' => 17, 'author_id' => 14, 'book_id' => 13], // Chinua Achebe - Things Fall Apart
            ['id' => 18, 'author_id' => 15, 'book_id' => 14], // Toni Morrison - Beloved
            ['id' => 19, 'author_id' => 16, 'book_id' => 15], // Milan Kundera - The Unbearable Lightness of Being
        ]);
    }
}
