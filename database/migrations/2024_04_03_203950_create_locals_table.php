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
        Schema::create('locals', function (Blueprint $table) {
            $table->id('idlocal');
            $table->string('libelle');
            $table->integer('capacite');
            $table->string('type');
            $table->unsignedBigInteger('idexamen')->nullable();

            // Clé étrangère
            $table->foreign('idexamen')->references('idexamen')->on('examens')->onDelete('cascade');

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};
