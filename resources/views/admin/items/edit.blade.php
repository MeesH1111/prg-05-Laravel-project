<x-layout>
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Bewerk Item</h1>

        <form action="{{ route('admin.updateItems', $item->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Naam Item</label>
                <input type="text" id="name" name="name" value="{{ $item->name }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Beschrijving Item</label>
                <input type="text" id="description" name="description" value="{{ $item->description }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Categorie Item</label>
                <select name="category" id="category"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Update</button>
                <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-gray-800 hover:underline">Terug</a>
            </div>

            <div class="mt-4">
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        <ul class="mt-2 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </form>
    </div>
</x-layout>
