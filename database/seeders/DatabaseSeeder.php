<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Para que se ejecuten los seeders automaticamente
        $this->call(BooksTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BookCategoryTableSeeder::class);


    }
}
