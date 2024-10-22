<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book_category')->insert([
            ['id' => 1, 'book_id' => 1, 'category_id' => 8], // Don Quixote - Literature
            ['id' => 2, 'book_id' => 2, 'category_id' => 8], // War and Peace - Literature
            ['id' => 3, 'book_id' => 3, 'category_id' => 8], // Pride and Prejudice - Literature
            ['id' => 4, 'book_id' => 4, 'category_id' => 8], // One Hundred Years of Solitude - Literature
            ['id' => 5, 'book_id' => 5, 'category_id' => 8], // Crime and Punishment - Literature
            ['id' => 6, 'book_id' => 6, 'category_id' => 8], // The Adventures of Tom Sawyer - Literature
            ['id' => 7, 'book_id' => 7, 'category_id' => 8], // A Tale of Two Cities - Literature
            ['id' => 8, 'book_id' => 8, 'category_id' => 8], // The Trial - Literature
            ['id' => 9, 'book_id' => 9, 'category_id' => 8], // The Iliad - Literature
            ['id' => 10, 'book_id' => 10, 'category_id' => 8], // The Aeneid - Literature
            ['id' => 11, 'book_id' => 11, 'category_id' => 8], // The Garden of Forking Paths - Literature
            ['id' => 12, 'book_id' => 12, 'category_id' => 8], // Kafka on the Shore - Literature
            ['id' => 13, 'book_id' => 13, 'category_id' => 8], // Things Fall Apart - Literature
            ['id' => 14, 'book_id' => 14, 'category_id' => 8], // Beloved - Literature
            ['id' => 15, 'book_id' => 15, 'category_id' => 8], // The Unbearable Lightness of Being - Literature

            // Theses with different categories
            ['id' => 16, 'book_id' => 16, 'category_id' => 1], // Exploring Quantum Computing - Computer Science
            ['id' => 17, 'book_id' => 17, 'category_id' => 7], // The Role of AI in Modern Economics - Economics
            ['id' => 18, 'book_id' => 18, 'category_id' => 6], // A Study on Human Behavior - Psychology
            ['id' => 19, 'book_id' => 19, 'category_id' => 4], // Historical Perspectives on the Cold War - History
            ['id' => 20, 'book_id' => 20, 'category_id' => 11], // Advancements in Genetic Research - Biology
            ['id' => 21, 'book_id' => 21, 'category_id' => 5], // Mathematical Models in Climate Science - Mathematics
            ['id' => 22, 'book_id' => 22, 'category_id' => 9], // Social Media’s Impact on Political Campaigns - Sociology
            ['id' => 23, 'book_id' => 23, 'category_id' => 3], // Philosophy of Mind in the 21st Century - Philosophy
            ['id' => 24, 'book_id' => 24, 'category_id' => 10], // Physics in the Age of AI - Physics
            ['id' => 25, 'book_id' => 25, 'category_id' => 12], // Law and Ethics in Biotechnology - Law

            // More books
            ['id' => 26, 'book_id' => 26, 'category_id' => 8], // Anna Karenina - Literature
            ['id' => 27, 'book_id' => 27, 'category_id' => 8], // Hamlet - Literature
            ['id' => 28, 'book_id' => 28, 'category_id' => 8], // The Brothers Karamazov - Literature
            ['id' => 29, 'book_id' => 29, 'category_id' => 8], // Moby-Dick - Literature
            ['id' => 30, 'book_id' => 30, 'category_id' => 8], // The Sound and the Fury - Literature
        ]);
    }
}
