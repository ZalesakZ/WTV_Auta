<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('auto2', function (Blueprint $table) {
            $table->id();
            $table->string('jmeno')->unique();
            $table->unsignedBigInteger('typ');
            $table->string('zavodnik')->default("ne");
            $table->unsignedBigInteger('pocet_poharu')->default(0);
            $table->string('historie')->nullable();
            $table->string('auta1')->default("ne");
            $table->string('auta2')->default("ne");
            $table->string('auta3')->default("ne");
            $table->string('serialy')->default("ne");
            $table->string('hry')->default("ne");

            $table->timestamps();

            // Foreign keys
            $table->foreign('typ')->on('typy')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto2');
    }
};
