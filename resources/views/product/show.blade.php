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
    <h1>{{ $item->name }}</h1>
    <li>ID: {{ $item->id }}</li>
    <li>Description: {{ $item->description }}</li>
    <li>Categorie: {{ $item->category ? $item->category->name : "Geen category" }}</li>
    <h2>Reviews:</h2>
    @foreach($reviews as $review)
        <h3>{{ $review->name }}</h3>
        <p>{{ $review->description }}</p>
        <p>Geschreven door: {{$review->user ? $review->user->name : "Onbekend"}}, Geplaatst op: {{ $review->created_at }}</p>
        <p>---------------------------------------------</p>
    @endforeach
    <a href="{{ route('review.show', $item->id) }}">Schrijf een review</a>
    <div>
        <a href="{{ route('products.index') }}">Terug</a>
    </div>



</body>
</html>
