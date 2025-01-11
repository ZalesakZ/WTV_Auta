<x-guest-layout>
        <main id="detail">
            <div class="karta">
                <h2>{{ $poleVsechnyAuta->jmeno }}</h2>
                <img
                    src="{{ asset("img/" . $poleVsechnyAuta->ID_obrazku . ".png")}}"
                    alt="{{ $poleVsechnyAuta->nazev}}"
                >

                <ul>
                    <li>Typ: {{ $poleVsechnyAuta->typ }}</li>
                    <li>Je závodník?: {{ $poleVsechnyAuta->zavodnik }}</li>
                    <li>Počet pohárů: {{ $poleVsechnyAuta->pocet_poharu }}</li>
                    <li>Základní info: {{ $poleVsechnyAuta->historie }}</li>
                    <p>Objevilo se v těchto médiích?</p>
                    <li>Auta 1: {{ $poleVsechnyAuta->auta1 }}</li>
                    <li>Auta 2: {{ $poleVsechnyAuta->auta2 }}</li>
                    <li>Auta 3: {{ $poleVsechnyAuta->auta3 }}</li>
                    <li>Hry: {{ $poleVsechnyAuta->hry }}</li>
                    <li>Seriály: {{ $poleVsechnyAuta->serialy }}</li>
                </ul>
                
                <a href="{{ url()->previous() }}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
        </main>
        @livewire('product-ratings', ['product' => $poleVsechnyAuta], key($poleVsechnyAuta->id))
</x-guest-layout>
