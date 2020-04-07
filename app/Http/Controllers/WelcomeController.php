<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        //dd($posts);

        return view('welcome')->with('posts', $posts);
    }

//    public function showPostDetails($id, $title, $body, $created_at)
//    {
//        //dd($request);
//        return view('post_view', [
//                                        'id' => $id,
//                                        'title' => $title,
//                                        'body' => $body,
//                                        'created_at' => $created_at
//                                       ]);
//    }

//    public function showPostDetails(Post $post)
//    {
//        return view('post_view')->with('post', $post);
//    }
}
