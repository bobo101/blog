<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $arts = Art::all();
        $data = $arts->map(function($art){
            return [
                'id' => $art->id,
                'title' => $art->title,
                'image' => Storage::disk('public')->url($art->image),
                'tags' => $art->tags->pluck('name')->toArray(),
                'authors' => $art->authors->pluck('name')->toArray(),
            ];
        });

        return view('home.app', compact('data'));
    }

    public function show(Art $art)
    {
        return view('home.show', compact('art'));
    }
}
