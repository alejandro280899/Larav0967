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
        Schema::create('coche', function (Blueprint $table) {
            $table->id();
            $table->string('Numero_Licencia');
            $table->string('Año_modelo');
            $table->string('Hacer');
            $table->string('Modelo');
            $table->timestamps();
            $table->unsignedBigInteger('coche_id')->unique();
        
        });
    
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};
