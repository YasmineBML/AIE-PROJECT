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
<<<<<<< HEAD:database/migrations/2024_04_03_204855_create_charge_modules_table.php
        Schema::create('charge_modules', function (Blueprint $table) {
            $table->id('idcharge');
            $table->unsignedBigInteger('idenseignant')->nullable()->unsigned();
            $table->unsignedBigInteger('idmodule')->nullable()->unsigned();


            $table->foreign('idenseignant')->references('idenseignant')->on('enseignants')->onDelete('cascade');
            $table->foreign('idmodule')->references('idmodule')->on('modules')->onDelete('cascade');

=======
        Schema::create('affecters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('groupes_id')->constrained();
            $table->foreignId('local_id')->constrained();
>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff:database/migrations/2024_04_06_165503_create_affecters_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affecters');
    }
};
