<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/*
* DatabaseSeeder je hlavní třída, která diriguje všechny ostatní seedery.
* Umožňuje spustit více seedovacích tříd najednou, aniž by se musely volat ručně.
*/
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Tady je to zakomentované, protože aplikace nepoužívá defaultní tabulku users nebo nepotřebuje testovacího uživatele
        /*

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        $this->call([ //volá metodu run() každého uvedeného seederu
            vytvorAuta::class, //třída vytvorAuta obsahuje data pro tabulku auta, stejně i ostatní seedery naplní tabulky, které odpovídají jejich názvům
            vytvorAuta2::class,
            vytvorAuta3::class,
            vytvorHry::class,
            vytvorSerialy::class,
            vytvorVsechnyAuta::class,
        ]);
    }
}
