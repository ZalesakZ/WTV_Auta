<x-guest-layout>
    <main>
        <section id="text">
            <h1>Auta 2</h1>
            <p>Lore filmu.</p>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleAuta2 as $auto)
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