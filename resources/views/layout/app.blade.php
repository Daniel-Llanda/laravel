<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('landing') }}">LANDING PAGE</a>
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('profile') }}">PROFILE</a>
            <a href="{{ route('events') }}">EVENTS</a>
            <a href="{{ route('news') }}">NEWS</a>
            <a href="{{ route('contacts') }}">CONTACT</a>
        </nav>
    </header>
    @yield('content')
    
</body>
</html>