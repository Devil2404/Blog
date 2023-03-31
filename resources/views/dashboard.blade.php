<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/dasboard.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1>
            Bodhi
        </h1>
        <a href="/dashboard/{{ $name }}">
            {{ $name }}
        </a>
    </div>
    <div class="functions">
        <h3>
            Hello {{ $name }},
        </h3>
        <div class="function">
            <h4>
                <a href="{{ url('user/' . $name . '/edit') }}">
                    Update Profile
                </a>
            </h4>
            <h4>

                <a href="  {{ url($name . '/post/create') }}">
                    Add Post
                </a>
            </h4>
            <h4>
                <a href="/logout">
                    Log out
                </a>
            </h4>
        </div>
    </div>
    <div class="blog_container">
        @foreach ($data as $post)
            <div class="userBlog">
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
                <div class="btns">
                    <button>
                        <a href="{{ url($post->id . '/post' . '/' . $name . '/edit') }}">
                            Update
                        </a>
                    </button>
                    <button>
                        <a href="{{ url($post->id . '/post' . '/' . $name . '/delete') }}">
                            Delete
                        </a>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</body>


</html>
