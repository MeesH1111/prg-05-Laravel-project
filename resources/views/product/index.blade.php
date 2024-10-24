<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
        <a href="{{ route('products.create') }}">Item toevoegen</a>
        @if(auth()->user()->is_admin)
            <a href="{{ url('category/create') }}">Category toevoegen</a>
        @endif

    @endauth


</nav>

    @auth()
        <h1>ITEMS</h1>
        <form action="{{ route('products.index') }}" method="GET">
            <div>

            @foreach($categories as $catogory)
                <input type="checkbox" name="category[{{ $catogory->id }}]" value="{{ $catogory->id }}">
                <label>{{ $catogory->name }}
                </label>
            @endforeach()
            </div>
            <div>
            <input type="text" name="search" placeholder="zoeken">
            <button type="submit">Zoeken</button>
            </div>
        </form>
        @foreach($items as $item)
                <li>Item name: {{ $item->name  }}</li>
                <li>Geplaatst door: {{ $item->user ? $item->user->name : "Onbekend" }}</li>
                <li>Categorie: {{ $item->category ? $item->category->name : "Geen categorie" }}</li>
                <li>Geplaatst op: {{ $item->created_at }}</li>


                <div>

                    <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <a href="{{ route('products.show', $item->id) }}">Inspecteren</a>
                        @if(\Auth::user()->is_admin || auth()->user()->id === $item->user_id)
                         <a href="{{ route('products.edit', $item->id) }}">Edit</a>
                            <button class="ms-1">Delete Item</button>
                        @endif



                    </form>
                </div>
                <p>---------------------------------------------<p>


        @endforeach
        <a href="{{ route('products.index') }}">Terug naar alle items</a>
    @endauth

    @guest()
        <h1>ITEMS</h1>
        <p>Je bent niet ingelogd. Log in om alle items te zien.</p>
    @endguest
</body>
</html>
