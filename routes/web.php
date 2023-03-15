<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



    Route::get('books/', 'App\Http\Controllers\BookController@index')->name('book.index');
    Route::get('books/create', 'App\Http\Controllers\BookController@create')->name('book.create');
    Route::post('/books', 'App\Http\Controllers\BookController@store')->name('book.store');
    Route::get('books/{id}', 'App\Http\Controllers\BookController@show')->name('book.show');
    Route::get('/books/{id}/edit', 'App\Http\Controllers\BookController@edit')->name('book.edit');
    Route::put('/books/{id}', 'App\Http\Controllers\BookController@update')->name('book.update');
    Route::delete('/books/{id}', 'App\Http\Controllers\BookController@destroy')->name('book.destroy');
    Route::get('/category/{id}/books', 'App\Http\Controllers\CategoryController@index')->name('category.books');




