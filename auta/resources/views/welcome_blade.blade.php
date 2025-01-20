<x-guest-layout>
    <main>
        <section id="text">
            <h1>Vítejte na naší stránce</h1>
        </section>
        <p>Svět aut z Pixar filmů je bohatý, rozmanitý a plný osobitých postav, které nejsou jen vozidly, ale i živými, cítícími bytostmi s vlastními příběhy, emocemi a charakterem. Města jako Radiator Springs nejsou jen kulisy pro závody, ale jsou to skutečné komunity, kde každé auto má svůj vlastní příběh a místo. Blesk McQueen, nejrychlejší závodník na světě, se učí, že život není jen o vítězství, ale také o přátelství a pomoci ostatním. Zatímco někteří hrdinové se zaměřují na kariéru a úspěch, jiní jako Sally Carrera nebo Doktor Hudson se zaměřují na hodnoty jako rodina, historie a klidné životní tempo.</p>
        <br>
        <p>Každé auto má svou vlastní osobnost, ať už jde o komického Buráka, pracovitého Sheriffa nebo hippie Filmore, který ukazuje, že svět může být krásný i bez spěchu a materiálních věcí. Postavy v tomto světě procházejí osobními změnami, vyrovnávají se s vlastními zklamáními a rostou díky zkušenostem, které si během svých cest a závodů přinášejí. Tyto příběhy ukazují, že život není o tom, co máte, ale o tom, co se učíte a jak se spojujete s ostatními.</p>
        <br>
        <p>Svět Pixar aut není pouze o rychlých autech a divokých závodech, ale také o tom, jak auta – stejně jako lidé – čelí výzvám, procházejí krizemi a nakonec nacházejí cestu k osobnímu růstu. Je to místo, kde se na závodní dráze nebo ve městech jako Radiator Springs setkávají příběhy o odhodlání, přátelství, lásce a síle změny. Tento svět ukazuje, že opravdová hodnota není v tom, kolik pohárů máte na polici, ale v tom, co se naučíte na své cestě a jak se tyto lekce promítnou do vztahů s ostatními.</p>
    </main>
<!--Tento kód je pro přidání počítadla návštěvnosti na stránce. Je to externí služba, která generuje widget s počtem návštěvníků stránky.
Tento kód umístí na stránku malý widget, který zobrazuje počet návštěvníků webu.-->
    <main>
        <section id="text">
            <h1>Všechna auta</h1>
        </section>
        <hr>
        <section id="galerie">
            @foreach ($poleVsechnyAuta as $auto)
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
    Počítadlo návštěvníků: 
    <img src="https://hitwebcounter.com/counter/counter.php?page=18551476&style=0042&nbdigits=5&type=page&initCount=0"    
        title="Počítadlo" 
        Alt="Visit counter For Websites"   
    >                                                                                                                                    
</x-guest-layout>