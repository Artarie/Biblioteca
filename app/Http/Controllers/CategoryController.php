<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($id)
    {
        // $book = DB::table('books')->orderBy('created_at', 'desc')
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->get();
        $books = DB::table('books')
            ->join('book_category', 'books.id', '=', 'book_id')
            ->where('book_category.category_id', $id)
            ->get();
        return view('crud.categories.index', [
            'books' => $books,
            'categories' => $categories
        ]);
    }
}
