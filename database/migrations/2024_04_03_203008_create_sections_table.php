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
        Schema::create('sections', function (Blueprint $table) {

            $table->id('idsection');
            $table->string('nomsection');
            $table->unsignedBigInteger('idspecialite')->unsigned();;

            // Clé étrangère
            $table->foreign('idspecialite')->references('idspecialite')->on('specialites')->onDelete('cascade');


            $table->id();
            $table->string('nom');
            $table->foreignId('specialites_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
