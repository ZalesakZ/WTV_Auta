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
            ["fixni_ID" => 5],
            ["fixni_ID" => 6],
            ["fixni_ID" => 7],
            ["fixni_ID" => 8],
            ["fixni_ID" => 9],
            ["fixni_ID" => 10],
            ["fixni_ID" => 11],
            ["fixni_ID" => 12],
            ["fixni_ID" => 13],
            ["fixni_ID" => 14],
            ["fixni_ID" => 15],
            ["fixni_ID" => 16],
       
        ];

        foreach ($poleAuta as $a) { //foreach prochází každou položku v poli $poleAuta dočasně uloženou do proměnné $a
            //Laravel používá model ModelAuto1 k přímému vložení dat do tabulky auta1
            ModelAuto1::insert([ //metoda insert() přijímá pole s hodnotami sloupců, které se vloží jako nový řádek do tabulky
                "fixni_ID" => $a["fixni_ID"] //např. do sloupce fixni_ID je vložena hodnota fixni_ID z $a
            ]);
        }
    }
}
