<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['id' => 1,
                'name' => 'The ingenious gentleman Don Quijote de la mancha',
                'amount' => 10,
                'type_id' => 1,
                'description' => 'Just a desc',
                'ISBN' => 'B07KN9K5X9',
                'publication_year' => 2018],
            ['id' => 2, 'name' => 'War and Peace', 'amount' => 5, 'type_id' => 1, 'description' => 'A novel by Leo Tolstoy, focusing on the French invasion of Russia and the impact of the Napoleonic era on Tsarist society.', 'ISBN' => 'B000FC1LLI', 'publication_year' => 1869],
            ['id' => 3, 'name' => 'Pride and Prejudice', 'amount' => 7, 'type_id' => 1, 'description' => 'A novel by Jane Austen that explores the consequences of first impressions and societal expectations.', 'ISBN' => 'B08L7MG9JS', 'publication_year' => 1813],
            ['id' => 4, 'name' => 'One Hundred Years of Solitude', 'amount' => 8, 'type_id' => 1, 'description' => 'A novel by Gabriel García Márquez that tells the multi-generational story of the Buendía family.', 'ISBN' => 'B004JN1BKK', 'publication_year' => 1967],
            ['id' => 5, 'name' => 'Crime and Punishment', 'amount' => 4, 'type_id' => 1, 'description' => 'A novel by Fyodor Dostoevsky, which deals with the moral dilemmas of a young man named Raskolnikov.', 'ISBN' => 'B003JMFMD8', 'publication_year' => 1866],
            ['id' => 6, 'name' => 'The Adventures of Tom Sawyer', 'amount' => 10, 'type_id' => 1, 'description' => 'A novel by Mark Twain about a boy growing up along the Mississippi River.', 'ISBN' => 'B0053GY3VY', 'publication_year' => 1876],
            ['id' => 7, 'name' => 'A Tale of Two Cities', 'amount' => 6, 'type_id' => 1, 'description' => 'A novel by Charles Dickens set in London and Paris before and during the French Revolution.', 'ISBN' => 'B004EWGYG4', 'publication_year' => 1859],
            ['id' => 8, 'name' => 'The Trial', 'amount' => 5, 'type_id' => 1, 'description' => 'A novel by Franz Kafka, about a man who is arrested and prosecuted by a remote, inaccessible authority.', 'ISBN' => 'B003OIBG5Q', 'publication_year' => 1925],
            ['id' => 11, 'name' => 'The Garden of Forking Paths', 'amount' => 5, 'type_id' => 1, 'description' => 'A short story by Jorge Luis Borges, exploring time and labyrinths.', 'ISBN' => 'B004E1CAG6', 'publication_year' => 1941],
            ['id' => 12, 'name' => 'Kafka on the Shore', 'amount' => 6, 'type_id' => 1, 'description' => 'A novel by Haruki Murakami about two characters whose paths cross in mysterious ways.', 'ISBN' => 'B007XJ6Y0U', 'publication_year' => 2002],
            ['id' => 13, 'name' => 'Things Fall Apart', 'amount' => 7, 'type_id' => 1, 'description' => 'A novel by Chinua Achebe about pre-colonial life in Nigeria and the arrival of Europeans.', 'ISBN' => 'B0049D6EL2', 'publication_year' => 1958],
            ['id' => 14, 'name' => 'Beloved', 'amount' => 6, 'type_id' => 1, 'description' => 'A novel by Toni Morrison about the psychological impact of slavery.', 'ISBN' => 'B003GUB8H2', 'publication_year' => 1987],
            ['id' => 15, 'name' => 'The Unbearable Lightness of Being', 'amount' => 4, 'type_id' => 1, 'description' => 'A novel by Milan Kundera about love and political unrest.', 'ISBN' => 'B003UHVKJQ', 'publication_year' => 1984],

            // Theses
            ['id' => 16, 'name' => 'Exploring Quantum Computing', 'amount' => 2, 'type_id' => 2, 'description' => 'A thesis exploring the potential applications of quantum computing in solving complex problems.', 'ISBN' => '9781234567890', 'publication_year' => 2020],
            ['id' => 17, 'name' => 'The Role of AI in Modern Economics', 'amount' => 3, 'type_id' => 2, 'description' => 'A thesis analyzing the role of artificial intelligence in the modern economy.', 'ISBN' => '9780987654321', 'publication_year' => 2021],
            ['id' => 18, 'name' => 'A Study on Human Behavior', 'amount' => 4, 'type_id' => 2, 'description' => 'A comprehensive thesis examining psychological patterns in modern society.', 'ISBN' => '9781234509876', 'publication_year' => 2019],
            ['id' => 19, 'name' => 'Historical Perspectives on the Cold War', 'amount' => 2, 'type_id' => 2, 'description' => 'An academic thesis analyzing the socio-political dynamics during the Cold War.', 'ISBN' => '9780987601234', 'publication_year' => 2022],
            ['id' => 20, 'name' => 'Advancements in Genetic Research', 'amount' => 3, 'type_id' => 2, 'description' => 'A thesis on the latest developments in genetics and their implications for healthcare.', 'ISBN' => '9783456712390', 'publication_year' => 2020],
            ['id' => 21, 'name' => 'Mathematical Models in Climate Science', 'amount' => 3, 'type_id' => 2, 'description' => 'A thesis focusing on the use of mathematical models to predict climate change outcomes.', 'ISBN' => '9780987651239', 'publication_year' => 2023],
            ['id' => 22, 'name' => 'Social Media’s Impact on Political Campaigns', 'amount' => 5, 'type_id' => 2, 'description' => 'A thesis examining the influence of social media on political strategies and outcomes.', 'ISBN' => '9781231235678', 'publication_year' => 2021],
            ['id' => 23, 'name' => 'Philosophy of Mind in the 21st Century', 'amount' => 4, 'type_id' => 2, 'description' => 'A thesis exploring contemporary theories in the philosophy of mind and consciousness.', 'ISBN' => '9780980988765', 'publication_year' => 2022],
            ['id' => 24, 'name' => 'Physics in the Age of AI', 'amount' => 2, 'type_id' => 2, 'description' => 'A thesis on the intersection of artificial intelligence and modern physics research.', 'ISBN' => '9783451239876', 'publication_year' => 2023],
            ['id' => 25, 'name' => 'Law and Ethics in Biotechnology', 'amount' => 2, 'type_id' => 2, 'description' => 'A thesis analyzing legal and ethical concerns in biotechnological advancements.', 'ISBN' => '9780987652345', 'publication_year' => 2021],

            // More books
            ['id' => 26, 'name' => 'Anna Karenina', 'amount' => 4, 'type_id' => 1, 'description' => 'A novel by Leo Tolstoy, about the tragic love story of Anna Karenina and her affair with Count Vronsky.', 'ISBN' => 'B000FC2LLI', 'publication_year' => 1878],
            ['id' => 27, 'name' => 'Hamlet', 'amount' => 7, 'type_id' => 1, 'description' => 'A tragedy by William Shakespeare that explores themes of revenge, morality, and madness.', 'ISBN' => 'B000XZ37KI', 'publication_year' => 1603],
            ['id' => 28, 'name' => 'The Brothers Karamazov', 'amount' => 5, 'type_id' => 1, 'description' => 'A novel by Fyodor Dostoevsky dealing with faith, doubt, and morality in 19th-century Russia.', 'ISBN' => 'B000PJU2QA', 'publication_year' => 1880],
            ['id' => 29, 'name' => 'Moby-Dick', 'amount' => 4, 'type_id' => 1, 'description' => 'A novel by Herman Melville, about the voyage of the whaling ship Pequod and its captain\'s obsession with catching a giant white whale.', 'ISBN' => 'B002U4K3MI', 'publication_year' => 1851],
            ['id' => 30, 'name' => 'The Sound and the Fury', 'amount' => 3, 'type_id' => 1, 'description' => 'A novel by William Faulkner that employs a stream of consciousness narrative technique to explore the decline of the Compson family.', 'ISBN' => 'B0011YZ4N6', 'publication_year' => 1929],
        ]);
    }
}
