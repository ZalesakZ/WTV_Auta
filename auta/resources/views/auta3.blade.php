<x-guest-layout>
    <main>
        <section id="text">
            <h1>Auta 3</h1>
            <p>Lore filmu.</p>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleAuta3 as $auto)
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