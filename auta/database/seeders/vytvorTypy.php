<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vytvorTypy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleTypy = [
            ["normální", "Gray"],
            ["sportovní", "Orange"],
            ["off-road", "Blue"],
            ["elektrický", "Brown"],
            ["4x4", "Purple"],
        ];

        foreach($poleTypy as $typ)
        {
            DB::table("typy")->insert([
                "nazev" => $typ[0],
                "barva" => $typ[1],
            ]);
        }
    }
}
