<x-guest-layout>
        <main>
            <section id="detail">
                <h2 id="name">{{ $poleVsechnyAuta->jmeno }}</h2>
                <div class="karta">
                    <img
                        src='{{ asset("img/" . $poleVsechnyAuta->fixni_ID . ".png")}}'
                        alt="{{ $poleVsechnyAuta->nazev}}"
                    >                
                    <a href="{{ url()->previous() }}">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            </section>
            <section id="poddetail">
                <ul>
                    <li>Typ: {{ $poleVsechnyAuta->typ }}</li>
                    <li>Je závodník: {{ $poleVsechnyAuta->zavodnik }}</li>
                    <li>Počet pohárů: {{ $poleVsechnyAuta->pocet_poharu }}</li>
                </ul>
                <p><strong>Objevilo se v těchto médiích:</strong></p>
                <ul>
                    <li>Auta 1: {{ $poleVsechnyAuta->auta1 }}</li>
                    <li>Auta 2: {{ $poleVsechnyAuta->auta2 }}</li>
                    <li>Auta 3: {{ $poleVsechnyAuta->auta3 }}</li>
                    <li>Hry: {{ $poleVsechnyAuta->hry }}</li>
                    <li>Seriály: {{ $poleVsechnyAuta->serialy }}</li>
                </ul>
                <h3>Informace o autu:</h3>
                <p>{{ $poleVsechnyAuta->info_o_autu }}</p>
            </section>
        </main>
        @livewire('product-ratings', ['product' => $poleVsechnyAuta], key($poleVsechnyAuta->id))
</x-guest-layout>
