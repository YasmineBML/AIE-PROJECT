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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id('idgroupe');
            $table->integer('nombre_etudiant');
            $table->unsignedBigInteger('idsection');

            // Clé étrangère
            $table->foreign('idsection')->references('idsection')->on('sections')->onDelete('cascade');

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
