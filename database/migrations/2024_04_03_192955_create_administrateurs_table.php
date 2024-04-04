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
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id('idadmin');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email', 200)->unique(); // Définir une longueur maximale de 255 pour la colonne email
            $table->string('motdepasse');
            $table->timestamps();

            // Définir idadmin comme clé primaire
            $table->primary('idadmin');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
};
