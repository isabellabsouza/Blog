<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Http\Request;

class PostRepository
{
    public function store(Request $request):Post
    {
        $thumbnailPath = $request->file('thumbnail')->store('thumbnails/', 'public');

        return Post::create([
            'title' => request('title'),
            'article' => request('article'),
            'thumbnail' => $thumbnailPath,
            'user_id' => auth()->id(),
        ]);
    }

    public function findAll()
    {
        return Post::all();
    }

    public function findById($id)
    {
        return Post::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $post = $this->findById($id);

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails/', 'public');
            $post->thumbnail = $thumbnailPath;
        }else{
            $thumbnailPath = $post->thumbnail;
        }

        $post->update([
            'title' => request('title'),
            'article' => request('article'),
            'thumbnail' => $thumbnailPath,
        ]);
    }

    public function destroy($id)
    {
        $post = $this->findById($id);
        $post->delete();
    }
}