<x-guest-layout>
<main>
<section id="text">
            <h1>Hry</h1>
            <div>
                <h3>Auta</h3><br>
                <p>Cars: The Videogame je závodní hra založená na filmu Auta. Je dostupná na platformách Xbox, Xbox 360, PlayStation 2, PSP, Nintendo GameCube, Nintendo Wii, Nintendo DS, PC a Game Boy Advance.</p> 
                <p>Hra, která byla vydána 6. června 2006, je prvním titulem v sérii Auta a předchůdcem hry Cars: Mater-National Championship. Xbox 360 a Wii verze byly vydány později téhož roku.</p> 
                <p>V hře mohou hráči ovládat postavy z filmu, jako jsou Blesk McQueen, Burák nebo Sally Carrera, a závodit na tratích inspirovaných filmovým prostředím. Kromě závodů jsou k dispozici mini-hry a mise, které testují závodní dovednosti.</p> 
                <p>Hra také nabízí režimy pro více hráčů, umožňuje soutěžit s přáteli a užívat si zábavu v závodech. Grafika a zvukové efekty věrně kopírují filmovou předlohu, což přináší autentický zážitek pro fanoušky série.</p>
            </div>
            <div>
                <h3>Burákův národní šampionát</h3><br>
                <p>Cars: Mater-National Championship je třetí hrou v sérii videoher Auta a pokračováním Cars: The Videogame. Byla vydána 29. října 2007 pro Wii, Nintendo DS, Game Boy Advance, Xbox 360, PC, PlayStation 2 a PlayStation 3.</p>
                <p>Hra byla později zpřístupněna na Xbox One díky zpětné kompatibilitě 14. listopadu 2017. V této hře hráči závodí s postavami jako Blesk McQueen, Burák a další, v nových závodních arénách a prostředích, inspirovaných druhým filmem Auta.</p>
                <p>Hra obsahuje různé závodní režimy, včetně oficiálních soutěží, a nově také multiplayerový režim, který umožňuje hráčům soutěžit proti sobě. Mezi hlavními změnami v pokračování byla vylepšená grafika a nové herní mechanismy, které přinášejí rozmanitější zážitky ze závodění.</p>
                <p>Dalším zajímavým prvkem jsou minihry a nové výzvy, které hráčům umožňují zlepšit své závodní dovednosti a zároveň si užívat zábavu ve světě Auta.</p>
            </div>
            <div>
                <h3>Dobrodružství z Kardanové Lhoty</h3><br>
                <p>Cars: Radiator Springs Adventures je druhá hra v sérii Auta. Byla vydaná exkluzivně pro PC 6. června 2006, ve stejný den jako Cars: The Videogame, a tři dny před premiérou filmu Auta, přestože se děj obou her odehrává po událostech filmu.</p>
                <p>Na rozdíl od ostatních her Auta, Radiator Springs Adventures  nemá hlavní příběh. Místo toho nabízí hráčům různé minihry, které mohou procházet v libovolném pořadí. Jedinou výjimkou je hra Chopper-Hopper, která se odemkne až po dokončení všech ostatních deseti her alespoň jednou.</p>
                <p>Hráči si mohou vychutnat různé výzvy, které jsou inspirovány prostředím Radiator Springs. Minigames zahrnují závody, sbírání předmětů, parkování a mnoho dalších zábavných aktivit, které hráči mohou plnit na vlastní pěst nebo s přáteli.</p>
                <p>Hra je zaměřena na zábavu a volnost, což znamená, že není žádný tlak na dosažení určitého cíle nebo pokroku v příběhu. To činí Radiator Springs Adventures zábavnou a oddechovou volbou pro fanoušky filmové série  Auta .</p>
            </div>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleHry as $auto)
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