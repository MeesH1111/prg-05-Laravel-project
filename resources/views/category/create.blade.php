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
<h1>Voeg een categorie toe</h1>
<form action= "{{ route('category.store') }}" method="post">
    @csrf

    <label for="name">Category Name:</label>
    <input type="text" id="name" name="name">

    <button type="submit">Submit</button>

    <div>
        <a href="{{ route('products.index') }}">Terug</a>
    </div>
</form>
</body>
</html>
