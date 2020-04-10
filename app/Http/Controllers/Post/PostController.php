<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }


    public function create()
    {
        return view('post.create-post');
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;
        $post->author_id =  Auth::id();

        $post->save();


        $myPosts = Post::all()
            ->where('author_id' , '==', Auth::id());

        return view('home')->with('success', 'Post has been created successfully!')->with('myPosts', $myPosts);
    }


    public function show(Post $post)
    {
        return view('post_view')->with('post', $post);
    }


    public function edit(Post $post)
    {
        return view('post.update-post')->with('post', $post);
    }


    public function update(Request $request, Post $post)
    {
        $post = Post::find($post->id);
        $post->update($request->all());
//        $post = Post::find($post->id);
//
//        $post->title = $request->input('title');
//        $post->body = $request->input('body');
//
//        $post->save();

        return redirect()->back()->with('success', 'Post has been updated successfully!')->with('post', $post);
    }


    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/')->with('success', 'Post has been deleted!');
    }
}
