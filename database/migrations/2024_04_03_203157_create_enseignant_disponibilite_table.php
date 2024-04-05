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
        Schema::create('enseignant_disponibilite', function (Blueprint $table) {
            $table->id('id_Dispo_Ens');
            $table->unsignedBigInteger('enseignant_id')->unsigned();
            $table->unsignedBigInteger('disponibilite_id')->unsigned();

            // Clés étrangères
            $table->foreign('enseignant_id')->references('idenseignant')->on('enseignants')->onDelete('cascade');
            $table->foreign('disponibilite_id')->references('id_disponibilite')->on('disponibilites')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignant_disponibilite');
    }
};
