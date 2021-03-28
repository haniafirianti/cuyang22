<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME')}}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/costume-front-page.css') }}">
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right">
            @auth
            <a href="{{ url('chat') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title">
                <img src="{{ asset('images/cuyang/dear-cuyang.jpeg') }}" width="375px" height="auto">
            </div>

            <div class="group-name">
                <span>Candra|Ahmad|Dede|Hania|Santi</span>
            </div>
        </div>
    </div>
</body>

</html>