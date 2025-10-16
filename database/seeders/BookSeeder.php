<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder {
    public function run(): void {
        DB::table('books')->insert([
            ['title' => 'Harry Potter',                 'genre' => 'Fantasy',      'publication_year' => 1997, 'author_id' => 1],
            ['title' => 'Game of Thrones',              'genre' => 'Fantasy',      'publication_year' => 1996, 'author_id' => 2],
            ['title' => 'Murder on the Orient Express', 'genre' => 'Mystery',      'publication_year' => 1934, 'author_id' => 3],
            ['title' => 'Kafka on the Shore',           'genre' => 'Fiction',      'publication_year' => 2002, 'author_id' => 4],
            ['title' => 'Sapiens',                      'genre' => 'Non-Fiction',  'publication_year' => 2011, 'author_id' => 5],
        ]);
    }
}
