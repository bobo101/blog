<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        
        return view('admin.tag.index', compact('tags'));
    }

    public function store(Request $request)
    {
        Tag::create(['name' => $request->name]);

        return redirect()->back();
    }

    public function update(Tag $tag, Request $request)
    {
        $tag->update(['name' => $request->name]);

        return redirect()->back();
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->back();
    }
}
