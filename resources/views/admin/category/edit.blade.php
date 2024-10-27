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
<h1>Wijzig een categorie</h1>
<form action= "{{ route('admin.updateCategory', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Category Name:</label>
    <input type="text" id="name" name="name" value="{{ $category->name }}" required>

    <button type="submit">Submit</button>

    <div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul class="mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a href="{{ route('admin.index') }}">Terug</a>
    </div>
</form>
</body>
</html>
