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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
<<<<<<< HEAD:database/migrations/2024_04_03_194952_create_modules_table.php
            $table->BigInteger('idspecialite')->unsigned(); // Clé étrangère idspecialite
            $table->timestamps();

            // Définir idspecialite comme clé étrangère
            $table->foreign('idspecialite')->references("idspecialite")->on('specialites');
=======
            $table->string('semestre');
            $table->foreignId('specialites_id')->constrained();
            $table->timestamps();

            
>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff:database/migrations/2024_04_06_160925_create_modules_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
