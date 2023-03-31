<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Post to Blog Page</title>
    @if (!Session::has('userData'))
        <script type="text/javascript">
            window.location.href = "{{ url('/') }}"
        </script>
    @endif
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('css/postcreate.css') }}" rel="stylesheet">
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
    <div class="form_container">
        <h3>
            Add all the details related to post...!
            <br />
            ALso please verify once before submit.
        </h3>
        <form method="post" action="{{ url("{$name}/post") }}">
            @csrf
            <input type="text" name="title" placeholder="Enter title for post" required>
            <input type="text" name="category" placeholder="Enter category for your post" required>
            <textarea name="description" placeholder="Enter description for your post" required></textarea>
            <textarea name="blog" class="extra" placeholder="Enter your full blog here..." required></textarea>
            <input type="submit" value="Publish">
        </form>
    </div>

</body>

</html>
