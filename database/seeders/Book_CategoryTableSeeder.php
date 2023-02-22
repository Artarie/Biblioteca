<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Book_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        

       for($i = 0; $i < 10 ; $i++){
                DB::table('book_category')->insert([
                    'id' => $i +1,
                    'book_id' => rand(1,10),
                    'category_id' => rand(1,10),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);
            }
        
    }
}
