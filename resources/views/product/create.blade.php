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
<h1>Maak een Item</h1>
<form action= "{{ route('products.store') }}" method="post">
    @csrf

    <label for="name">Name Item:</label>
    <input type="text" id="name" name="name">

    <label for="description">Description Item:</label>
    <input type="text" id="description" name="description">

    <label for="category">Category Item:</label>
    <select name="category" id="category">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{$category->name}}</option>
        @endforeach
    </select>

    <button type="submit">Submit</button>

    <div>
        <a href="{{ route('products.index') }}">Terug</a>
    </div>
</form>
</body>
</html>
