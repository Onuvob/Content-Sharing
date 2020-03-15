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

    <div class="text-center mt-5 mb-5 text-danger">
        <h1>You haven't created any post.!</h1>
    </div>

    <div class="content m-5">

        <div class="card text-center ml-5 mr-5">
            <div class="card-header bg-dark text-white">
                <h4>Content Header</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Content Boyd.With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
            <div class="card-footer">
                <span class="text-muted">created at: </span> 2 days ago
            </div>
        </div>
    </div>
    <div class="content m-5">

        <div class="card text-center ml-5 mr-5">
            <div class="card-header bg-dark text-white">
                <h4>Content Header</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Content Boyd.With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
            <div class="card-footer">
                <span class="text-muted">created at: </span> 2 days ago
            </div>
        </div>
    </div>


</div>
@endsection
