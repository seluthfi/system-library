<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Luthfi',
                'year' => 2024,
                'stock' => 5,
                'category' => 'Pemrograman',
            ],
            [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Rizqi',
                'year' => 2023,
                'stock' => 8,
                'category' => 'Pemrograman',
            ],
            [
                'title' => 'Big Data',
                'author' => 'Rahman',
                'year' => 2025,
                'stock' => 10,
                'category' => 'Basis Data',
            ],
            [
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Juneo',
                'year' => 2024,
                'stock' => 7,
                'category' => 'Algoritma',
            ],
            [
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Zhilan',
                'year' => 2024,
                'stock' => 6,
                'category' => 'Pemrograman',
            ],
        ];

        foreach ($books as $book) {
            $categoryId = Category::where('name', $book['category'])->value('id');

            Book::firstOrCreate(
                ['title' => $book['title']],
                [
                    'author' => $book['author'],
                    'year' => $book['year'],
                    'stock' => $book['stock'],
                    'category_id' => $categoryId,
                ]
            );
        }
    }
}
