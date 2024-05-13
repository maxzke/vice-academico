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
        Schema::create('carrera_plan', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreignId('plan_id');
            $table->foreign('plan_id')->references('id')->on('planes');
            $table->integer('alumnos');
            $table->integer('aprobados');
            $table->integer('reprobados');
            $table->integer('baja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrera_plan');
    }
};
