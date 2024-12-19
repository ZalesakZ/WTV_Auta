<?php

namespace Database\Seeders;

use App\Models\Auto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorAuta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //"nazev", "druh"
        $auta = [
            ["name" => "Blesk", "type" => 1, "zavodnik" => true, "pocet_poharu" => 50, "historie" => "blesk info", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true ],
            ["name" => "Burák", "type" => 2, "zavodnik" => false, "pocet_poharu" => 0,"historie" => "burák info", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true ],
            ["name" => "Nevim", "type" => 3, "zavodnik" => true, "pocet_poharu" => 20,"historie" => "nvm info", "auta1" => true, "auta2" => false, "auta3" => false, "serialy" => false, "hry" => false ],
            ["name" => "Nevim2", "type" => 4, "zavodnik" => false, "pocet_poharu" => 0, "historie" => "nvm2 info", "auta1" => true, "auta2" => false, "auta3" => true, "serialy" => false, "hry" => true ],
        ];

        foreach($auta as $a)
        {
            Auto::insert([
            "jmeno" => $a["name"],
            "typ" => $a["type"],
            ]);
        }
        
    }
}
