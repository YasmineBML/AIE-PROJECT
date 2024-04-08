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
        Schema::create('specialites', function (Blueprint $table) {
<<<<<<<< HEAD:database/migrations/2024_04_03_194532_create_specialites_table.php
            $table->id('idspecialite');
            $table->string('nomspecialite');
========
            $table->id();
            $table->string('nom');
            $table->string('departement');
>>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff:database/migrations/2024_04_06_160529_create_specialites_table.php
            $table->string('niveau');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialites');
    }
};
