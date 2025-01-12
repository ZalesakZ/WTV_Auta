<?php

namespace Database\Seeders;

use App\Models\ModelAuto1; // importuje model ModelAuto1, který reprezentuje databázovou tabulku auta1 - tento model se používá pro komunikaci s databází
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorAuta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Pole obsahuje několik záznamů, kde každý záznam reprezentuje řádek databázové tabulky; 
        //každý záznam má hodnoty odpovídající sloupcům v tabulce (např. jmeno, typ, zavodnik atd.)
        $poleAuta = [
            ["fixni_ID" => 1],
            ["fixni_ID" => 2],
            ["fixni_ID" => 3],
            ["fixni_ID" => 4],
       
        ];

        foreach ($poleAuta as $a) { //foreach prochází každou položku v poli $poleAuta dočasně uloženou do proměnné $a
            //Laravel používá model ModelAuto1 k přímému vložení dat do tabulky auta1
            ModelAuto1::insert([ //metoda insert() přijímá pole s hodnotami sloupců, které se vloží jako nový řádek do tabulky
                "ID_obrazku" => $a["ID_obrazku"], //např. do sloupce ID_obrazku je vložena hodnota ID_obrazku z $a
                "jmeno" => $a["jmeno"],
                "typ" => $a["typ"],
                "zavodnik" => $a["zavodnik"],
                "pocet_poharu" => $a["pocet_poharu"],
                "historie" => $a["historie"],
                "auta1" => $a["auta1"],
                "auta2" => $a["auta2"],
                "auta3" => $a["auta3"],
                "serialy" => $a["serialy"],
                "hry" => $a["hry"],
            ]);
        }
    }
}
