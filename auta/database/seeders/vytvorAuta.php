<?php

namespace Database\Seeders;

use App\Models\ModelAuto1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorAuta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleAuta = [
            ["fixni_ID" => 1],
            ["fixni_ID" => 2],
            ["fixni_ID" => 3],
            ["fixni_ID" => 4],
       
        ];

        foreach ($poleAuta as $a) {
            ModelAuto1::insert([
                "fixni_ID" => $a["fixni_ID"]
            ]);
        }
    }
}
