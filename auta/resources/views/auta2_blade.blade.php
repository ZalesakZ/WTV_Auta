<x-guest-layout>
    <main>
        <section id="text">
            <h1>Auta 2</h1>
            <p>Auta 2 (2011) pokračují v dobrodružství Bleska McQueena a jeho přátel, ale tento film se zaměřuje více na postavu Buráka, který se stává hlavní hvězdou příběhu. Blesk McQueen je opět na závodní dráze, ale Burák se dostává do světa špionáže, když se zaplete do tajemné mise, která ho zavede na globální závody a do světa tajných agentů.</p> 
            <br>
            <p>Burák, který je zvyklý na svou roli pomocníka a přítele, se ocitá ve světě plném špionážních technologií, nebezpečných situací a neznámých nepřátel. Spolu s agentem Finnem McMissilem a holandskou špionkou Holley Shiftwell se snaží odhalit nebezpečný spiknutí a zachránit svět. Tento film přináší více akce a napětí než jeho předchůdce, ale stále si udržuje humor a rodinnou atmosféru, díky které si získal fanoušky po celém světě.</p>
            <br>
            <p>Auta 2 se od svého předchůdce liší tím, že přináší nový žánr, špionážní thriller, do světa aut, což je zajímavé pro starší publikum i pro děti. I když film není tak zaměřen na osobní růst postav jako první díl, stále se zaměřuje na přátelství a loajalitu. Burákovo dobrodružství v něm ukazuje, jak důležité je věřit v sebe a nikdy neztratit smysl pro humor, i když se ocitneme v naprosto neobvyklých a nebezpečných situacích.</p>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleAuta2 as $auto)
                <div class="karta">
                    <img
                            src="img/{{$auto->fixni_ID}}.png"
                            alt="{{$auto ->jmeno}}"
                        >
                    <a href="{{ route('carModel_blade.route', ['fixni_ID' => $auto->fixni_ID])}}">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            @endforeach
        </section>
    </main>
</x-guest-layout>