<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct(private PostRepository $repository){}

    
    public function index()
    {
        $posts = $this->repository->findAll()->take(3);
        foreach($posts as $post){
            $post->formattedDate = Carbon::parse($post->created_at)->format('d/m/Y');
        }
        return view('home')->with(['posts' => $posts]);
    }
}
