<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        return view('book.index', [
            'books' => Book::all()
        ]);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit', [
            'book' => $book,
            'authors' => Author::all()
        ]);
    }

    public function create()
    {
        return view('book.create', [
            'authors' => Author::all()
        ]);
    }

    public function store(Request $request)
    {
        //   return $request;
        $book = Book::create(request(['name', 'description', 'Isbn']));
        $authors = Author::find(request('authors'));
        $book->authors()->attach($authors);
        //  return $authors;
        return redirect()->back();
    }
    public function update($id, Request $request)
    {
        //  find existing book
        $book = Book::find($id);

        //    find existing authors
        $authors = $book->authors;

        // delete authors
        $book->authors()->detach($authors);
        //  return $request;

        //  update book
        $book->update(request(['name', 'description', 'Isbn']));

        // attach new authors
        $authors = Author::find(request('authors'));
        $book->authors()->attach($authors);


        //  return $authors;
        return redirect()->route('book.index');
    }
}
