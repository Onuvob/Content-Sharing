@extends('layouts.app')

@section('content')
    <div class="container">

                <div class="text-center">
                    <h2>Post Details</h2>
                </div>


                <div class="content m-5">

                    <div class="card text-center ml-5 mr-5">
                        <div class="card-header bg-dark text-white">
{{--                            <h4>{{ $title }}</h4>--}}
                            <h4>{{ $post->title }}</h4>
                        </div>
                        <div class="card-body">
{{--                            <p class="card-text">{{ $body }}</p>--}}
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer">
{{--                            <span class="text-muted">created at: </span> {{ $created_at }}--}}
                            <span class="text-muted">created at: </span> {{ $post->created_at }}
                        </div>
                    </div>
                </div>


                @if(Auth::id() == $post->author_id)
                    <div class="row text-center">
                            <div class="col-md-6">
                                <a href="/post-details/{{ $post->id }}" class="btn btn-info">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <a href="/post-delete/{{ $post->id }}" class="btn btn-danger">Delete</a>
                            </div>
                    </div>
                @endif

    </div>
@endsection
