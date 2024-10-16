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
    <h1>Product.show</h1>
    <h2>{{ $item->name }}</h2>
    <p>Laat hier het speciefieke item uit de database zien</p>
    <p>ID: {{ $item->id }}</p>
    <p>Description: {{ $item->description }}</p>
    <p>Tags: {{ $item->tags }}</p>
    <a href="{{ route('products.index') }}">Terug</a>


</body>
</html>
