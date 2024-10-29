<x-layout>
    <div class="container mx-auto mt-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $item->name }}</h1>
            <ul class="text-gray-600 mb-6">
                <li class="mb-2"><span class="font-semibold">ID:</span> {{ $item->id }}</li>
                <li class="mb-2"><span class="font-semibold">Description:</span> {{ $item->description }}</li>
                <li><span class="font-semibold">Categorie:</span> {{ $item->category ? $item->category->name : "Geen category" }}</li>
            </ul>

            <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-4">Reviews:</h2>
            <div class="space-y-4">
                @foreach($reviews as $review)
                    <div class="p-4 bg-gray-100 rounded-md shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-700">{{ $review->name }}</h3>
                        <p class="text-gray-600">{{ $review->description }}</p>
                        <p class="text-sm text-gray-500 mt-2">
                            Geschreven door: {{ $review->user ? $review->user->name : "Onbekend" }},
                            Geplaatst op: {{ $review->created_at }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                <a href="{{ route('review.show', $item->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    Schrijf een review
                </a>
                <a href="{{ route('products.index') }}" class="ml-4 inline-block text-gray-600 hover:underline">
                    Terug
                </a>
            </div>
        </div>
    </div>
</x-layout>
