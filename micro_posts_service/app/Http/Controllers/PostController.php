<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function getPosts(){
        $posts = Post::all();

        foreach ($posts as $post){
            $post->comments = Http::get('http://127.0.0.1:8001/api/posts/'.$post->id.'/comments')->body();
        }
        return $posts;
    }

    public function store(Request $request)
    {
        return Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
    }
}
