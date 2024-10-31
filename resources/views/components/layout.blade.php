<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="space-x-4">
                <x-nav-link href="/" class="ml-4 text-gray-700 hover:text-blue-600">About us</x-nav-link>
                <x-nav-link href="/products" class="ml-4 text-gray-700 hover:text-blue-600">Products</x-nav-link>
            </div>
            <div>
            @guest()
                <x-nav-link href="/login" class="ml-4 text-gray-700 hover:text-blue-600">login</x-nav-link>
             @endguest
            @auth()
                <x-nav-link href="/dashboard" class="ml-4 text-gray-700 hover:text-blue-600">Dashboard</x-nav-link>
                <x-nav-link href="/products/create" class="ml-4 text-gray-700 hover:text-blue-600">Item toevoegen</x-nav-link>
                @if(auth()->user()->is_admin)
                    <x-nav-link href="{{ url('category/create') }}" class="ml-4 text-gray-700 hover:text-blue-600">Category toevoegen</x-nav-link>
                    <x-nav-link href="{{ url('admin') }}" class="ml-4 text-gray-700 hover:text-blue-600">Admin Dashboard</x-nav-link>
                    @endif
            @endauth
            </div>
        </div>


    </nav>

    <main class="p-6">
        {{ $slot }}
    </main>
</body>
</html>
