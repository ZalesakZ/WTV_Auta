<x-guest-layout>
        <main id="detail">
            <div class="karta">
                <h2>{{ $poleAuta->jmeno }}</h2>
                <img
                    src="{{ asset("img/" . $poleAuta->id . ".png")}}"
                    alt="{{ $poleAuta->nazev}}"
                >
                <div class="typy">
                        <span>
                            {{ $poleAuta->typ }}
                        </span>
                </div>
                <p>
                    {{ $poleAuta->historie }}
                </p>
                <a href="{{ url()->previous() }}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
        </main>
        @livewire('product-ratings', ['product' => $poleAuta], key($poleAuta->id))
</x-guest-layout>
