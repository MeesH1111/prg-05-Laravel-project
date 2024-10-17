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
    <h1>Schrijf een review voor {{ $item->name }}</h1>
    @csrf
    <form action= "{{ route('products.store', $item->id) }}" method="post">
        <label for="name">Name Review:</label>
        <input type="text" id="name" name="name">

        <label for="description">Description Review:</label>
        <input type="text" id="description" name="description">

        <button type="submit">Submit</button>

        <div>
            <a href="{{ route('products.show', $item->id) }}">Terug</a>
        </div>
    </form>
</body>
</html>
