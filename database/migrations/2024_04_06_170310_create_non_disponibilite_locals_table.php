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
        Schema::create('non_disponibilite_locals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('locals_id')->constrained();
            $table->foreignId('non_disponibilites_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('non_disponibilite_locals');
    }
};
