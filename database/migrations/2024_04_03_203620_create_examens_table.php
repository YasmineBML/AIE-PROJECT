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
        Schema::create('examens', function (Blueprint $table) {

            $table->id('idexamen'); // Clé primaire idexamen
            $table->string('duree');
            $table->string('session');
            $table->unsignedBigInteger('idmodule')->unsigned(); // Clé étrangère idmodule

            $table->id();
            $table->string('Date_examen');
            $table->string('crenaux');
            $table->foreignId('module_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
