<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Jangan pakai User::factory() — kita panggil seeder manual
        $this->call([
            UserSeeder::class,
        ]);
    }
}
