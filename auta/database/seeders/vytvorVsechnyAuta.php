<?php

namespace Database\Seeders;

use App\Models\ModelVsechnyAuta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorVsechnyAuta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleVsechnyAuta = [
            ["fixni_ID" => 1, "jmeno" => "Blesk McQueen", "typ" => "Závodní", "pocet_vyher" => 93, "zavodni_cislo" => 95, "model_auta" => "2006 Handmade One-of-a-kind Race Car", "dabing_EN" => "Owen Wilson", "dabing_CZ" => "Richard Krajčo", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true, "info_o_autu" => "Blesk McQueen je mladý a ambiciózní závodní vůz s číslem 95, který je známý svou rychlostí a nezdolnou vůlí vyhrávat. Navzdory svému sebevědomí se od svých přátel naučil pokoru a týmového ducha. Jeho cesta od arogantního nováčka k respektovanému závodnímu šampionovi je inspirací pro všechny."],
            ["fixni_ID" => 2, "jmeno" => "Burák", "typ" => "Komický", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "1957 Haulital Hook'em",  "dabing_EN" => "Larry The Cable Guy", "dabing_CZ" => "Petr Novotný", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true, "info_o_autu" => "Burák je komický odtahový vůz a nejlepší přítel Bleska McQueena. Jeho upřímnost a bezstarostná povaha z něj dělají jednoho z nejoblíbenějších obyvatel Radiator Springs. Ať už jde o zábavné příběhy nebo nečekanou pomoc, Burák je vždy připraven rozzářit den každého, kdo ho zná."],
            ["fixni_ID" => 3, "jmeno" => "Sally Carrera", "typ" => "Stylový", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "2002 Porsche Carrera (996)",  "dabing_EN" => "Bonnie Hunt", "dabing_CZ" => "Kateřina Brožová", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true ,"info_o_autu" => "Sally Carrera je elegantní a chytré Porsche, které provozuje motel Cozy Cone v Radiator Springs. Své srdce vložila do oživení města a miluje jeho poklidnou atmosféru. Je také oporou pro Bleska McQueena a ukazuje mu, že někdy je důležitější cesta než cíl."],
            ["fixni_ID" => 4, "jmeno" => "Doktor Hudson", "typ" => "Závodní", "pocet_vyher" => 78, "zavodni_cislo" => 51, "model_auta" => "1951 Hudson Hornet",  "dabing_EN" => "Paul Newman", "dabing_CZ" => "Jan Teplý", "auta1" => true, "auta2" => false, "auta3" => true, "serialy" => false, "hry" => true,"info_o_autu" => "Doktor Hudson, známý jako Hudson Hornet, je legendární závodní vůz a několikanásobný šampion. Po skončení své závodní kariéry našel nový domov v Radiator Springs, kde se stal mentorem a inspirací pro Bleska McQueena. Jeho zkušenosti a moudrost jsou neocenitelné pro každého, kdo ho pozná."],
            ["fixni_ID" => 5, "jmeno" => "Frank", "typ" => "Pracovní",  "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "XXL MetroActual Combine", "dabing_EN" => "Steve Purcell", "dabing_CZ" => "Neznámý", "auta1" => true, "auta2" => false, "auta3" => true, "serialy" => false, "hry" => true,"info_o_autu" => "Frank je mohutný kombajn, který střeží pole poblíž Radiator Springs. Je zastrašující svou velikostí a hlídá pole s nekompromisní přesností. Navzdory své povaze je důležitým členem farmářské komunity."],
            ["fixni_ID" => 6, "jmeno" => "Fillmore", "typ" => "Hippie", "pocet_vyher" => 0,  "zavodni_cislo" => 0, "model_auta" => "1960 Volkswagen Bus", "dabing_EN" => "George Carlin", "dabing_CZ" => "Jiří Macháček", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true,"info_o_autu" => "Fillmore je mírumilovný Volkswagen Bus, který je známý svým uvolněným přístupem a láskou k organickým palivům. Provozuje vlastní čerpací stanici a šíří pozitivní energii mezi obyvateli města."],
            ["fixni_ID" => 7, "jmeno" => "Chick Hicks", "typ" => "Závodní", "pocet_vyher" => 48, "zavodni_cislo" => 86, "model_auta" => "1979 Shyster Cremlin", "dabing_EN" => "Michael Keaton", "dabing_CZ" => "Ladislav Županič", "auta1" => true, "auta2" => false, "auta3" => true, "serialy" => true, "hry" => true, "info_o_autu" => "Chick Hicks je závodník s číslem 86, který vždy toužil po slávě. Je známý svou agresivní taktikou a rivalitou s Bleskem McQueenem. I přes své nečestné chování je mezi závodníky nepřehlédnutelný."],
            ["fixni_ID" => 8, "jmeno" => "Luigi", "typ" => "Mechanik", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "1959 Fiat 500", "dabing_EN" => "Tony Shalhoub", "dabing_CZ" => "Jiří Prager", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true,"info_o_autu" => "Luigi je veselý italský Fiat 500, který má velkou vášeň pro pneumatiky. Společně se svým kolegou Guidem provozuje obchod s pneumatikami a je vždy nadšený z práce na závodních vozech."],
            ["fixni_ID" => 9, "jmeno" => "Elvis", "typ" => "Stylový", "pocet_vyher" => 0, "zavodni_cislo" => 0,  "model_auta" => "Pompadour Camper 1429 C.I. V-8", "dabing_EN" => "Sheryl Crow", "dabing_CZ" => "Neznámý", "auta1" => true, "auta2" => false, "auta3" => false, "serialy" => false, "hry" => true,"info_o_autu" => "Elvis je stylový obytný vůz s obrovským charismatem. Jeho pompadour střechu a hluboký hlas pozná každý. Kromě své záliby v hudbě je také mistrem show, kterou dokáže oslnit publikum."],
            ["fixni_ID" => 10, "jmeno" => "Šerif", "typ" => "Pracovní", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "1949 Mercury Police Cruiser", "dabing_EN" => "Michael Wallis", "dabing_CZ" => "Bolek Povívka", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true, "info_o_autu" => "Sheriff je starší policejní vůz, který dohlíží na pořádek v Radiator Springs. I když působí přísně, má velké srdce a stará se o bezpečnost všech obyvatel města."],
            ["fixni_ID" => 11, "jmeno" => "Popemobile", "typ" => "Speciální", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "Holy Motors Modified Truck", "dabing_EN" => "Neznámý", "dabing_CZ" => "Neznámý", "auta1" => false, "auta2" => true, "auta3" => false, "serialy" => false, "hry" => false, "info_o_autu" => "Popemobile je speciální vozidlo, které doprovází papeže na jeho cestách. Je uzpůsobený k tomu, aby chránil svého cestujícího a umožňoval mu být viděn davem věřících."],
            ["fixni_ID" => 12, "jmeno" => "Papež", "typ" => "Speciální", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "Holy Motors Vatican 7000", "dabing_EN" => "Neznámý", "dabing_CZ" => "Neznámý", "auta1" => false, "auta2" => true, "auta3" => false, "serialy" => false, "hry" => false,"info_o_autu" => "Papež je vážené auto, které ztělesňuje duchovní sílu a klid. Na každé veřejné akci je středem pozornosti a symbolizuje jednotu mezi všemi auty."],
            ["fixni_ID" => 13, "jmeno" => "Francesco Bernoulli", "typ" => "Závodní", "pocet_vyher" => 27, "zavodni_cislo" => 1, "model_auta" => "2009 Formula FB1 Prototype Racer", "dabing_EN" => "John Turturro", "dabing_CZ" => "Matěj Ruppert", "auta1" => false, "auta2" => true, "auta3" => false, "serialy" => false, "hry" => true, "info_o_autu" => "Francesco je hrdý italský závodník a věčný rival Bleska McQueena. S číslem 1 a elegancí formule je na závodní dráze téměř nepřekonatelný. Rád se chlubí svými dovednostmi a rychlostí."],
            ["fixni_ID" => 14, "jmeno" => "Cruz Ramirezová", "typ" => "Závodní", "pocet_vyher" => 46, "zavodni_cislo" => 51, "model_auta" => "2017 CRS Sports Coupe", "dabing_EN" => "Cristela Alonzo", "dabing_CZ" => "Vendula Příhodová", "auta1" => false, "auta2" => false, "auta3" => true, "serialy" => true, "hry" => true,"info_o_autu" => "Cruz je talentovaná závodnice, která se stala mentorem mladých jezdců. S číslem 51 na kapotě a odvahou čelit výzvám inspiruje ostatní svým příběhem a odhodláním."],
            ["fixni_ID" => 15, "jmeno" => "Guido", "typ" => "Mechanik", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "Alza Tutto Forklift", "dabing_EN" => "Guido Quaroni", "dabing_CZ" => "Jiří Lábus", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true,"info_o_autu" => "Guido je rychlý a nadšený vysokozdvižný vozík, který je mistrem v přezouvání pneumatik. Přestože je malý, má obrovské nadšení pro závody a vždy chce být součástí akce."],
            ["fixni_ID" => 16, "jmeno" => "Bourák", "typ" => "UFO", "pocet_vyher" => 0, "zavodni_cislo" => 0,  "model_auta" => "UFO", "dabing_EN" => "Larry the Cable Guy", "dabing_CZ" => "Petr Novotný", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => true,"info_o_autu" => "Bourák je tajemné UFO, které zbožňuje objevování neznámého. Často se objevuje nečekaně a fascinuje ostatní svými neobvyklými schopnostmi a záhadným původem.

"],
// 

        ];

        foreach ($poleVsechnyAuta as $a) {
            ModelVsechnyAuta::insert([
                "fixni_ID" => $a["fixni_ID"],
                "jmeno" => $a["jmeno"],
                "typ" => $a["typ"],
                "pocet_vyher" => $a["pocet_vyher"],
                "zavodni_cislo" => $a["zavodni_cislo"],
                "model_auta" => $a["model_auta"],
                "dabing_EN" => $a["dabing_EN"],
                "dabing_CZ" => $a["dabing_CZ"],
                "auta1" => $a["auta1"],
                "auta2" => $a["auta2"],
                "auta3" => $a["auta3"],
                "serialy" => $a["serialy"],
                "hry" => $a["hry"],
                "info_o_autu" => $a["info_o_autu"],
            ]);
        }
    }
}
