<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $myPosts = Post::all()->where('author_id', '==', Auth::id());

        return view('home')->with('myPosts', $myPosts);
    }
}
