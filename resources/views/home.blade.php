@extends('layouts.app')

@section('content')
<div class="container">

    @if(isset($success))
        <div class="alert alert-success">
            {{ $success }}
        </div>
    @endif

    <div>
        <a href="/create-post" class="btn btn-primary">Add new post</a>
    </div>



    @if( count($myPosts) > 0)

        @foreach($myPosts as $post)
            <div class="content m-5">

                <div class="card text-center ml-5 mr-5">
                    <div class="card-header bg-dark text-white">
                        <h4>{{ $post->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->body }}</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                    <div class="card-footer">
                        <span class="text-muted">created at: </span> {{ $post->created_at }}
                    </div>
                </div>
            </div>
        @endforeach
    @else

            <div class="text-center mt-5 mb-5 text-danger">
                <h1>You haven't created any post.!</h1>
            </div>

    @endif

</div>
@endsection
