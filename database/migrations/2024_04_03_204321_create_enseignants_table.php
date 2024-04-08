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
            $table->string('email',200);
            $table->string('motdepasse');
            $table->enum('type', ['vacataire', 'permanent', 'doctorant']);
           // $table->string('type');
            $table->string('grade')->nullable();
            $table->timestamps();

            //// Définir idenseignant comme clé primaire
            $table->primary('idenseignant');

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
