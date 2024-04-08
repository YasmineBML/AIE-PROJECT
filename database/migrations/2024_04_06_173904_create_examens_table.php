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
<<<<<<<< HEAD:database/migrations/2024_04_03_203620_create_examens_table.php
            $table->id('idexamen'); // Clé primaire idexamen
            $table->string('duree');
            $table->string('session');
            $table->unsignedBigInteger('idmodule')->unsigned(); // Clé étrangère idmodule
========
            $table->id();
            $table->string('Date_examen');
            $table->string('crenaux');
            $table->foreignId('module_id')->constrained();
>>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff:database/migrations/2024_04_06_173904_create_examens_table.php
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
