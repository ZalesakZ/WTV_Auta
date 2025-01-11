<x-guest-layout>
<main>
<section id="text">
            <h1>Hry</h1>
            <div>
                <h3>Auta</h3>
                <p>Lore hry.</p>
                <p>Gameply.</p>
            </div>
            <div>
                <h3>Burákův národní šampionát</h3>
                <p>Lore hry.</p>
                <p>Gameply.</p>
            </div>
            <div>
                <h3>Dobrodružství z Kardanové Lhoty</h3>
                <p>Lore hry.</p>
                <p>Gameply.</p>
            </div>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleHry as $auto)
                <div class="karta">
                    <img
                            src="img/{{$auto->fixni_ID}}.png"
                            alt="{{$auto ->jmeno}}"
                        >
                    <a href="{{ route('carModel.route', ['fixni_ID' => $auto->fixni_ID])}}">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            @endforeach
        </section>

    </main>
</x-guest-layout>