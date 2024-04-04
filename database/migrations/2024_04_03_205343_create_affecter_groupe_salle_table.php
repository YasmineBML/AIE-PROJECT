<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('affecter_groupe_salle', function (Blueprint $table) {
            $table->id('idaffecter');
            $table->foreignId('idlocal')->constrained('locals');
            $table->foreignId('idgroupe')->constrained('groupes');
            $table->timestamps();

            // Ajout des clés étrangères
            $table->foreign('idlocal')->references('idlocal')->on('locals')->onDelete('cascade');
            $table->foreign('idgroupe')->references('idgroupe')->on('groupes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affecter_groupe_salle');
    }
};
