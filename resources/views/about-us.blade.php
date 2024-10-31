<x-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        @auth()
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Welkom, {{ Auth::user()->name }}!</h1>
            <div class="text-gray-700 leading-relaxed">
                <p class="pb-6">
                    Dit is een website waar je je mooie verzameling aan spullen of persoonlijke items kan delen met anderen.
                    Of bekijk allerlei verschillende items die door andere gebruikers zijn geplaatst.
                </p>
                <p class="pb-6">
                    Klik op <span class="font-semibold">‘Item Toevoegen’</span> om een nieuw item toe te voegen aan de website. Vul de naam en beschrijving in en kies een passende categorie.
                    Je kunt ook gewoon rondkijken en het scala aan items verkennen dat anderen hebben gepost. Voeg zelfs een comment toe als je dat leuk vindt!
                </p>
                <p class="pb-6">
                    Als je een item hebt gepost en iets bent vergeten toe te voegen of niet helemaal tevreden bent met de beschrijving, kun je het item bewerken. Houd er wel rekening mee dat je eerst minstens vijf items op de website moet hebben geplaatst om je eigen items te kunnen aanpassen.
                </p>
                <p class="pb-6">
                    Veel plezier met het gebruik van de website!
                </p>
            </div>
        @endauth

        @guest()
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Welkom op onze website!</h1>
                <div class="text-gray-700 leading-relaxed">
                    <p class="pb-6">
                        Dit is een website waar je je mooie verzameling aan spullen of persoonlijke items kan delen met anderen.
                        Bekijk allerlei verschillende items die door andere gebruikers zijn geplaatst.
                    </p>
                    <p class="pb-6">
                        Klik op <span class="font-semibold">‘Item Toevoegen’</span> om een nieuw item toe te voegen aan de website. Vul de naam en beschrijving in en kies een passende categorie.
                        Je kunt ook gewoon rondkijken en het scala aan items verkennen dat anderen hebben gepost. Voeg zelfs een comment toe als je dat leuk vindt!
                    </p>
                    <p class="pb-6">
                        Als je een item hebt gepost en iets bent vergeten toe te voegen of niet helemaal tevreden bent met de beschrijving, kun je het item bewerken. Houd er wel rekening mee dat je eerst minstens vijf items op de website moet hebben geplaatst om je eigen items te kunnen aanpassen.
                    </p>
                    <p class="pb-6">
                        Veel plezier met het gebruik van de website!
                    </p>
                </div>
        @endguest
    </div>
</x-layout>
