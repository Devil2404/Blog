<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1>
            <a href="/">
                Bodhi
            </a>
        </h1>
        <a href="/login" id="admin">
            Login
        </a>
    </div>
    <div class="introMsg">
        <div class="introImg">
            <img src="{{ URL::asset('images/Online document-rafiki.svg') }}" alt="">
        </div>
        <div class="intro">
            <p>
                We are Bodhi , we are here <span>for You</span>. World is <span>Change itself</span> on daily bases and
                <span>rapidly</span> . To
                survive
                read on daily bases , <span>Develop yourself</span> on daily bases
            </p>
        </div>
        <div class="custom-shape-divider-bottom-1680252140">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div class="blogHeading">
        <h1>
            Start Your reading now...
        </h1>
    </div>
    <div class="blog_container">
        @foreach ($data as $post)
            <div class="blog">
                <div class="blog_heading">
                    <h2>
                        <a href="{{ url($post->title) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                </div>
                <div class="blog_description">
                    <p>
                        {{ $post->description }}
                    </p>
                </div>
                <div class="blog_info">
                    <div class="blog_author">
                        <h3>
                            {{ $post->creater }}
                        </h3>
                    </div>
                    <div class="type_time">
                        <div class="blog_type">
                            # {{ $post->category }}
                        </div>
                        <div class="blog_time">
                            {{ $post->created_at }}
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

</body>

</html>
