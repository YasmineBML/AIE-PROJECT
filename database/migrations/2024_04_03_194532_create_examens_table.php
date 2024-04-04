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
        Schema::create('examens', function (Blueprint $table) {
            $table->id('idexamen'); // Clé primaire idexamen
            $table->string('duree');
            $table->string('session');
            $table->unsignedBigInteger('idmodule'); // Clé étrangère idmodule
            $table->timestamps();

            // Définir idmodule comme clé étrangère
            $table->foreign('idmodule')->references('idmodule')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('examens');
    }
};
