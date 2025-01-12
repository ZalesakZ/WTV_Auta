<x-guest-layout>
<main>
        <section id="text">
            <h1>Seriály</h1>
            <div>
                <h3>Burákovy povídačky</h3>
                <p>Lore seriálu.</p>
            </div>
            <div>
                <h3>Auta na cestách</h3>
                <p>Lore seriálu.</p>
            </div>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleSerialy as $auto)
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