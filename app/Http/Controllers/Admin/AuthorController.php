<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        
        return view('admin.author.index', compact('authors'));
    }

    public function store(Request $request)
    {
        Author::create(['name' => $request->name]);

        return redirect()->back();
    }

    public function update(Author $author, Request $request)
    {
        $author->update(['name' => $request->name]);

        return redirect()->back();
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->back();
    }
}
