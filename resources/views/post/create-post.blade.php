@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2 class="text-danger">Create New Post</h2>
        </div>
        <form class="m-5" method="post" action="/store-post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input name="title" type="text" class="form-control" id="postTitle" placeholder="Enter post title">
            </div>

            <div class="form-group">
                <label for="postBody">Post Body</label>
                <textarea name="body" class="form-control" id="postBody" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
