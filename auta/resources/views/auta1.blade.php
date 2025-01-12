<x-guest-layout> <!-- Načte layout z guest.blase.php-->
    <main> <!--Hlavní obsah stránky-->
        <section id="text">
            <h1>Auta 1</h1>
            <p>Lore filmu.</p>
        </section>
        <hr>
        <section id="galerie">
        <!--
        Pomocí foreach cyklu se prochází všechny auta, která jsou v proměnné $poleAuta, což je kolekce dat, která byla předána
        z PageControlleru z modelu ModelAuto1
        Pro každé auto (uložené jako $auto) se vytvoří HTML blok s obrázkem auta a odkazem
        -->
            @foreach ($poleAuta as $auto)
                <div class="karta">
                    <img
                            src="img/{{$auto->ID_obrazku}}.png"
                            alt="{{$auto ->jmeno}}"
                        >
                    <a href="{{ route('carModel.route', ['ID_obrazku' => $auto->ID_obrazku])}}">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            @endforeach
        </section>

    </main>
</x-guest-layout>