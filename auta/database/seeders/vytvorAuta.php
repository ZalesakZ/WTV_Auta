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
            ["ID_obrazku" => 1, "jmeno" => "Blesk McQueen", "typ" => "typ1", "zavodnik" => true, "pocet_poharu" => 50, "historie" => "blesk info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["ID_obrazku" => 2,"jmeno" => "Burák Příjmení", "typ" => "typ2", "zavodnik" => false, "pocet_poharu" => 0,"historie" => "Burák info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["ID_obrazku" => 3,"jmeno" => "Sally Carrera", "typ" => "typ3", "zavodnik" => false, "pocet_poharu" => 0,"historie" => "Sally Carrera info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["ID_obrazku" => 4,"jmeno" => "Doktor Hudson", "typ" => "typ4", "zavodnik" => false, "pocet_poharu" => 0, "historie" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
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
