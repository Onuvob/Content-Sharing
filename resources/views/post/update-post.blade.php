@extends('layouts.app')

@section('content')



    <div class="container">

        @if(session()->has('success'))
            <div class="alert alert-success alert-height">
                {{ session()->get('success') }}
            </div>
        @endif

        <div>
            <h2 class="text-danger">Update Post</h2>
        </div>
        <form class="m-5" method="put" action="/update-post/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @include('layouts.form')
        </form>
    </div>
@endsection
