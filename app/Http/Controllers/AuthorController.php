<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
       Author::create(request(['name','email']));
       return redirect()->back();

    }
}
