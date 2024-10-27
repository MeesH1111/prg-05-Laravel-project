<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
    <a href="{{ url('/products') }}" class="text-gray-700 hover:text-blue-600">Products</a>
    </div>
</nav>
<main class="p-6">
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
    <h2 class="text-2xl font-semibold m-4 p-6">Items</h2>

    <div class="bg-gray-200 p-4 rounded-t-lg grid grid-cols-8 gap-4 font-semibold text-gray-700 text-center">
        <p>ID</p>
        <p>Naam</p>
        <p>Beschrijving</p>
        <p>Geplaatst door</p>
        <p>Categorie</p>
        <p>Geplaatst op</p>
        <p>Geupdate op</p>
    </div>

    <div class="space-y-2">
        @foreach($items as $item)
            <div class="bg-white p-3 grid grid-cols-8 gap-0 rounded-lg shadow-md items-center text-center">
                <p class="text-sm text-gray-800">{{ $item->id }}</p>
                <p class="text-sm text-gray-800">{{ $item->name }}</p>
                <p class="text-sm text-gray-600">{{ $item->description }}</p>
                <p class="text-sm text-gray-600">{{ $item->user ? $item->user->name : "Onbekend" }}</p>
                <p class="text-sm text-gray-600">{{ $item->category ? $item->category->name : "Geen categorie" }}</p>
                <p class="text-sm text-gray-600">{{ $item->created_at->format('d-m-Y') }}</p>
                <p class="text-sm text-gray-600">{{ $item->updated_at->format('d-m-Y') }}</p>

                <div class="space-x-4 flex justify-center">
                        <a href="{{ route('admin.editItems', $item->id) }}" class="text-yellow-600 hover:underline">Bewerken</a>
                        <form action="{{ route('admin.deleteItems', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je dit item wilt verwijderen?');">
                            @method('delete')
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-1.5 px-3 border-b-4 border-red-700 hover:border-red-500 rounded">Verwijderen</button>
                        </form>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        <h2 class="text-2xl font-semibold m-4 p-6">Users</h2>
    </div>

    <div class="bg-gray-200 p-4 rounded-t-lg grid grid-cols-8 gap-4 font-semibold text-gray-700 text-center">
        <p>ID</p>
        <p>Naam</p>
        <p>Email</p>
        <p>Created</p>
        <p>Admin</p>
        <p></p>
        <p></p>
    </div>

    <div class="space-y-2">
        @foreach($users as $user)
            <div class="bg-white p-3 grid grid-cols-8 gap-0 rounded-lg shadow-md items-center text-center">
                <p class="text-sm text-gray-800">{{ $user->id }}</p>
                <p class="text-sm text-gray-800">{{ $user->name }}</p>
                <p class="text-sm text-gray-600">{{ $user->email }}</p>
                <p class="text-sm text-gray-600">{{ $user->created_at->format('d-m-Y') }}</p>
                @if($user->is_admin === 1)
                    <p class="text-sm text-gray-600">Yes</p>
                @else
                    <p class="text-sm text-gray-600">No</p>
                @endif
                <p></p>
                <p></p>

                <div class="space-x-4 flex justify-center">
                        <a href="{{ route('profile.edit', ['user' => $user->id]) }}" class="text-yellow-600 hover:underline">Bewerken</a>
                        <form action="{{ route('profile.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je dit item wilt verwijderen?');">
                            @method('delete')
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-1.5 px-3 border-b-4 border-red-700 hover:border-red-500 rounded">Verwijderen</button>
                        </form>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        <h2 class="text-2xl font-semibold m-4 p-6">Categories</h2>
    </div>

    <div class="bg-gray-200 p-4 rounded-t-lg grid grid-cols-8 gap-4 font-semibold text-gray-700 text-center">
        <p>ID</p>
        <p>Naam</p>
        <p>Created</p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>

    </div>

    <div class="space-y-2">
        @foreach($categories as $category)
            <div class="bg-white p-3 grid grid-cols-8 gap-0 rounded-lg shadow-md items-center text-center">
                <p class="text-sm text-gray-800">{{ $category->id }}</p>
                <p class="text-sm text-gray-800">{{ $category->name }}</p>
                <p class="text-sm text-gray-600">{{ $category->created_at->format('d-m-Y') }}</p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>


                <div class="space-x-4 flex justify-center">
                        <a href="{{ route('admin.editCategory', $category->id) }}" class="text-yellow-600 hover:underline">Bewerken</a>
                        <form action="{{ route('admin.deleteCategory', $category->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je dit item wilt verwijderen?');">
                            @method('delete')
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-1.5 px-3 border-b-4 border-red-700 hover:border-red-500 rounded">Verwijderen</button>
                        </form>
                </div>
            </div>
        @endforeach
    </div>
</main>
</body>
</html>
