<x-guest-layout>
    <main>
        <section id="text">
            <h1>Auta 2</h1>
            <p>Lore filmu.</p>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($auuta as $auta)
                <div class="karta">
                    <img
                            src="img/{{$aut->id}}.png"
                            alt="{{$aut ->jmeno}}"
                        >
                    <a href="{{ route('carModel.route', ['id' => $aut->id])}}">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            @endforeach
        </section>

    </main>
</x-guest-layout>