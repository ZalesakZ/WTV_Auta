<x-guest-layout>
        <main id="detail">
            <div class="karta">
                <h2>{{ $poleAuta->jmeno }}</h2>
                <img
                    src="{{ asset("img/" . $poleAuta->ID_obrazku . ".png")}}"
                    alt="{{ $poleAuta->nazev}}"
                >

                <ul>
                    <li>Typ: {{ $poleAuta->typ }}</li>
                    <li>Je závodník?: {{ $poleAuta->zavodnik }}</li>
                    <li>Počet pohárů: {{ $poleAuta->pocet_poharu }}</li>
                    <li>Základní info: {{ $poleAuta->historie }}</li>
                    <p>Objevilo se v těchto médiích?</p>
                    <li>Auta 1: {{ $poleAuta->auta1 }}</li>
                    <li>Auta 2:  {{ $poleAuta->auta2 }}</li>
                    <li>Auta 3: {{ $poleAuta->auta3 }}</li>
                    <li>Hry:  {{ $poleAuta->hry }}</li>
                    <li>Seriály:  {{ $poleAuta->serialy }}</li>
                </ul>
                
                <a href="{{ url()->previous() }}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
        </main>
        @livewire('product-ratings', ['product' => $poleAuta], key($poleAuta->id))
</x-guest-layout>
