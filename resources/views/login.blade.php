<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1>
            <a href="/">
                Bodhi
            </a>
        </h1>
    </div>
    <div class="form_container">
        <h3>
            Login & create , read ,share more blogs
        </h3>
        <form method="post" id="form" action="/login">

            @csrf
            <input type="email" name="email" placeholder="Enter Your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" name="repassword" id="signup" placeholder="Re-enter your password">
            <input type="submit">
        </form>
        <div class="options">
            <h4 onclick="signup(false)">
                Sign in
            </h4>
            <h4 onclick="signup(true)">
                Sign up
            </h4>
        </div>
    </div>

</body>
<script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>

</html>
