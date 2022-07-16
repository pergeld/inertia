<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostResource::collection(Post::all());

        return inertia('Posts/Index', compact('posts'));
    }
}
