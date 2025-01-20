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
        Schema::create('auta', function (Blueprint $table) { 
            $table->id();
            $table->unsignedBigInteger('fixni_ID')->unique();
            
            $table->timestamps();

            // Foreign keys 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('auta');
    }
};
