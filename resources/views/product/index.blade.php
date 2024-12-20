<x-layout>
@auth
    <div class="container mx-auto px-4 py-8">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul class="mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="text-3xl font-bold mb-6">ITEMS</h1>

        <form action="{{ route('products.index') }}" method="GET" class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <h2 class="font-semibold text-gray-700 mb-2">Filter op categorie:</h2>
                    <div class="space-y-2">
                        @foreach($categories as $category)
                            <div>
                                <input type="checkbox" name="category[{{ $category->id }}]" value="{{ $category->id }}" class="mr-2">
                                <label>{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-span-2">
                    <h2 class="font-semibold text-gray-700 mb-2">Zoek op naam:</h2>
                    <div class="flex">
                        <form>
                            @csrf
                            <input type="text" name="search" placeholder="Zoeken..." class="border border-gray-300 p-2 rounded-l-lg flex-grow">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg">Zoeken</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($items as $item)
                @if($item->is_visible !== 0)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold text-gray-800">{{ $item->name }}</h2>
                    <h3 class="font-medium text-gray-800">{{ $item->description }}</h3>
                    <p class="text-sm text-gray-600">Categorie: {{ $item->category ? $item->category->name : "Geen categorie" }}</p>
                    <p class="text-sm text-gray-600">Geplaatst door: {{ $item->user ? $item->user->name : "Onbekend" }}</p>
                    <p class="text-sm text-gray-600">Geplaatst op: {{ $item->created_at->format('d-m-Y') }}</p>

                    <div class="mt-4 space-x-4">
                        <a href="{{ route('products.show', $item->id) }}" class="text-blue-600 hover:underline">Inspecteren</a>
                        @if(auth()->user()->is_admin || auth()->user()->id === $item->user_id)
                            @if($user->items()->where('user_id', $user->id)->count() >= 5 || $user->is_admin)
                                <a href="{{ route('products.edit', $item->id) }}" class="text-yellow-600 hover:underline">Bewerken</a>
                            @endif
                            <form action="{{ route('products.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je dit item wilt verwijderen?');">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-red-600 hover:underline">Verwijderen</button>
                            </form>
                        @endif
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        @if(isset(request()->search) && (request()->search != null) || isset(request()->category) && (request()->category != null))
        <div class="mt-8">
            <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline">Terug naar alle items</a>
        </div>
        @endif
    </div>
@endauth

@guest
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">ITEMS</h1>
        <p class="text-gray-600">Je bent niet ingelogd. Log in om alle items te zien.</p>
    </div>
@endguest

</x-layout>
