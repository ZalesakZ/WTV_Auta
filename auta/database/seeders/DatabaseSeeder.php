<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ 
            vytvorAuta::class,
            vytvorAuta2::class,
            vytvorAuta3::class,
            vytvorHry::class,
            vytvorSerialy::class,
            vytvorVsechnyAuta::class,
        ]);
    }
}
