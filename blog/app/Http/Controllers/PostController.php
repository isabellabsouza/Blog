<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function __construct(private PostRepository $repository){}

    public function index()
    {
        $posts = $this->repository->findAll();
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->repository->store($request);
        return to_route('posts.index');
    }

    public function show($id)
    {
        $post = $this->repository->findById($id);
        return view('posts.show')->with('post', $post);
    }

    public function edit($id)
    {
        $post = $this->repository->findById($id);
        return view('posts.create')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $this->repository->update($request, $id);
        return to_route('posts.index');

    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
        return to_route('posts.index');
    }
}
