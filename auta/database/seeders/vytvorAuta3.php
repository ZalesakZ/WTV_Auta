<?php

namespace Database\Seeders;

use App\Models\ModelAuto3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorAuta3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleAuta3 = [
            ["fixni_ID" => 1],
            ["fixni_ID" => 2],
            ["fixni_ID" => 3],
            ["fixni_ID" => 4],
        ];

        foreach ($poleAuta3 as $a) {
            ModelAuto3::insert([
                "fixni_ID" => $a["fixni_ID"]
            ]);
        }
    }
}