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
              'likes' =>50,
              'is_published' => 1,

          ],
          [
              'title' => 'title of post from phpstorm',
              'content' =>'some interesting content',
              'image' =>'imageblabla.jpg',
              'likes' =>50,
              'is_published' => 1,

          ]
        ];


        foreach($postsArr as $item)
        {
            Post::create(
                [
                    'title' => $item['title'],
                    'content' =>$item['content'],
                    'image' =>$item['image'],
                    'likes' =>$item['likes'],
                    'is_published' => $item['is_published'],
                ]
            );
        }
        dd('created');


    }

    public function update(){
        $post = Post::find(6);
        $post -> update(
            [
                'title' =>'updated1231',
                'content' =>'updated',
                'image' =>'updated',
                'likes' =>1000,
                'is_published' =>1,
            ]
        );
        dd($post->title);

    }
    public function delete()
    {
        $post = Post::find(6);
        $post -> delete();
        dd('deleted post');
    }
}
