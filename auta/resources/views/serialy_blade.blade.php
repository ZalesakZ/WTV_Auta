<x-guest-layout>
<main>
        <section id="text">
            <h1>Seriály</h1>
            <div>
                <h3>Burákovy povídačky</h3><br>
                <p>Burákovy povídačky (Cars Toons: Mater's Tall Tales) je animovaný seriál, který vznikl jako spin-off filmové série Auta od Pixaru. Seriál se zaměřuje na postavu Buráka, který vypráví různé vtipné a nadsazené příběhy o svých dobrodružstvích, které se v jeho fantazii stávají skutečnými. Každý díl je samostatným příběhem, ve kterém Burák popisuje svou roli v různých neuvěřitelných situacích, například jako astronaut, superhrdina nebo pirát.</p> 
                <p>Seriál měl premiéru v roce 2008 a obsahuje několik krátkých epizod, které si udržují komediální tón a jsou zaměřeny na mladší publikum. Kromě Buráka, který je hlavním vypravěčem, se v seriálu objevují i další postavy ze světa Auta, včetně Bleska McQueena, Sally a dalších, kteří se účastní Burákových příběhů a pomáhají tvořit zábavnou atmosféru.</p> 
                <p>Burákovy povídačky jsou oblíbené pro svůj humor a kreativní příběhy, které kombinují vtipné situace s fantastickými dobrodružstvími, čímž se staly oblíbeným doplňkem k filmové sérii Auta a přinesly ještě více zábavy pro fanoušky všech věkových kategorií.</p>
            </div>
            <div>
                <h3>Auta na cestách</h3><br>
                <p>Auta na cestách (v originále Cars on the Road) je animovaný seriál, který navazuje na filmovou sérii Auta od Pixaru. Premiéru měl v roce 2022 na streamovací platformě Disney+. Seriál sleduje hlavní postavy Bleska McQueena a jeho nejlepšího přítele Buráka, kteří se vydávají na dobrodružnou cestu napříč Spojenými státy, aby navštívili sestru Buráka, která se nachází na jiném konci země.</p>
                <p>Seriál je rozdělen do několika krátkých epizod, přičemž každá z nich představuje nový příběh a nová místa, která Blesk a Burák navštíví. Každé místo je plné nových postav a zábavných situací, které jsou typické pro humor a nadsázku celého světa Auta. Tento seriál nabízí novou dávku dobrodružství, ale také udržuje duch přátelství mezi hlavními hrdiny a jejich vzájemnou podporu.</p>
                <p>Auta na cestách jsou ideální pro fanoušky Auta, kteří si užívají nové příběhy a vtipy, a zároveň pro nové diváky, kteří si chtějí užít dobrodružství těchto ikonických postav. Seriál ukazuje nejen vtipné momenty, ale i silné přátelské pouto mezi Bleskem McQueenem a Burákem, což je jeden z klíčových prvků celé franšízy.</p>
            </div>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleSerialy as $auto)
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