<?php

namespace App\Models;

class Genre
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'name' => 'Fantasy',     'slug' => 'fantasy'],
            ['id' => 2, 'name' => 'Science Fiction', 'slug' => 'science-fiction'],
            ['id' => 3, 'name' => 'Mystery',     'slug' => 'mystery'],
            ['id' => 4, 'name' => 'Romance',     'slug' => 'romance'],
            ['id' => 5, 'name' => 'Non-Fiction', 'slug' => 'non-fiction'],
        ];
    }
}
