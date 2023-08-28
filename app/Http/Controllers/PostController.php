<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('is_published', 0) -> first();
        dump($post->title);
        dump('end');
    }
    public function create()
    {
        $postsArr = [
          [
              'title' => 'title of post from phpstorm',
              'content' =>'some interesting content',
              'image' =>'imageblabla.jpg',
              'likes' =>20,
              'is_published' => 1,

          ]
        ];

    }
}
