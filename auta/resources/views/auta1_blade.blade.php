<x-guest-layout> <!-- Načte layout z guest.blase.php-->
    <main> <!--Hlavní obsah stránky-->
        <section id="text">
            <h1>Auta 1</h1>
            <p>Film Auta (2006) od Pixaru je animovaný příběh o závodním autu Bleskovi McQueenovi, které se na své cestě do nového závodního závodu ztratí a skončí v zapadlé vesnici jménem Radiator Springs. Zde se Blesk setká s řadou neobvyklých postav, jako je Sally Carrera, Filmore, Burák, Luigi a mnoho dalších, kteří mu ukážou, že život není jen o rychlosti a závodech, ale také o hodnotách jako přátelství, laskavost a rodina.</p>
            <br>
            <p>Blesk McQueen, dosud nezkušený ve věcech mimo závodní dráhu, se musí naučit zpomalit a pochopit, že není všechno o vítězství a osobním úspěchu. Film zkoumá důležitost vztahů a osobního růstu, když se Blesk stává součástí komunity a začíná chápat hodnoty, které mu jeho přátelé z Radiator Springs ukazují.</p>
            <br>
            <p>Ať už jde o závodní dráhu nebo životní lekce, Auta ukazují, že skutečná vítězství nejsou vždy měřena trofejemi nebo cenami, ale tím, jak se měníme a jaké vztahy si vytváříme na cestě. Film oslovil diváky všech věkových kategorií a stal se nejen komerčně úspěšným, ale také kultovním pro svou kombinaci humoru, emocí a rodinné zábavy.</p>
        </section>
        <hr>
        <section id="galerie">
        <!--
        Pomocí foreach cyklu se prochází všechny auta, která jsou v proměnné $poleAuta, což je kolekce dat, která byla předána
        z PageControlleru z modelu ModelAuto1
        Pro každé auto (uložené jako $auto) se vytvoří HTML blok s obrázkem auta a odkazem
        -->
            @foreach ($poleAuta as $auto)
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