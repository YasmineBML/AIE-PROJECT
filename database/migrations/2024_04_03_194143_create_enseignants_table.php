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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id('idenseignant'); // Clé primaire idenseignant
            $table->string('nom');
            $table->string('prenom');
            $table->string('email',200)->unique();
            $table->string('motdepasse');
            $table->string('type');
            $table->string('grade');
            $table->unsignedBigInteger('idexamen'); // Clé étrangère idexamen
            $table->timestamps();

            //// Définir idenseignant comme clé primaire
            $table->primary('idenseignant');

            // Définir idexamen comme clé étrangère
            $table->foreign('idexamen')->references('idexamen')->on('examens');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('enseignants');
    }
};
