@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2 class="text-danger">Create New Post</h2>
        </div>
        <form class="m-5" method="post" action="/store-post" enctype="multipart/form-data">
            @csrf
            @include('layouts.form')
        </form>
    </div>
@endsection
