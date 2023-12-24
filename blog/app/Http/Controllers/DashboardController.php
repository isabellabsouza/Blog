<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class DashboardController extends Controller
{
    public function __construct(private PostRepository $repository)
    {
    }
    public function posts()
    {
        $posts = $this->repository->findAll();
        return view('dashboard.posts')->with('posts', $posts);
        
    }
}
