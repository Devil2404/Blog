<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $data[0]->title }}</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/dasboard.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('css/view.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1>
            Bodhi
        </h1>
    </div>
    <div class="functions">
        <h3>
            {{ $data[0]->title }}
        </h3>
        <div class="function">
            <h4>
                # {{ $data[0]->category }}
            </h4>
            <h4>
                {{ $data[0]->created_at }}
            </h4>
        </div>
    </div>

    <div class="desc">
        <p>
            {{ $data[0]->description }}
        </p>
    </div>
    <div class="essay">
        <p>
            {{ $data[0]->blog }}
        </p>
    </div>
</body>

</html>
