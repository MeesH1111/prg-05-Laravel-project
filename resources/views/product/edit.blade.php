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
    <main>
        <form action="{{ route('products.update', $item->id) }}" method="POST">


            @csrf
            @method('PUT')
            <label for="name">Name Item: </label>
            <input type="text" id="name" name="name" value="{{ $item->name }}">
{{--           Het lijkt wel alsof $item->name en alle ander $items->... NIET worden meegegeven --}}

            <label for="description">Description Item:</label>
            <input type="text" id="description" name="description" value="{{ $item->description }}">

            <label for="category">Category Item:</label>
            <select name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>

            <button type="submit">Update</button>

            <div>
                <a href="{{ route('products.index') }}">Terug</a>
            </div>
        </form>
    </main>
</body>
</html>
