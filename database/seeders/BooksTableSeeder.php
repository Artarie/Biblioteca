<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            
            DB::table("books")->insert(
                [
                     "id" => $i + 1,
                    "isbn" => $faker->isbn10(),
                    "title" => $faker->streetName(),
                    "author" => $faker->name,
                    "published_date" =>  $faker->dateTimeBetween("-100 year", "+1 month")->format('Y-m-d'),
                    "description" =>  $faker->text,
                    "price" => $faker->randomFloat(2, 10, 30),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
        }
    }
}
