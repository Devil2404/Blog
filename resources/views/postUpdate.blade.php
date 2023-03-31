<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Your Post</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/postcreate.css') }}" rel="stylesheet">
    @if (!Session::has('userData'))
        <script type="text/javascript">
            window.location.href = "{{ url('/') }}"
        </script>
    @endif
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

    @foreach ($data as $post)
        <div class="form_container">
            <h3>
                Update Your Blog from here...
            </h3>
            <form method="post" action="{{ url($post->id . '/post' . '/' . $name) }}">
                @csrf
                @method('put')
                <input type="text" name="title" value="{{ $post->title }}" placeholder="Enter title for post"
                    required>
                <input type="text" name="category" value="{{ $post->category }}"
                    placeholder="Enter category for post" required>
                <textarea name="description" placeholder="Enter description for your post" required>{{ $post->description }}</textarea>
                <textarea name="blog" class="extra" placeholder="Enter your full blog here..." required>{{ $post->blog }}</textarea>
                <input type="submit" value="Update">
            </form>
        </div>
    @endforeach
</body>

</html>
