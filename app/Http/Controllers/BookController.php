<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

       public function index()
       {
           return view('book.index',[
               'books' => Book::all()
           ]);
       }

       public function create()
       {
           return view('book.create',[
               'authors' => Author::all()
           ]);
       }

       public function store(Request $request)
       {
        //   return $request;
         $book = Book::create(request(['name','description','Isbn']));
         $authors = Author::find(request('authors'));
         $book->authors()->attach($authors);
        //  return $authors;
          return redirect()->back();

       }
}
