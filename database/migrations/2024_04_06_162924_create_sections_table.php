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
        Schema::create('sections', function (Blueprint $table) {
<<<<<<<< HEAD:database/migrations/2024_04_03_203008_create_sections_table.php
            $table->id('idsection');
            $table->string('nomsection');
            $table->unsignedBigInteger('idspecialite')->unsigned();;

            // Clé étrangère
            $table->foreign('idspecialite')->references('idspecialite')->on('specialites')->onDelete('cascade');

========
            $table->id();
            $table->string('nom');
            $table->foreignId('specialites_id')->constrained();
>>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff:database/migrations/2024_04_06_162924_create_sections_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
