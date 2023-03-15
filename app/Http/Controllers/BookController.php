<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{


    public function index()
    {
        $book = DB::table('books')->orderBy('created_at', 'desc')->paginate(5);
        return view('crud.index', [
            'books' => $book
        ]);
    }

    public function show($id)
    {
        $book = DB::table('books')->find($id);

        if ($book) {
            return view('crud.view', [
                'books' => $book,
                'found' => true
            ]);
        } else {
            return view('crud.view', ['found' => false])->with('error', 'No book found for ' . $id);
        } 
        
    }

    public function create()
    {

        return view('crud.create');
    }

    public function store(Request $request)
    {
        $isbn = $request->input('isbn');
        $title = $request->input('title');
        $author = $request->input('author');
        $published_date = $request->input('published_date');
        $description = $request->input('description');
        $price = $request->input('price');

        DB::table('books')->insert([
            [
                'isbn' => $isbn, 'title' => $title, 'author' => $author, 'published_date' => $published_date, 'description' => $description,
                'price' => $price, "created_at" => Carbon::now(), "updated_at" => now()
            ],

        ]);

        return redirect('/books')->with('success', 'Libro añadido correctamente!');
    }

    public function edit($id)
    {
        $book = DB::table('books')->find($id);
        return view('crud.partials.index', [
            'book' => $book
        ]);
    }

    public function update(Request $request, $id)
    {
        $isbn = $request->input('isbn');
        $title = $request->input('title');
        $author = $request->input('author');
        $published_date = $request->input('published_date');
        $description = $request->input('description');
        $price = $request->input('price');

        DB::table('books')
            ->where('id', $id)
            ->update([
                'isbn' => $isbn, 'title' => $title, 'author' => $author, 'published_date' => $published_date, 'description' => $description,
                'price' => $price, "updated_at" => now()
            ]);
        return redirect('books/');
    }

    public function destroy($id)
    {
        DB::table('books')
            ->where('id', $id)
            ->delete();
        return redirect('books/')->with('deleted', 'Se ha eliminado correctamente el libro.');
    }
}
