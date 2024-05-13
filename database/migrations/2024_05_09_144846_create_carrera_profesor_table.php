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
        Schema::create('carrera_profesor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesores');
            $table->foreignId('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->timestamp('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrera_profesor');
    }
};
