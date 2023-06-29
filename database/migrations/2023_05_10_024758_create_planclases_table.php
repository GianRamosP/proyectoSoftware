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
        Schema::create('planclases', function (Blueprint $table) {
            $table->id();

            $table->integer('idDocente');
            $table->integer('idPeriodo');
            $table->integer('idCurso');
            $table->string('competencia');
            $table->string('semana');
            $table->date('sesionfecha');
            $table->string('proposito');
            $table->string('recursos');
            $table->string('conocimientos');
            $table->string('actividades');
            $table->time('tiempo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planclases');
    }
};
