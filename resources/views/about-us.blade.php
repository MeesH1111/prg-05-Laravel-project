<x-layout>
    @auth()
        <h1>About {{$company}}</h1>
        <p>Je bent wel ingelogd</p>
    @endauth

    @guest()
        <h1>About {{$company}}</h1>
        <p>Je bent niet ingelogd. Je bent hier als gast</p>
    @endguest
</x-layout>
