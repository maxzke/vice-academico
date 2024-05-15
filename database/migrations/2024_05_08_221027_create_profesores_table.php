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
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campus_id');
            $table->foreign('campus_id')->references('id')->on('campus');
            $table->foreignId('sni_id');
            $table->foreign('sni_id')->references('id')->on('sni');
            $table->foreignId('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->unique(['nombre','apellido_p','apellido_m']);
            $table->timestamp('ingreso');
            $table->string('sexo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
