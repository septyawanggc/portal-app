<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/landing.css')}}" rel="stylesheet">
    
    <title>Welcome</title>
</head>
<body>
    <header>
    <div class="logo">PT.Air Semarang Barat </div>
    <nav>
        <ul>
        @if (Route::has('login'))
            @auth
            <li><a href="{{ url('/dashboard') }}">Home</a></li>
            @else
            <li><a href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            @endauth
        @endif
        </ul>
    </nav>
    </header>

</body>
</html>