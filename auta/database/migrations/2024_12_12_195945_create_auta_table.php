<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //anonymní třída dědící od Migrace
{
    /**
     * Run the migrations.
     */
    public function up(): void //funkce vytvářející tabulku a definující strukturu
    {
        Schema::create('auta', function (Blueprint $table) { //vytváří novou tabulku - 1. parametr název, 2. parametr je funkce která definuje strukturu tabulky pomocí objektu $table
            //vytvoření sloupců tabulky a přiřazení datových typů
            $table->id();
            $table->unsignedBigInteger('ID_obrazku')->default(0);
            $table->string('jmeno');
            $table->string('typ');
            $table->boolean("zavodnik")->default(false);
            $table->unsignedBigInteger('pocet_poharu')->default(0);
            $table->string('historie')->nullable();
            $table->boolean("auta1")->default(false);
            $table->boolean("auta2")->default(false);
            $table->boolean("auta3")->default(false);
            $table->boolean("serialy")->default(false);
            $table->boolean("hry")->default(false);

            $table->timestamps();

            // Foreign keys
            //cekce pro připojení cizího klíče z jiné tabulky - nepoužita
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //vrací změny zpět - odstraňuje tabulku
    {
        Schema::dropIfExists('auta');
    }
};
