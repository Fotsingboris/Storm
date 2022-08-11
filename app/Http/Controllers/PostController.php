<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'My super First title',
            'My super Second title'
        ];

        return view('articles', [
            'posts' => $posts
        ]);
    }

   public function show($id)
   {

    $posts = [
        1 => 'My Title Number1',
        2 => 'My Title Number2'
    ];

    $post = $posts[$id] ?? 'No Title';

    return view('article', [
        'post' => $post
    ]);
   }

   public function contact()
   {
    return view('contact');
   }

}
    