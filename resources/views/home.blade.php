@extends('layouts.app')

@section('content')
<div class="container">

    <div>
        <a href="#" class="btn btn-primary">Add new post</a>
    </div>
    <div class="text-center mt-5 mb-5 text-danger">
        <h1>You haven't created any post.!</h1>
    </div>
    <div class="card text-center ml-5 mr-5">
        <div class="card-header">
            Content Header
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
@endsection
