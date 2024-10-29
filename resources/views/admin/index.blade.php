<x-layout>
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
    <h2 class="text-2xl font-semibold m-4 p-6">Items</h2>

    <div class="bg-gray-200 p-4 rounded-t-lg grid grid-cols-9 gap-4 font-semibold text-gray-700 text-center">
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
            <div class="bg-white p-3 grid grid-cols-9 gap-0 rounded-lg shadow-md items-center text-center">
                <p class="text-sm text-gray-800">{{ $item->id }}</p>
                <p class="text-sm text-gray-800">{{ $item->name }}</p>
                <p class="text-sm text-gray-600">{{ $item->description }}</p>
                <p class="text-sm text-gray-600">{{ $item->user ? $item->user->name : "Onbekend" }}</p>
                <p class="text-sm text-gray-600">{{ $item->category ? $item->category->name : "Geen categorie" }}</p>
                <p class="text-sm text-gray-600">{{ $item->created_at->format('d-m-Y') }}</p>
                <p class="text-sm text-gray-600">{{ $item->updated_at->format('d-m-Y') }}</p>

                <div class="flex justify-center items-center">
                    <form action="{{ route('admin.toggle.visibility', $item->id) }}" method="POST">
                        @csrf
                        <label class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" name="is_visible" onchange="this.form.submit()"
                                   {{ $item->is_visible ? 'checked' : '' }}
                                   class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-checked:bg-blue-600 peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600"></div>
                        </label>
                    </form>
                </div>

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

    <div class="bg-gray-200 p-4 rounded-t-lg grid grid-cols-9 gap-4 font-semibold text-gray-700 text-center">
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
            <div class="bg-white p-3 grid grid-cols-9 gap-0 rounded-lg shadow-md items-center text-center">
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

    <div class="bg-gray-200 p-4 rounded-t-lg grid grid-cols-9 gap-4 font-semibold text-gray-700 text-center">
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
            <div class="bg-white p-3 grid grid-cols-9 gap-0 rounded-lg shadow-md items-center text-center">
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
</x-layout>
