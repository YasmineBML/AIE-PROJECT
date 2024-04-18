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
        Schema::create('enseignants_disponibilites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enseignant_id')->constrained()->unsigned();
            $table->foreignId('disponibilite_id')->constrained()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants_disponibilites');
    }
};
