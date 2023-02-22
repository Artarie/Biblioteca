<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        //Seeder en la tabla pivote
       for($i = 0; $i < rand(10,20) ; $i++){
                DB::table('book_category')->insert([
                    'id' => $i +1,
                    'book_id' => rand(1, 10),
                    'category_id' => rand(1,10),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);
            }
        
    }
}
