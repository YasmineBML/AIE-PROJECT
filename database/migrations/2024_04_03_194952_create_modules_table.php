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
        Schema::create('modules', function (Blueprint $table) {
            $table->id('idmodule'); // Clé primaire idmodule
            $table->string('libelle');
            $table->BigInteger('idspecialite')->unsigned(); // Clé étrangère idspecialite
            $table->timestamps();

            // Définir idspecialite comme clé étrangère
            $table->foreign('idspecialite')->references("idspecialite")->on('specialites');
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
