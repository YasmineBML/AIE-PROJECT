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
        Schema::create('charge_modules', function (Blueprint $table) {
            $table->id('idcharge');
            $table->unsignedBigInteger('idenseignant')->nullable()->unsigned();
            $table->unsignedBigInteger('idmodule')->nullable()->unsigned();


            $table->foreign('idenseignant')->references('idenseignant')->on('enseignants')->onDelete('cascade');
            $table->foreign('idmodule')->references('idmodule')->on('modules')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charge_modules');
    }
};
