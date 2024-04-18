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
        Schema::create('enseignants_modules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('enseignant_id')->constrained()->unsigned();
            $table->foreign('enseignant_id')->references("id")
            ->on("enseignants")->onDelete("cascade");

            $table->foreignId('module_id')->constrained()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants_modules');
    }
};
