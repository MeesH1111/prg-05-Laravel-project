<x-layout>
    <div class="max-w-lg mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Schrijf een review voor {{ $item->name }}</h1>

        <form action="{{ url('products/' . $item->id . '/review') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                <input type="text" id="name" name="name"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Beschrijving</label>
                <input type="text" id="description" name="description"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Verzend Review</button>
        </form>
    </div>
</x-layout>

