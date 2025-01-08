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
        Schema::create('serialy', function (Blueprint $table) {
            $table->id();
            $table->string('jmeno');
            $table->unsignedBigInteger('typ');
            $table->string('zavodnik')->default("ne");
            $table->unsignedBigInteger('pocet_poharu')->default(0);
            $table->string('historie')->nullable();
            $table->boolean("auta1")->default(false);
            $table->boolean("auta2")->default(false);
            $table->boolean("auta3")->default(false);
            $table->boolean("serialy")->default(false);
            $table->boolean("hry")->default(false);
            
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
        Schema::dropIfExists('serialy');
    }
};
