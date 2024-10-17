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
    <p>ID: {{ $item->id }}</p>
    <p>Description: {{ $item->description }}</p>
    <p>Tags: {{ $item->tags }}</p>
    @if($review->id >= 0)
        <h2>Reviews: </h2>
        <p>{{ $review->description }}</p>
    @endif
    <a href="{{ route('review.show', $review->id) }}">Schrijf een review</a>
    <div>
        <a href="{{ route('products.index') }}">Terug</a>
    </div>



</body>
</html>
