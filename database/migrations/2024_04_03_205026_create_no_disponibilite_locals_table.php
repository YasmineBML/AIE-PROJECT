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
        Schema::create('no_disponibilite_locals', function (Blueprint $table) {
            $table->id('idnds');
            $table->foreignId('idlocal')->constrained('locals');
            $table->foreignId('idND')->constrained('nondisponibilites');
            $table->timestamps();

            $table->foreign('idlocal')->references('idlocal')->on('locals')->onDelete('cascade');
            $table->foreign('idND')->references('idND')->on('nondisponibilites')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('no_disponibilite_locals');
    }
};
