<x-guest-layout>
    <main>
        <section id="text">
            <h1>Auta 3</h1>
            <p>Auta 3 (2017) se vrací k Bleskovi McQueenovi, který čelí nové výzvě, tentokrát od mladé generace závodníků. Po sérii neúspěchů a vysoce technizovaných závodních autech je Blesk McQueen postaven před skutečný test své kariéry, když se objeví nový závodní fenomén – Jackson Storm, moderní a vysoce technologický závodník, který ohrožuje McQueenovu pozici v závodní sérii.</p>
            <br>
            <p>Film ukazuje Bleska ve chvíli, kdy se musí vyrovnat se svou starší verzí a novými trendy v závodění, které si dříve neuvědomoval. Po zranění, které ohrozí jeho závodní kariéru, se Blesk rozhodne najít novou cestu k úspěchu a opět se dostat zpět na vrchol. Příběh také zahrnuje přátelskou postavu Cruz Ramirezové, která se stává jeho trenérkou a podporuje ho na cestě k obnovení jeho důvěry v sebe a návratu do závodního života.</p>
            <br>
            <p>Auta 3 se zaměřují na téma stárnutí, změny a přijetí nových věcí, čímž oslovují nejen mladé publikum, ale i dospělé, kteří mohou vztáhnout tyto lekce k vlastnímu životu. Tento film je nejen o závodění, ale také o tom, jak se vyrovnat s neúspěchem, jak se postavit novým výzvám a jak se učit od mladší generace. Na konci si Blesk uvědomí, že závodní vítězství není vše, co je v životě důležité, a že může být hrdý na to, co prožil a co ještě může předat dalším generacím.</p>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleAuta3 as $auto)
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