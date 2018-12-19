<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}">
    <title>@yield('title')</title>
</head>
<div class="top-nav">
    <ul>
    <li><a href="{{URL::asset('/')}}">Home</a></li>
        @if (Route::has('login'))
            @auth
                <li><a href="/">{{Auth::user()->email}}</a></li>
                <li><button onclick="{{Auth::logout()}}">log uit</button></li>
            @else
                <li><a href="{{ route('login') }}">Log in</a></li>
            @endauth

        @endif
    <li><a href="{{URL::asset('/products')}}">Assortiment</a></li>
    </ul>
</div>
<div class="image">

</div>

</div>
</body>
</html>