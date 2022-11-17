<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Foo title',
                'image' => 'https://via.placeholder.com/300',
                'tags' => ['foo1', 'foo2', 'foo3'],
                'authors' => ['author1', 'author2'],
            ],
            [
                'id' => 2,
                'title' => 'Bar title',
                'image' => 'https://via.placeholder.com/300x200',
                'tags' => ['bar1', 'bar2', 'bar3'],
                'authors' => ['author3']
            ],
        ];

        return view('app', compact('data'));
    }
}
