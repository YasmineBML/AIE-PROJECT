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
        Schema::create('disponibilites', function (Blueprint $table) {
            $table->id();
            $table->enum('jour', ['Samedi', 'Dimanche', 'Lundi','Mardi', 'Mercredi', 'Jeudi']);
            $table->enum('crenaux', ['8h-10h', '10h-12h', '12h-14h','14h-16h']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilites');
    }
    
};
