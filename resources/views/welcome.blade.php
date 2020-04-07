<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .alert-height{
                margin-bottom: 100px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        @if(isset($success))
            <div class="alert alert-success alert-height">
                {{ $success }}
            </div>
        @endif

        @if( count($posts) > 0)

            @foreach($posts as $key => $post)

                <div class="content m-5">

                    <div class="card text-center ml-5 mr-5">
                        <div class="card-header bg-dark text-white">
                            <h4>{{ $post->title }}</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $post->body }}</p>

{{--                            <a href="/post-details/{{ $post->id }}/{{ $post->title }}/{{ $post->body }}/{{ $post->created_at }}" class="btn btn-primary">View Details</a>--}}
                            <a href="/post-details/{{ $post->id }}" class="btn btn-primary">View Details</a>
                        </div>
                        <div class="card-footer">
                            <span class="text-muted">created at: </span> {{ $post->created_at }}
                        </div>
                    </div>
                </div>

            @endforeach

        @else

            <div class="text-center mt-5 mb-5 text-danger">
                <h1>No posts has been created yet!</h1>
            </div>

        @endif


    </body>
</html>
