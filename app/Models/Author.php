<?php

namespace App\Models;

class Author
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'name' => 'J. K. Rowling',       'country' => 'UK',  'birth_year' => 1965],
            ['id' => 2, 'name' => 'George R. R. Martin', 'country' => 'USA', 'birth_year' => 1948],
            ['id' => 3, 'name' => 'Agatha Christie',     'country' => 'UK',  'birth_year' => 1890],
            ['id' => 4, 'name' => 'Haruki Murakami',     'country' => 'JP',  'birth_year' => 1949],
            ['id' => 5, 'name' => 'Yuval Noah Harari',   'country' => 'IL',  'birth_year' => 1976],
        ];
    }
}
