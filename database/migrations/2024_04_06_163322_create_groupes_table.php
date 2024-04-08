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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('nombre_etudiant');
<<<<<<<< HEAD:database/migrations/2024_04_03_203157_create_groupes_table.php
            $table->unsignedBigInteger('idsection')->unsigned();

            // Clé étrangère
            $table->foreign('idsection')->references('idsection')->on('sections')->onDelete('cascade');

========
            $table->foreignId('sections_id')->constrained();
>>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff:database/migrations/2024_04_06_163322_create_groupes_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupes');
    }
};
