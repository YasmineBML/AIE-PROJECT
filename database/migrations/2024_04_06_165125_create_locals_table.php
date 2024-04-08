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
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->integer('capacite');
            $table->string('type');
<<<<<<< HEAD:database/migrations/2024_04_03_203950_create_locals_table.php
            $table->unsignedBigInteger('idexamen')->nullable()->unsigned();

            // Clé étrangère
            $table->foreign('idexamen')->references('idexamen')->on('examens')->onDelete('cascade');

=======
>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff:database/migrations/2024_04_06_165125_create_locals_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};
