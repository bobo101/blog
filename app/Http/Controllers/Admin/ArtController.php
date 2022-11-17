<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Art\StoreRequest;
use App\Models\Art;
use App\Models\Author;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ArtController extends Controller
{
    public function index()
    {
        $arts = Art::all();
        
        return view('admin.art.index', compact('arts'));
    }

    public function create()
    {
        $tags = Tag::all()->map->only('id', 'name');
        $authors = Author::all()->map->only('id', 'name');

        return view('admin.art.create', compact('tags', 'authors'));
    }

    public function store(StoreRequest $request)
    {
        $art = Art::create([
            'title' => $request->title,
            'image' => $this->storeImage($request->file('image')),
            'file' => $this->storeFile($request->file('file')),
        ]);

        $this->syncTags($art, $request->tags);
        $this->syncAuthors($art, $request->authors);

        return redirect('admin/arts');
    }

    public function edit(Art $art)
    {
        $tags = Tag::all()->map->only('id', 'name');
        $authors = Author::all()->map->only('id', 'name');

        return view('admin.art.edit', compact('art', 'tags', 'authors'));
    }

    public function update(Art $art, Request $request)
    {
        $art->update(array_filter([
            'title' => $request->title,
            'image' => $this->storeImage($request->file('image')),
            'file' => $this->storeFile($request->file('file')),
        ]));

        $this->syncTags($art, $request->tags);
        $this->syncAuthors($art, $request->authors);

        return redirect('admin/arts');
    }

    public function show(Art $art)
    {
        return view('admin.art.show', compact('art'));
    }

    public function destroy(Art $art)
    {
        $art->delete();

        return redirect()->back();
    }

    private function storeImage(?UploadedFile $image): ?string
    {
        if(is_null($image)){
            return null;
        }

        return $image->store('/', 'public');   
    }

    private function syncTags(Model $model, ?string $tags)
    {
        if(empty($tags)){
            return;
        }

        $model->tags()->sync(explode(',', $tags));
    }

    private function syncAuthors(Model $model, ?string $authors)
    {
        if(empty($authors)){
            return;
        }

        $model->authors()->sync(explode(',', $authors));
    }

    private function storeFile(?UploadedFile $file): ?string
    {
        if(is_null($file)){
            return null;
        }

        return $file->store('/files', 'public');   
    }
}
