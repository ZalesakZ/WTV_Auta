<x-guest-layout>
<main>
        <section id="text">
            <h1>Seriály</h1>
            <div>
                <h3>Burákovi povídačky</h3>
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
                            src="img/{{$auto->id}}.png"
                            alt="{{$auto ->jmeno}}"
                        >
                    <a href="{{ route('carModel.route', ['id' => $auto->id])}}">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            @endforeach
        </section>

    </main>
</x-guest-layout>