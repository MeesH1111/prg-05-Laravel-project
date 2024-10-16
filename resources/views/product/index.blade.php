<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<nav>
    <a href="{{ url('/') }}">Welcome</a>
    <a href="{{ url('/about-us') }}">About us</a>
    <a href="{{ url('/contact') }}">Contact</a>
    <a href="{{ url('/products') }}">Products</a>
    <a href="{{ url('/dashboard') }}">Dashboard</a>
    @guest()
        <a href="{{ url('/login') }}">Inloggen</a>
    @endguest
    @auth()
        <a href="{{ url('/dashboard') }}">Uitloggen</a>
    @endauth


</nav>
<a>
    @auth()
        <h1>ITEMS</h1>
        @foreach($items as $item)
                <li>Item name: {{ $item->name  }}</li>
                <a href="{{ route('products.show', $item->id) }}">Inspecteren</a>
                <p>---------------------------------------------<p>


        @endforeach
    @endauth

    @guest()
        <h1>About {{$company}}</h1>
        <p>Je bent niet ingelogd. Je bent hier als gast</p>
    @endguest
</body>
</html>
