<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('post.create-post');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return view('home')->with('success', 'Post has been created successfully!');
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        //
    }


    public function update(Request $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //
    }
}
