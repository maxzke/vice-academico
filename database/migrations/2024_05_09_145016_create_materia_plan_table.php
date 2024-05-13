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
        Schema::create('materia_plan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias');

            $table->foreignId('plan_id');
            $table->foreign('plan_id')->references('id')->on('planes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_plan');
    }
};
