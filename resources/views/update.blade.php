<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Your Profile</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
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
                Update Your Profile from here...
            </h3>
            <form method="post"  action="{{ url('/user/' . $name) }}">
                @csrf
                @method('PUT')
                <input type="text" name="userName" value="{{ $post->name }}" placeholder="Enter Your name here"
                    required>
                <input type="number" name="phone_number" value="{{ $post->phone_number }}"
                    placeholder="Enter Your phone number here" required>
                <input type="email" name="email" value="{{ $post->email }}" placeholder="Enter Your email id here"
                    required>
                <input type="submit" value="Update">
            </form>
        </div>
    @endforeach

</body>

</html>
